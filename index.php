<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Home Page</h2>
    </div>

    <div class="content">

        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username'] ?></strong></p>
            <p><a href = "index.php?logout='1'" style = "color: red;"></a>Log Out</p>
            <?php endif ?>
    </div>
</body>
</html>