<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/assets/site_things.php");
require_once("{$_SERVER['DOCUMENT_ROOT']}/assets/db/connection.php");

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
        $sql = "INSERT INTO account(account_name, account_username, account_password)
                VALUES ('$name', '$username', '$password')";
        try {
            $register = mysqli_query($connection, $sql);
            if ($register) {
                Alert('conta criada com sucesso');
                Redirect($_SERVER['DOCUMENT_ROOT']);
            }
        } catch (\Throwable $error) {
            if (strpos($error, "Duplicate entry")) {
                Alert('Este usuário já existe');
            } else {
                Alert('Erro não identificado ao cadastrar usuário!');
            }
            Redirect('/');
        }
        mysqli_close($connection);
    }
}
?>