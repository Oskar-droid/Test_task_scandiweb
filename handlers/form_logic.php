<?php

$loginHasBeenSubmitted = false;
$errors = [];

if (isset($_POST['submit'])) {
    $loginHasBeenSubmitted = true;

    if (!isset($_POST['username']) || $_POST['username'] !== 'admin') {

        $errors[] = 'Wrong username!';

    }
    if (!isset($_POST['password']) || $_POST['password'] !== 'secret') {

        $errors[] = 'Wrong password!';

    }
}