<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="icon" href="assets/img/favicon.png" type="image/x-icon">
</head>
<body>
    <div class="content-login">
        <form action="controller/login.php" method="post" class="form-container">
            <div class="form-title">Aprenda a <br> <strong>Investir</strong></div>
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" id="email" name="email" class="form-input" required placeholder="Email">

            <label for="senha" class="form-label">Senha:</label>
            <input type="password" id="senha" name="senha" class="form-input" required placeholder="Senha">

            <input type="submit" value="Entrar" class="form-submit">
        </form>
        <span class="direitos">Powered by: <a href="https://github.com/Joas-Vidal" target="_blank">Joás Vidal</a></span>
    </div>
</body>
</html>
