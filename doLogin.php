<?php

//define("DB_SERVER", "berzan.hemsida.eu");
//define("DB_USER", "berzanhe_alicia");
//define("DB_PASSWORD", "muffinsmamma");
//define("DB_NAME", "berzanhe_alicia");
//$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

include 'connectDb.php';

session_start();

function checkLogin($username, $password, $dbh) {
    $sql = "SELECT * FROM `inlog` WHERE username=:username AND password=:password";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    $login = $stmt->fetchAll();

    if (!empty($login)) {
        login();
    }
    else {
        header ('Location: index.php');
    }
}

function login() {
    $_SESSION["inlog"] = 1;
}

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
checkLogin($username, $password, $dbh);

 header ('Location: adminIndex.php');