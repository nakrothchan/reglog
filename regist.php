<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action = "regist_db.php">
        <div class="input-group">
            <label for="email">Username</label>
            <input type="email" name = "email">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password_1" name = "password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password_2" name = "password_2">
        </div>
        <div class="input-group">
            <button type = "submit" name = "reg_user" class = "btn">Regist</button>
        </div>
        <p>Already a member?<a href = "login.php">Sign in</p>
    </form>
</body>
</html>