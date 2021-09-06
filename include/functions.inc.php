<?php
function connect_db()
{
    $dbserver = 'localhost';

    //Change the db username and password.
    $dbuser = 'sdrive_admin';
    $dbpassword = 'admin1234';
    $dbname = 'drivedb';

    $con = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);
    return $con;
}

function check_login($con, $email, $password)
{
    //Checking login with some static info.
    $sql = "select * from users where username=? and password=?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../login.php?error=stmtfailed');
    }
    mysqli_stmt_bind_param($stmt, 'ss', $email, $password);
    mysqli_stmt_execute($stmt);

    $result_data = mysqli_stmt_get_result($stmt);

    $result = false;
    if ($row = mysqli_fetch_assoc($result_data)) {
        $result = $row;
    }
    mysqli_stmt_close($stmt);
    return $result;
}

function showerror($errortype, $msg)
{
    $error = NULL;
    if (isset($_SERVER['QUERY_STRING'])) {
        parse_str($_SERVER['QUERY_STRING'], $arr);
        $error = $arr['error'];
    }
    if ($error === $errortype) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
}

function showsuccess($errortype, $msg)
{
    $success = NULL;
    if (isset($_SERVER['QUERY_STRING'])) {
        parse_str($_SERVER['QUERY_STRING'], $arr);
        $success = $arr['success'];
    }
    if ($success === $errortype) {
        echo '
        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
}

function empty_input_signup($firstName, $lastName, $username, $password)
{
    if (empty($firstName) || empty($lastName) || empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function username_exists($con, $email)
{
    $sql = "select * from users where username=?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../signup.php?error=stmtfailed');
    }
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);

    $result_data = mysqli_stmt_get_result($stmt);

    $result = false;
    if ($row = mysqli_fetch_assoc($result_data)) {
        $result = $row;
    }
    mysqli_stmt_close($stmt);
    return $result;
}

function register_user($con, $firstName, $lastName, $email, $password, $gender)
{
    $sql = "insert into users(first_name,last_name,username,password) values(?,?,?,?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location:../signup.php?error=stmtfailed');
    }
    mysqli_stmt_bind_param($stmt, 'ssss', $firstName, $lastName, $username, $password);

    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
}
