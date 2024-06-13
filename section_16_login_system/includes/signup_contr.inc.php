<?php

declare(strict_types=1);

function is_input_empty($username, $pwd, $email)
{
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

function is_email_empty($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //FILTER_VALIDATE_EMAIL is built-in php
        return true;
    } else {
        return false;
    }
}

//string $username is making the $username strictly a string
function is_username_taken(object $pdo, string $username)
{

    if (get_username($pdo, $username)) {
        return true;
    } else {
        return false;
    }
}


function is_email_registered(object $pdo, string $email)
{

    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}
