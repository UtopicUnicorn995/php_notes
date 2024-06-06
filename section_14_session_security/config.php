<?php

ini_set('session.use_only_cookies', 1);
// One is true zero is false
// goes inside the ini file and changes some of the parameters using php code

ini_set('session.use_strict_mode', 1);
// make sure that the website only uses the session id created by the server inside the webside
// also makes the session id a bit complicated
// mandatory thing to have

session_set_cookie_params([
    'lifetime' => 1800, // cookies get destroyed after 1800 miliseconds
    //life time -> goes inside the cookie and destroys the cookie when it runs on a certain amount of time
    'domain' => 'localhost', //becomes something else if this is at prod and has a different domain
    'path' => '/',
    'secure' => true,
    'httponly' => true
]); // has to be set before the session is created

session_start();

session_regenerate_id(true); // regenerate current session id to make it a better one