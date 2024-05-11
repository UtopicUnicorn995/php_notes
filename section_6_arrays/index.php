<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    $fruits = array("Apple", "Banana", "Cherry");
    $fruits1 = ["Apple", "Mango", "Banana"];
    // 2 ways of writing arrays
    echo($fruits1[1]);
    $i = 0;
    while($i < sizeof($fruits1)){
        echo "<h1>{$fruits[$i]}</h1>";
        $i++;
    }
    $fruits[1] = "Jackfruit"; // replacing specific item in an array
    var_dump($fruits);

    echo "<br>";

    unset($fruits[1]);
    var_dump($fruits);

    echo "<br>";

    array_splice($fruits, 1, 1);
    var_dump($fruits);

    echo "<br>";

    $fruits2 = [
        "yellow" => "Banana",
        "red" => "Apple",
        "pink" => "Peach"
    ]; // Associative array

    echo $fruits2["yellow"];

    echo "<br>";

    echo count($fruits2);
    echo "<br>";
    echo sizeof($fruits2);

    echo "<br>";

    array_push($fruits2, "yellow2",  "Mango"); //Does not work in an associative array

    echo "<br>";

    print_r($fruits2);

    $fruits2["yellow2"] = "Mango2"; //Adding an kay value pair in an associative array

    echo "<br>";

    print_r($fruits2)

?>
</body>
</html>