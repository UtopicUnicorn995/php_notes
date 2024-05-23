<?php

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST["username"];
    $pdw = $_POST["passwords"];
    $email = $_POST["email"];

    try{

    }catch(PDOException $e){
        die('Query failed: "' . $e->getMessage());
    }

}else{
    header("Location: ../index.php");
}