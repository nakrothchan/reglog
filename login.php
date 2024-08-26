<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action = "regist_db.php">
        <div class="input-group">
            <label for="email">Username</label>
            <input type="email" name = "email">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name = "password">
        </div>
        <div class="input-group">
            <button type = "submit" name = "log_user" class = "btn">Login</button>
        </div>
        <p>Not a Regist?<a href = "regist.php">Sign in</p>
    </form>
</body>
</html>