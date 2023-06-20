<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/assets/site_things.php");

$account;
$login = new Site('Login');
?>

<?php echo $login->Start() ?>

<main class="d-flex justify-content-center align-items-center min-vh-100 w-100 bg-dark">
    <!-- Login -->
    <form action="/assets/db/login_connection.php" method="POST" class="d-flex flex-column gap-3 text-light">
        <div>
            <label for="username" class="form-label">Usuário</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div>
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" value="Entrar" name="btn-entrar" class="btn btn-primary w-100">
        <p>Não tem cadastro? <a href="cadastrar.php" class="link-primary link-underline-opacity-0">Cadastrar</a></p>
    </form>
</main>
<script src="/assets/js/validate/validate_cadastro.js"></script>
<?php $login->End() ?>