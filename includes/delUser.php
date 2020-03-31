<?php

session_start();

if (isset($_GET['user_id'])) {
    require('./dbh.php');
    $id = $_GET['user_id'];

    $sql = "UPDATE `uzytkownik` SET IDstatusu=2 WHERE IDuzytkownika=$id";
    mysqli_query($conn, $sql);
    echo mysqli_error($conn);
}

header('location: ./../pages/adminUsers.php');

?>