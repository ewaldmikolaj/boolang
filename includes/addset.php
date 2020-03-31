<?php

session_start();

if (isset($_POST['addset-submit'])) {
    require('./dbh.php');
    $word = $_POST['word'];
    $definition = $_POST['definition'];
    $languageId = $_POST['languageSet'];
    $name = $_POST['title'];
    $userID = $_SESSION['userId'];
    $username = $_SESSION['username'];

    $sql = "SELECT IDklasy FROM uzytkownik WHERE uzytkownik.Nazwa='$username';";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $classID = $row['IDklasy'];
    }

    $zestaw = $conn->prepare("INSERT INTO zestaw(autor, IDjezyka, Nazwa, IDklasy) VALUES (?, ?, ?, ?)");
    $zestaw->bind_param('iisi', $userID, $languageId, $name, $classID);
    if ($zestaw->execute()) {
        echo "działa";
    } else {
        echo $zestaw->error;
    }

    $zestawID = $zestaw->insert_id;

    $number = sizeof($definition);
    $fiszka = $conn->prepare("INSERT INTO fiszka(Slowko, Definicja, IDzestawu) VALUES (?, ?, ?)");
    for ($i = 0; $i < $number; $i++) {
        $fiszka->bind_param('ssi', $word[$i], $definition[$i], $zestawID);
        $fiszka->execute();
    }

    header('location: ./../pages/flashcardList.php');


} else {
    header('Location: ./../pages/addFlashcardSet.php');
}

?>