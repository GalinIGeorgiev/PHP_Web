<?php

$dsn = "mysql:host=localhost;dbname=myfirstdatabase" ;
$dbusername = "root";
$dbpassword = "root";


try {
    $pdo = new PDO($dsn, $dbpassword, $dbusername)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
    $pdo->prepare

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage;
    //throw $th;
}