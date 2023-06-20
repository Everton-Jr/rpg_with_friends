<?php

$ROOT_PATH = '.';
require_once("{$ROOT_PATH}/assets/site_things.php");

$account;
if (!$account) {
    Redirect('login/');
}

$index = new Site('Home');
?>

<?php $index->Start() ?>

<main class="d-flex justify-content-center align-items-center min-vh-100 w-100 bg-dark">
</main>
<script src="js/main.js"></script>

<?php $index->End() ?>