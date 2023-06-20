<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/assets/site_things.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/assets/db/connection.php");

if (isset($_POST['btn-cadastrar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT account_username, account_password FROM account WHERE account_username = '$username'";
}
?>