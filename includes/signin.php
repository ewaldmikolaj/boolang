<?php 
if (isset($_POST['sign-submit'])) {

    require 'dbh.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header('Location: ./../pages/signSite.php?error=pustepola');
        exit();
    }
    else {
        $sql = mysqli_prepare($conn, "SELECT * FROM uzytkownik WHERE Nazwa=? OR Email=?");
        mysqli_stmt_bind_param($sql, 'ss', $username, $username);
        $sql2 = "SELECT IDrodzajukonta FROM konto WHERE RodzajKonta='admin';";
        mysqli_stmt_execute($sql);
        $result = mysqli_stmt_get_result($sql);
        $result2 = mysqli_query($conn, $sql2);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['Haslo']);
            if (!$pwdCheck) {
                header('Location: ./../pages/signSite.php?error=zle_haslo');
                exit();
            }
            else if ($pwdCheck) {
                if ($row['IDstatusu'] == 2) {
                    header('Location: ./../pages/signSite.php?uzytkownik_wylaczony');
                } else {
                    session_start();
                    $_SESSION['username'] = $row['Nazwa'];
                    $_SESSION['userId'] = $row['IDuzytkownika'];
                    $_SESSION['userType'] = $row['IDrodzajukonta'];
                    if ($row['IDrodzajukonta'] == $result2) {
                        header('Location: ./../pages/adminUsers.php?zalogowany');
                    }
                    else {
                    header('Location: ./../pages/index.php?zalogowany');
                    }
                    exit();
                }
            }
            else {
                header('Location: ./../pages/signSite.php?error');
            }
        }
        else {
            header('Location: ./../pages/signSite.php?error=brakuzytkownika');
            exit();
        }
    }
}
else {
    header('Location: ./../pages/signSite.php');
    exit();
}

?>