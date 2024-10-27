<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $userSearch = $_POST["usersearch"];
       
        try {
           require_once "includes/dbh.inc.php";

           $query ="SELECT * FROM comments WHERE username = :usersearch;";
           
           $stmt = $pdo->prepare($query);

           $stmt->bindParam(":usersearch", $userSearch);

           $stmt->execute();

           $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

           $pdo = null;
           $stmt= null;

        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage()) ;                    
        }
}
else{
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>
<body>
        <h4>Search results:</h4>

        <?php
        
            if (empty($result)) {
                echo "<div>";
                echo "<p>There were no results!</p>";
                echo "</div>";
            } else {
                foreach ($result as $row) {
                    
                    echo  "<div>";                   
                    echo htmlspecialchars($row["username"]);
                    echo htmlspecialchars($row["comment_text"]);
                    echo htmlspecialchars($row["created_at"]);
                    echo "</div>";                   
                } 
            }
        ?>
 
</body>
</html>