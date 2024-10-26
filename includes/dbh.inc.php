<?php

$dbusername = "root";
$dbpassword = "";
$dbname = "mydatabase";

$dsn = "mysql:host=localhost;dbname=mydatabase";
$dbusername = "root";
$dbpassword = "";



$dsn = "mysql:host=localhost;dbname=mydatabase;charset=utf8";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn,$dbusername,$dbpassword, $opt);


try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword, $opt);
    
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage;
    //throw $th;
}