<?php

include 'connectDb.php';
session_start();
$_SESSION["inlog"] = 0;
session_destroy();
header('Location: index.php');
