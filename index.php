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

<body class="index">
    <div class="sidebar bg-primary">   
        <a href="./?id=teste" class="btn">
            <span>Campanha 1 - O teste</span>
        </a>
    </div>

    <main class="d-flex justify-content-center align-items-center min-vh-100 w-100 bg-dark">
        <div id="cartao-campanha" class="bg-light">
            <h1>A volta dos que não foram</h1>
            <p>Uma campanha sobre não sei o que</p>
            <a href="">Isso é um link para entrar na campanha</a>
        </div>
    </main>
</body>
<script src="assets/js/main.js"></script>

<?php $index->End() ?>