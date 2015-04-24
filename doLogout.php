<?php

//define("DB_SERVER", "localhost");
//define("DB_USER", "root");
//define("DB_PASSWORD", "");
//define("DB_NAME", "berzanhe_alicia");
//$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
include 'connectDb.php';

$_SESSION["inlog"] = 0;

header('Location: index.php');
