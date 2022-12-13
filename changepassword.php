<?php
    include "../../classes/userLogin.php";

    $pass = $_POST["pass"];
    $email = $_POST["email"];
    $user = new user_login;
    $data = $user->changePassword($email, $pass);
    echo 'success';
?>