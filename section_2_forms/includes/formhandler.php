<?php // Best practice -> not to have a closing tag when it is only a php file

// var_dump($_SERVER["REQUEST_METHOD"]);
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //htmlspecialchars sanitizes the post -> to prevent malicious codes to be injected
    //This is for the data that we are gonna output
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname =  htmlspecialchars($_POST["lastname"]);
    $favouritepet =  htmlspecialchars($_POST["favouritepet"]);

    if(empty($firstname)){
        exit();
        header("Location: ../index.php");
    }
    
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;
}
else{
    header("Location: ../index.php");
}

// if(isset($_POST["submit"])){

// }