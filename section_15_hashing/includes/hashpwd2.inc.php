<?php 

$pwdSignup = 'passwordShit';

$options = [
    'cost' => 30, // The recommended cost value is between 10 - 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);
// 2 common hashing method 
    // PASSWORD_DEFAULT
    // PASSWORD_BCRYPT -> recommended

$pwdLogin = "passwordShit";
password_verify($pwdLogin, $hashedPwd); // returns true or false

if(password_verify($pwdLogin, $hashedPwd)){
    echo "password is the same!";
}else{
    echo "Password is not the same!";
}