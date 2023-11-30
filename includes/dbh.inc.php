<?php
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn,$dbusername,$dbpassword);//main line through which weconnect our database
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed: ".$e->getMessage();
}