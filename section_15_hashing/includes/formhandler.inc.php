<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $username = $_POST["username"];
    $pwd = $_POST["passwords"];
    $email = $_POST["email"];
    // Don't have to sanitize data unless we are outputing data in the frontend 
    try {
        // require_once when there is a script we want to use
        require_once 'dbh.inc.php';
        // require
        // include
        // include_once
        // the 3 requre and include above does the same thing but with a slight variation

        //not named
        // $query = "INSERT INTO users (username, passwords, email) VALUES 
        // (?, ?, ?);";

        //named query
        $query = "INSERT INTO users (username, passwords, email) VALUES 
        (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);

        
        $options = [
            'cost' => 10, // The recommended cost value is between 10 - 12
        ];

        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $hashedPwd);
        $stmt->bindParam(':email', $email);

        $stmt->execute();

        // $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $pwd, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        // close a script without any database running
        //exit();

        // when there is a connection on it.
        die();

    } catch (PDOException $e) {
        // die() -> terminates the script
        die('Query failed: "' . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
