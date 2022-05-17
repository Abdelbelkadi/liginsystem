<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="/a.css">
    <title>loginsystem</title>
</head>

<body>
    <form class="form-signin" action="includes/dbh.sign.php" method="POST">
        <h1>Please sign up</h1>
        <div class="form-group">
            <input class="form-control" type="input" placeholder="Username" name="username1">
        </div>

        <div class="form-group">
            <input class="form-control" type="email" placeholder="Email" name="email1">
        </div>
        <div class="form-group">
            <input class="form-control" type="password" placeholder="Password" name="password1">
        </div>
        <div class="form-group">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">remember-me</label>
        </div>
        <button class="btn" name="button">Sign In</button>
        <p class="muted">Copyright &copy; 2022</p>


    </form>
</body>

</html>