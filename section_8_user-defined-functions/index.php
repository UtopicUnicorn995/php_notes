<?php 
declare(strict_types=1); // Strict type declaration
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User defined functions</title>
</head>
<body>
    <?php 
    $global_var = "Fuck you";

    function sayHello($name = "Daniel"){ // Function with a default value
    // function sayHello(string $name = "Daniel"){ // Function with a default value -> also has a declaration of being a string
        global $global_var;
        echo $global_var;
        return "<br>Hello " . $name;
    }
    
    echo sayHello("John");

    ?>
</body>
</html>