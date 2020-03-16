<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="iconfont/flaticon.css">

    <title>User Login</title>

    <?php
    ($_COOKIE['remember']) ? header('Location: authorized/authorized.php') : '';
    ?>
</head>
<body>
    <form action="db/verify_user.php" method="post">
        <h1>Log In</h1>
        <div class="mail">
            <span class="flaticon-user"></span>
            <input type="text" name="user_accnt" placeholder="Email or Account">
        </div>
        <div class="password">
            <span class="flaticon-door-key"></span>
            <input type="password" name="user_psswd" placeholder="Password">
        </div>
        <div class="remember_me">
            <input type="checkbox" name="remember_me">
            <p>Remember Me</p>
            <span class="flaticon-clipboard"></span>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>