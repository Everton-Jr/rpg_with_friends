<?php
$ROOT_PATH = '../';
require_once("{$ROOT_PATH}site_things.php");
require_once("{$ROOT_PATH}db_connection/connection.php");

if (isset($_POST['btn-cadastrar'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];
    if ($password == $confirmPassword) {
        echo "
        $name<br>
        $username<br>
        $password<br>
        ";
    }
}

Redirect($ROOT_PATH);
?>