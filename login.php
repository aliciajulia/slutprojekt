<!DOCTYPE html>
<meta charset="UTF-8">
<?php


//function checkLogin($username, $password) {
//    $sql = "SELECT * FROM `inlog` WHERE anvnam='$anvnam' AND losord='$losord'";
//    $stmt = $dbh->prepare($sql);
//    $stmt->bindParam(":anvnam", $anvnam);
//    $stmt->bindParam(":losord", $losord);
//    $stmt->execute();
//    $login = $stmt->fetchAll();
//
//    if (!empty($login)) {
//        login();
//    }
//}

//function login() {
//    $_SESSION["inlog"] = 1;
//}

if (isset($_POST['logout'])) {
    $_SESSION["login"] = 0;
    echo "<form method = 'POST' action='doLogin.php'>
        <p>Användarnamn:</p> <input type = 'text' name = 'username' value='' required>
        <p>Lösenord:</p><input type = 'password' name = 'password' value='' required>
        <input type = 'submit' value = 'Logga in'>
        </form>";
}

if (empty($_SESSION["login"])) {
    echo "<form method = 'POST' action='doLogin.php'>
        <p>Användarnamn:</p> <input type = 'text' name = 'username' value='' required>
        <p>Lösenord:</p><input type = 'password' name = 'password' value='' required>
        <input type = 'submit' value = 'Logga in'>
        </form>";
}
//
//if (isset($_POST["anvnam"])) {
//    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
//    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
//    checkLogin($username, $password);
//}




