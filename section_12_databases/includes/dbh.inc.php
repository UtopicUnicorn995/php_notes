<!-- PURE PHP STUFF -->
<?php
// No need to have a closing tag when using a php file

// DSN -> database server
$dsn = 'mysql:host=localhost;dbname=phpdb'; 
$dbusername = 'root';
$dbpassword = '';


try{ // try catch to get if there are any potential errors
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    // 3 ways to connect to the database
        //mysql connection -> outdated
        //mysqli connection
        //pdo
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage()();
}

