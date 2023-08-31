<?php
/**
 * Test to authenticate a user using HTTP Auth.
 *
 * Please write the isAuthenticated() function.
 * Valid users are in $users;
 */

// Write your code here

// Please do not change the code below
$users = [
    'admin' => 'password',
    'johndoe' => 'password',
    'janedoe' => 'password',
];

function authenticatePlease() {
    header('WWW-Authenticate: Basic realm="Welcome to the test area"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Sorry to see you go…';
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']) || !isAuthenticated($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
    authenticatePlease();
} else {
    echo "Hi buddy!";
}
