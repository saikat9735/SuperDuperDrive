<?php

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once('functions.inc.php');
    $con = connect_db();


    if (empty_input_signup($firstName, $lastName, $username, $password) !== false) {
        header('location:../signup.php?error=emptyinput');
        exit();
    }

    if (username_exists($con, $email) !== false) {
        header('location:../signup.php?error=usernameexists');
        exit();
    }
    register_user($con, $firstName, $lastName, $username, $password);

    header('location:../signup.php?success=regsuccess');
} else {
    header('location:../signup.php');
    exit();
}
