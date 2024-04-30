<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // String operator
    // Concatinating strings
    $a = "Hello";
    $b = "World!";
    $c = $a . " " . $b;
    echo $c;

    echo "<br>";

    // Arithmetic operator
    $d = 20; // Assignment operators
    $e = 30; // Assignment operators
    echo $d + $e;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    echo 10 ** 3;
    echo "<br>";
    echo 1 + 2 * 8;

    echo "<br>";
    // Assignment operators
    $d = $d + $e;
    $d += 4;
    echo $d;

    // Comparison operator
    $f = 2;
    $g = 4;
    if($f == $g){
        echo "<br>";
        //  ==
        // ===
        // != or <>
        // <=
        // >=
        // and / &&
        // or / ||
        echo "This statement is true!";
    }

    echo "<br>";
    // Incrementing/decrementing operators
    echo ++$f;
    echo "<br>";
    echo --$f;
    ?>

</body>
</html>