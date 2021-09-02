<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:th="https://www.thymeleaf.org">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" media="all" href="static/css/bootstrap.min.css">

    <title>Login</title>
</head>

<body class="p-3 mb-2 bg-light text-black">
    <div class="container justify-content-center w-25 p-3" style="background-color: #eeeeee; margin-top: 5em;">
        <h1 class="display-5">Login</h1>
        <form action="include/login.inc.php" method="POST">
            <div id="divError" class="alert alert-danger" th:if="${param.error}">
                Invalid username or password
            </div>
            <div id="divLogout" class="alert alert-dark" th:if="${param.logout}">
                You have been logged out
            </div>
            <div class="form-group">
                <label for="inputUsername">Username</label>
                <input type="input" class="form-control" name="username" id="inputUsername" placeholder="Enter Username" maxlength="20" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Enter Password" maxlength="20" required>
            </div>
            <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Login</button>
        </form>

        <div class="form-group" style="margin-top: 0.5em;">
            <label><a id="signup-link" href="signup.html">Click here to sign up</a></label>
        </div>
    </div>
</body>

</html>