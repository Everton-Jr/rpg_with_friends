<?php

$ROOT_PATH = '.';
require_once("{$ROOT_PATH}/assets/site_things.php");

/* $account;
if (!$account) {
    Redirect('login/');
} */

$index = new Site('Minhas campanhas');
?>

<?php $index->Start() ?>

<header class="bg-dark">
    <h1 class="text-light">Minhas campanhas</h1>
</header>

<main class="d-flex justify-content-center align-items-center min-vh-100 w-100 bg-dark">
    <div id="cartao-campanha" class="bg-light">
        <h1>A volta dos que não foram</h1>
        <p>Uma campanha sobre não sei o que</p>
        <a href="">Isso é um link para entrar na campanha</a>
    </div>
</main>
<script src="js/main.js"></script>

<?php $index->End() ?>