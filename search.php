<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usersearch = $_POST["usersearch"];
    

    //echo htmlspecialchar($username) we will use it only for output
   try{ require_once "includes/dbh.inc.php";
    $query = "SELECT * FROM comments WHERE username = :usersearch;";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":usersearch",$usersearch);
    
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $pdo  = null;
    $stmt = null;    
}
catch(PDOException $e){
    die("QUERY FAILED".$e->getMessage());
}
}else{
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Search results:</h3>

    <?php
      
      if(empty($results)){
            echo "<P>No Results Found!</P>";
      }else{
        //var_dump($results);
        foreach ($results as $row) {
            echo '<div class="result">';
            echo '<p class="username">' . htmlspecialchars($row["username"]) . '</p>';
            echo '<p class="comment">' . htmlspecialchars($row["commented_text"]) . '</p>';
            echo '<p class="timestamp">' . htmlspecialchars($row["created_at"]) . '</p>';
            echo '</div>';
        }
        
    }

    ?>
</body>
</html>