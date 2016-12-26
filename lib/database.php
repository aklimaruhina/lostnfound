<?php
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "lostnfound");
$link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    exit;
}
//iI7XecZJWX7dWiYi