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
        $sql = "SELECT * FROM uzytkownik WHERE Nazwa='$username' OR Email='$username';";
        $sql2 = "SELECT IDrodzajukonta FROM konto WHERE RodzajKonta='admin';";
        $result = mysqli_query($conn, $sql);
        $result2 = mysqli_query($conn, $sql2);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['Haslo']);
            if (!$pwdCheck) {
                header('Location: ./../pages/signSite.php?error=zle_haslo');
                exit();
            }
            else if ($pwdCheck) {
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
else {
    header('Location: ./../pages/signSite.php');
    exit();
}

?>