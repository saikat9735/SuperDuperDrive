<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="https://www.thymeleaf.org">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" media="all" href="static/css/bootstrap.min.css">

    <title>Sign Up</title>
</head>

<body class="p-3 mb-2 bg-light text-black">
    <div class="container justify-content-center w-50 p-3" style="background-color: #eeeeee; margin-top: 5em;">
        <div class="form-group">
            <label><a id="login-link" href="login.php">Back to Login</a></label>
        </div>

        <h1 class="display-5">Sign Up</h1>
        <form action="include/signup.inc.php" method="POST">
            <div id="signupSuccess" class="alert alert-dark">
                You successfully signed up! Please continue to the <a href="login.php">login</a> page.
            </div>
            <div class="alert alert-danger">
                <span>Example Signup Error Message</span>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputFirstName">First Name</label>
                    <input type="input" name="firstName" class="form-control" id="inputFirstName" placeholder="Enter First Name" maxlength="20" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLastName">Last Name</label>
                    <input type="input" name="lastName" class="form-control" id="inputLastName" placeholder="Enter Last Name" maxlength="20" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputUsername">Username</label>
                    <input type="input" name="username" class="form-control" id="inputUsername" placeholder="Enter Username" maxlength="20" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter Password" maxlength="20" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</body>

</html>