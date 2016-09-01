<?php
define("DBHOST", "www.db4free.net");
define("DBUSER", "ruhina05");
define("DBPASS", "0a4bfb");
define("DBNAME", "ttticketing");
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}