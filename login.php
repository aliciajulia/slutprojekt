<!DOCTYPE html>
<meta charset="UTF-8">
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "alicia");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
session_start();

function checkLogin($username, $password) {
    $sql = "SELECT * FROM `inlog` WHERE anvnam='$anvnam' AND losord='$losord'";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":anvnam", $anvnam);
    $stmt->bindParam(":losord", $losord);
    $stmt->execute();
    $login = $stmt->fetchAll();

    if (!empty($login)) {
        login();
    }
}

function login() {
    $_SESSION["inlog"] = 1;
}

if (isset($_POST['logout'])) {
    $_SESSION["login"] = 0;
    echo "<form method = 'POST'>
        <p>Användarnamn:</p> <input type = 'text' name = 'username' required>
        <p>Lösenord:</p><input type = 'password' name = 'password' required>
        <input type = 'submit' value = 'Logga in'>
        </form>";
}

if (empty($_SESSION["login"])) {
    echo "<form method = 'POST'>
        <p>Användarnamn:</p> <input type = 'text' name = 'anvnam' required>
        <p>Lösenord:</p><input type = 'password' name = 'losord' required>
        <input type = 'submit' value = 'Logga in'>
        </form>";
}

if (isset($_POST["anvnam"])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    checkLogin($username, $password);
}




