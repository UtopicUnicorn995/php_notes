<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        // STRING FUNCTIONS
        $string = "Hello World!";
        echo strlen($string);
        
        echo "<br>";

        echo strpos($string, "Wo");

        echo "<br>";

        echo str_replace("World", "Bitches", $string);

        echo "<br>";

        echo strtolower($string);

        echo "<br>";

        echo substr($string, 1, 3);

        echo "<br>";

        print_r(explode(" ", $string));

        echo "<br>";

        // MATH BUILT IN FUNCTIONS
        $number = -5.5;
        echo abs($number);

        echo "<br>";

        echo round($number);

        echo "<br>";

        echo pow(2, 5);
        
        echo "<br>";

        echo sqrt(16);

        echo "<br>";

        echo rand(1, 100);

        echo "<br>";

        // ARRAY BUILT IN FUNCTION

        $array = ["Apple", "Banana", "Orange"];

        echo "Count:" . count($array);

        echo "<br>";

        echo is_array($array);

        echo "<br>";

        echo is_array($number) . "no";

        echo "<br>";

        echo array_pop($array);

        echo "<br>";

        print_r(array_reverse($array));

        echo "<br>";

        // DATE TIME FUNCTIONS

        echo date("Y-m-d H:i:s");

        echo "<br>";

        echo time();

        echo "<br>";

        $date = "2024-05-11 11:13:00";

       echo strtotime($date)

    ?>
</body>
</html>