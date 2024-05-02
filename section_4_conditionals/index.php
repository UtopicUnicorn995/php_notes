<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $bool = true;
    $a = 1;
    $b = 4;

    // if($a < $b){
    //     echo "First condition is true!";
    // }){

    // }

    $result = match ($a) {
      1, 3, 5   => "Variable is equal to one!", // 1 or 3 or 5 -> strict with it's type
      2   => "Variable is equal to two!",
      default =>  "None were a match",
    }

    // When you want ot use match, swtitch or if else?
    //if you want to check value with one value, use switch
    //if you want to match it with multiple value, you can you use match, if chuchu you can use if/else
    ?>
</body>
</html>