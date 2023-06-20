<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/assets/site_things.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/assets/db_connection/connection.php");
$login = NULL;

$cadastrar = new Site('Cadastrar');
?>
<?php $cadastrar->Start() ?>

<main class="d-flex justify-content-center align-items-center min-vh-100 w-100 bg-dark">
    <!-- Login -->
    <form action="/assets/db_connection/cadastrar_connection.php" method="POST" class="d-flex flex-column gap-3 text-light">
        <div>
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div>
            <label for="username" class="form-label">Nome de Usuário</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div>
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div>
            <label for="confirm-password" class="form-label">Confirmar senha</label>
            <input type="password" name="confirm-password" class="form-control">
        </div>
        <input type="submit" value="Cadastrar" name="btn-cadastrar" class="btn btn-primary w-100">
        <p>Já tem cadastro? <a href="./" class="link-primary link-underline-opacity-0">Entrar</a></p>
    </form>
</main>
<script src="/js/validate/validate_cadastro.js"></script>
<?php $cadastrar->End() ?>