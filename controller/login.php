<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = htmlspecialchars($_POST['senha']);

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = ""; // Se você configurou uma senha para o root, insira aqui.
    $dbname = "fii_data";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta para verificar se o usuário existe
    $stmt = $conn->prepare("SELECT id, senha FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Usuário encontrado, verificar senha

        
        $row = $result->fetch_assoc();
        if ($senha = $row['senha']) {
            // Senha correta, login bem-sucedido
            // Redirecionar para index.php
            header("Location: ../index.php");
            exit; // Importante: encerrar o script após o redirecionamento
        } else {
            // Senha incorreta
            echo "Senha incorreta";
        }
    } else {
        // Usuário não encontrado
        echo "Usuário não encontrado";
    }

    // Fechar a conexão e liberar os recursos
    $stmt->close();
    $conn->close();
}
?>
