<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "alicia");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

$tabel = filter_input(INPUT_POST, 'index', FILTER_SANITIZE_SPECIAL_CHARS);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);

echo $tabel . " " . $id . " " . $content;
$sql = 'UPDATE `'.$tabel.'` SET `content`="'.  $content .'"  WHERE `id`="'.  $id .'" ';
$stmt = $dbh->prepare($sql);
echo $sql;
$stmt->execute();

 header ('Location: adminIndex.php');