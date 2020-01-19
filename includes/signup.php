<?php

if (isset($_POST['signup-submit'])) {

    require 'dbh.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password'];
    $username = $_POST['nick'];
    $avatar = $_FILES['password'];

}

?>