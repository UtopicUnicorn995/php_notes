<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['usersearch'];
    var_dump($username);
    try{
        require_once 'dbh.inc.php';
        var_dump($username);
        $query = 'SELECT username from users WHERE username = :username;';

        $statement = $pdo->prepare($query);
        $statement->bindParam(':username', $username);

        $statement = null;
        $pdo = null;

        // header("Location: ../index.php");

        // die();

    } catch(PDOException $error){
        die('Query failed: ' . $error->getMessage());
    }
}else{
    header("Location: ../index.php");
}