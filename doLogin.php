<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "alicia");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
session_start();

function checkLogin($username, $password, $dbh) {
    $sql = "SELECT * FROM `inlog` WHERE username='$username' AND password='$password'";
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

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
checkLogin($username, $password, $dbh);

 header ('Location: adminIndex.php');