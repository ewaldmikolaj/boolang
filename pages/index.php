<?php
if (!isset($_SESSION)){
    session_start();
    require('./../includes/dbh.php');
    if (isset($_SESSION['username']) && !isset($_SESSION['userId'])) {
        $username = $_SESSION['username'];
        $sql = "SELECT IDuzytkownika FROM uzytkownik WHERE uzytkownik.Nazwa='$username';";
        $result = mysqli_query($conn, $sql);
        echo mysqli_error($conn);
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['userId'] = $row['IDuzytkownika'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../links/style.css">
    <title>BooLang</title>
</head>
<body>
    <?php
        require_once("./../subpages/nav.php");
        require_once("./../subpages/main.php");
    ?>
</body>
</html>