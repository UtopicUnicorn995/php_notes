<?php

$sensitiveData = "Ian";
$salt = bin2hex(random_bytes(16)); // generates 16 bytes of data -> convert to hexadecimals
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

/*---*/ 

$sensitiveData = "Ian";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;
$verificationHash = hash("sha256", $dataToHash);

// echo $dataToHash;

// echo "<br>" . $hash;

// echo "<br>" . hash("sha256", $hash);

if($storedHash === $verificationHash){
    echo "The data are the same!";
    echo "<br>";
    echo $storedHash;
    echo "<br>";
    echo $verificationHash;
}else{
    echo "The data are not the same!";
}