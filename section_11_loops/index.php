<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    <?php 
    //For loop
    for ($i = 1; $i <= 12; $i++ ){ 
        // initial value = 1
        // loop will stop if $i is not less than or equal to 12 anymore
        // $i will increate everytime the loop runs
        echo $i . "<br>";
    }

    //while loop
    $boolean = true;
    while($boolean ){
        echo "Turning boolean to false <br>";
        $boolean = false;
    }

    
    // foreach array
    $fruits = array("Apple", "Banana", "Orange");
    foreach($fruits as $fruit){
        echo $fruit . "<br>";
    }

    // foreach associative array
    $fruitsColors = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");
    foreach($fruitsColors as $fruit => $color){
        echo $fruit . " has a color of " . $color . "<br>";
    }
    ?>

</body>
</html>