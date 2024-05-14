<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php
    $name = "Ian";
    $name = "Christian";
    echo $name; 

    define("PI", 3.14); //Creates a constant -> convension when creating a constant make it capitalize
    // Constant is inside the global scope -> Common convension is to make a constant inside the global scope
    echo PI; //Does not need to have a $ sign;

    function test(){
        define("Food", "Banana");
        echo Food;
    }

    test();
    ?>
</body>
</html>