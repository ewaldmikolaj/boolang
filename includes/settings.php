<?php

if (isset($_POST['stngs-submit'])) {

    if (!isset($_SESSION)){
        session_start();
    }

    require 'dbh.php';

    if (empty($_POST['username']) && empty($_POST['email']) && empty($_POST['description'])) {
        header('Location: ./../pages/settingsmain.php?empty');
    } else {
        if (!empty($_POST['username'])) {
            $username = $_POST['username'];
            $sql = "UPDATE uzytkownik SET Nazwa = '$username' WHERE IDuzytkownika = '".$_SESSION['userId']."';";
            mysqli_query($conn, $sql);
        }
        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            $sql2 = "UPDATE uzytkownik SET Email = '$email' WHERE IDuzytkownika = '".$_SESSION['userId']."';";
            mysqli_query($conn, $sql2);
        }
        if (!empty($_POST['description'])) {
            $description = $_POST['description'];
            $sql3 = "UPDATE uzytkownik SET Opis = '$description' WHERE IDuzytkownika = '".$_SESSION['userId']."';";
            mysqli_query($conn, $sql3);
        }
        header('Location: ./../pages/settingsmain.php?zmieniono');
    }

} else {

    header('Location: ./../pages/settingsmain.php');

}

?>