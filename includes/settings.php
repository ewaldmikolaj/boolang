<?php

if (isset($_POST['stngs-submit'])) {

    require 'dbh.php';

    if (empty($_POST['username']) && empty($_POST['email']) && empty($_POST['description'])) {
        header('Location: ./../pages/settingsmain.php?empty');
    } else {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $sql = "UPDATE uzytkownik SET Nazwa = '$username' WHERE IDuzytkownika = '".$_SESSION['userId']."';";
            mysqli_query($conn, $sql);
        }
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset($_POST['description'])) {
            $description = $_POST['description'];
        }
    }

} else {

    header('Location: ./../pages/settingsmain.php');

}

?>