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
        $sql = "SELECT * FROM uzytkownik WHERE Nazwa=? OR Email=?;";
        $sql2 = "SELECT IDrodzajukonta FROM konto WHERE RodzajKonta='admin';";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ./../pages/signSite.php?error");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $result2 = mysqli_query($conn, $sql2);
            if ($row = mysqli_fetch_assoc($result)) {
                // $pwdCheck = password_verify($password, $row['Haslo']);
                if ($row['Haslo'] != $password) {
                    header('Location: ./../pages/signSite.php?error=zle_haslo');
                    exit();
                }
                else if ($row['Haslo'] == $password) {
                    session_start();
                    $_SESSION['username'] = $row['Nazwa'];
                    $_SESSION['userId'] = $row['IDuzytkownika'];
                    if ($row['IDrodzajukonta'] == $result2) {
                        header('Location: ./../pages/admin.php?zalogowany');
                    }
                    else {
                    header('Location: ./../pages/index.php?zalogowany');
                    }
                    exit();
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

}
else {
    header('Location: ./../pages/signSite.php');
    exit();
}

?>