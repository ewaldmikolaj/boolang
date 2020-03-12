<?php

session_start();

require './../includes/dbh.php';

if (isset($_GET['set_id'])) {
    $id = $_GET['set_id'];

$wordPL = [];
$wordEng = [];

$sql = "SELECT * FROM fiszka WHERE IDzestawu='$id'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    array_push($wordPL, $row['Definicja']);
    array_push($wordEng, $row['Slowko']);
}

$_SESSION['tabPL'] = $wordPL;
$_SESSION['tabENG'] = $wordEng;

header('location: ./../pages/learn.php');

}

?>