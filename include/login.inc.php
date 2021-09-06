<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once('functions.inc.php');

    $con = connect_db();


    //Now follow the codes of the project i provided....

    if ($rec = check_login($con, $username, $password)) {
        //Store the email to SESSION.
        session_start();
        $_SESSION['login_email'] = $username;

        header('location:../profile.php');
    } else {
        header('location:../login.php?error=invalidlogin');
    }
}
