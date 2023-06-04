<?php

$ROOT_PATH = '';
require_once("{$ROOT_PATH}site_things.php");

$login = NULL;
if (!$login) {
    Redirect('login/');
}

$cadastrar = new Site('Home', $ROOT_PATH);
?>

<?php $cadastrar->Start() ?>

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

<?php $cadastrar->End() ?>