<?php
if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../links/style.css">
    <link rel="stylesheet" href="./../links/media.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600&display=swap" rel="stylesheet">
    <title>BooLang | Rejestracja</title>
</head>
<body>
    <?php
        require_once("./../subpages/signupL.php");
        require_once("./../subpages/nav.php");
        require_once("./../subpages/signupP.php");
    ?>
</body>
</html>