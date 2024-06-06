<?php
session_start();
// As long as the session start is declared at the page the the session values will be stored

$_SESSION["username"] = "Bitchers";

session_unset();
// remove all session data of the session

unset($_SESSION["username"]);
// remove the specific session data

session_destroy();
//stops the session from running
//can't see the effect unless you go to another page

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php 

echo $_SESSION["username"];

?>

</body>

</html>