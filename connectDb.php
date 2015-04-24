<?php
define("DB_SERVER", "www.berzanappen.se");
define("DB_USER", "berzanap_alicia");
define("DB_PASSWORD", "muffinsmamma");
define("DB_NAME", "berzanap_alicia");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);

