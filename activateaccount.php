<?php
    include "../../classes/userLogin.php";


    if (isset($_GET['id'])){
        $user = new user_login;
        $ret = $user->activateaccount($_GET['id']);
        header("Location: ../../activated.php");     
    }
?>