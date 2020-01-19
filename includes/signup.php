<?php

if (isset($_POST['signup-submit'])) {

    require 'dbh.php';

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $sql = "SELECT * FROM uzytkownik WHERE Nazwa='$username' OR Email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($password != $password2) {
        header('Location: ./../pages/signup.php?error_password');
        exit();
    }
    else if (mysqli_num_rows($result) != 0) {
        header('Location: ./../pages/signup.php?error_exist');
        exit();
    } else {
        $hash = password_hash($password, PASSWORD_ARGON2I);
        $sql2 = "INSERT INTO uzytkownik (Nazwa, Email, Haslo) VALUES('$username', '$email', '$hash');";
        mysqli_query($conn, $sql2);
        if (!isset($_SESSION)){
            session_start();
        }
        $_SESSION['username'] = $username;
        header('Location: ./../pages/index.php');
    }

}
else {
    header('Location: ./../pages/signup.php');
}

?>