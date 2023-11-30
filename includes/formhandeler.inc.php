<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    //echo htmlspecialchar($username) we will use it only for output
   try{ require_once "dbh.inc.php";
    $query = "INSERT INTO users (username,pwd,email) VALUES (:username,:pwd,:email);";


    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":pwd",$pwd);
    $stmt->bindParam(":email",$email);

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