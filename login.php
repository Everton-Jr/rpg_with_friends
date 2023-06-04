<?php

require_once('custom_functions.php');
echo basename(__FILE__, '.*');
$login = NULL;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEU RPG</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="scss/main.css">
</head>
<body>
    <main class="d-flex justify-content-center align-items-center min-vh-100 w-100 bg-dark">
        <!-- Login -->
        <form action="login.php" class="d-flex flex-column gap-3 text-light">
            <div>
                <label for="username" class="form-label">Usuário</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div>
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input type="submit" value="Entrar" class="btn btn-primary w-100">
            <p>Não tem cadastro? <a href="" class="link-primary link-underline-opacity-0">Cadastrar</a></p>
        </form>
    </main>
    <script src="js/main.js"></script>
</body>
</html>