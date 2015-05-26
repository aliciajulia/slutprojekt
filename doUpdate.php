<?php

include 'connectDb.php';

$tabel = filter_input(INPUT_POST, 'tabel', FILTER_SANITIZE_SPECIAL_CHARS);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS);
$link = filter_input(INPUT_POST, 'link', FILTER_SANITIZE_SPECIAL_CHARS);
$img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_SPECIAL_CHARS);

$sqlContent = "";
$sqlLink = "";
$sqlImg = "";

if (!empty($content)) {
    $sqlContent = '`content`="' . $content . '"';
}
if (!empty($link)) {
    $sqlLink = '`link`=""' . $link . '""';
}
if (!empty($img)) {
    $sqlImg = '`img`=""' . $img . '""';
}

$sql = 'UPDATE `' . $tabel . '` SET ' . $sqlContent . ' ' . $sqlImg . ' ' . $sqlLink . '  WHERE `id`="' . $id . '" ';
$stmt = $dbh->prepare($sql);
$stmt->execute();

header('Location: admin' . $tabel . '.php');