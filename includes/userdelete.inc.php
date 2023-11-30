<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    
   try{ require_once "dbh.inc.php";
    $query = "DELETE FROM users WHERE username=:username AND pwd = :pwd;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":pwd",$pwd);

    $stmt->execute();
    $pdo  = null;
    $stmt = null;
    
    die();
    header("Location ../index.php");
}
catch(PDOException $e){
    die("QUERY FAILED".$e->getMessage());
}
}else{
    header("Location: ../index.php");
}