<?php
if (isset($_SESSION)){
    session_start();
    if ($_SESSION['userType'] != 1) {
        header('location: ./index.php');
    }
} else {
    session_start();
    if ($_SESSION['userType'] != 1) {
        header('location: ./index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./../bootstrap-4.4.1-dist/css/bootstrap.css">
    <title>BooLang | Panel Admina</title>
</head>

<body style="background-color: #1B98E0;" class="overflow-hidden container">
    <a href="./../includes/signout.php" class="position-absolute" style="top: 10px; right: 15px;"><button type="button" class="btn btn-light">Wyjdź</button></a>
    <div style="width: 70rem; margin-top: 5rem;" class="row">
        <table class="table table-hover col-md-12 align-self-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nazwa użytkownika</th>
                    <th scope="col">Email</th>
                    <th scope="col">Klasa</th>
                    <th class="text-center" scope="col">Status</th>
                    <th class="text-center" scope="col">Dezaktywuj</th>
                    <th class="text-center" scope="col">Zatwierdź</th>
                </tr>
            </thead>
            <tbody>
<?php
                        require './../includes/dbh.php';
                        $sql = "SELECT uzytkownik.IDuzytkownika as id, uzytkownik.Nazwa as nazwa, uzytkownik.Email as email, status.status as status, klasa.NazwaKlasy as klasa FROM uzytkownik JOIN status on uzytkownik.IDstatusu = status.IDstatusu JOIN klasa on uzytkownik.IDklasy = klasa.IDklasy WHERE uzytkownik.IDrodzajukonta NOT LIKE 1;";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo <<<ROW1
                            <tr>
                                <td class="align-middle" scope="row">$row[id]</td>
                                <td class="align-middle">$row[nazwa]</td>
                                <td class="align-middle">$row[email]</td>
                                <td class="align-middle text-center">
                                <form method="post" action="./../includes/updateUser.php?user_id=$row[id]">
                                <select class="form-control" name="class">
ROW1;
                                $sql2 = "SELECT NazwaKlasy as klasa, IDklasy FROM klasa;";
                                $result2 = mysqli_query($conn, $sql2);
                                mysqli_error($conn);
                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                    if ($row2['klasa'] == $row['klasa'])
                                        echo "<option selected value='$row2[IDklasy]'>$row2[klasa]</option>";
                                    else 
                                        echo "<option value='$row2[IDklasy]'>$row2[klasa]</option>";
                                    }
                            echo <<<ROW2
                                </select>
                                <td class="align-middle text-center">$row[status]</td>
                                <td class="text-center align-middle"><a style="color: black; text-decoration:none" href="./../includes/delUser.php?user_id=$row[id]"><i class="fa fa-trash"></i></a></td>
                                <td class="text-center align-middle"><a style="color: black; text-decoration:none" href="./../includes/turnOnUser.php?user_id=$row[id]">Włącz</i></a></td>
                                <td class="align-middle text-center"><input type="submit" name="update" style="color: black; text-decoration:none" value="Aktualizuj"/></td>
                                </form>
                            </tr>
ROW2;
                        }
?>
            </tbody>
        </table>
    </div>
</body>
</html>