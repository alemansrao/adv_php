<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'aleman');
define('DB_PASSWORD', '');
define('DB_NAME', 'adv_php');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>