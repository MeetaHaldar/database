<?php
// DB credentials.
define('DB_HOST', 'thorved.dns.army'); //thorved.dns.army:8081 phpmyadmin
define('DB_USER', 'meeta');
define('DB_PASS', 'meeta@2001');
define('DB_NAME', 'meeta');
// Establish database connection.
$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}