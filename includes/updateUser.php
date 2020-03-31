<?php

require('./../includes/dbh.php');
if (isset($_POST['update'])) {

    $class = $_POST['class'];
    $id = $_GET['user_id'];

    $sql = "UPDATE uzytkownik SET IDklasy='$class' WHERE IDuzytkownika='$id'";
    if (mysqli_query($conn, $sql)) {
        header('location: ./../pages/adminUsers.php');
    }
} else {
    header('location: ./../pages/index.php');
}


?>