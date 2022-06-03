<?php
session_start();

define('SITEURL', 'http://localhost/Website%20Shop2.0/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','fish-shop');

$conn = mysqli_connect(LOCALHOST , DB_USERNAME , DB_PASSWORD , DB_NAME) or die(mysqli_error());


