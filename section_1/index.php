<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Hello world";
echo "<h1>Hello world</h1>";
// PHP language -> Learning how to program the php itself
// Database
// security protect websites using php
?>

<?php if(true){?>
<h2>If true</h2>
<?php }else{
    echo "// single line comment, /* multi line comment */ ";
}
?>

<?php 
// Variables
    $fullName = "Christian Barrios";
    echo $fullName;
?>

<?php 
    // Data types
            // Scalar Types
    $string = "Text";
    $int = 1234; //No double quote or quote
    $float = 11.2; // Float -> number with decmals
    $bool = true; // false true of false -> 1 == true 0 == false

            // Array type
    $array = array("Ian", "Cristel", "Antonieta", "Ceasar");
    $array2 = ["Ian", "Cristel", "Antonieta", "Ceasar"]; // New version of array -> Does not work on older version

            // Object Type
    // $object = new Car();
    ?>

    <p>Hi! My name is
    <?php echo $fullName; ?>, and I'm learning PHP! </p>

<?php 
    // Pre defined variables

    // Super globals can be access anywhere in php
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "</br>";
    echo $_SERVER["PHP_SELF"];
    echo "</br>";
    echo $_SERVER["SERVER_NAME"];
    echo "</br>";
    echo $_SERVER["REQUEST_METHOD"];

    echo "</br>";
    // url: http://localhost/phpNotes/section_1/index.php?name=ian
    echo $_GET["name"];
    echo "</br>";
    // http://localhost/phpNotes/section_1/index.php?name=ian&weight=98kg
    echo $_GET["weight"];
    echo "</br>";
    echo $_REQUEST["name"]; // Will get get/post/cookies -> prioritize using get or post instead
    echo "</br>";
    // Example echo $_FILES["name"]; // use when you want to get information about the data in the server -> pictures/pdf/etc -> Want to check file size

    echo "</br>";
    // echo $_COOKIE[""]; errors if it could not find anything
    $_SESSION["username"] = "Pikachu";
    echo $_SESSION["username"];

    //$_ENV[]; //Data that should not be accessed by the client or server
?>

</body>
</html>