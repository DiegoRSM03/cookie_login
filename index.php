<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="iconfont/flaticon.css">

    <title>User Login</title>
</head>
<body>
    <h1>Formulario Inicio</h1>
    <form action="mk_cookie" method="post">
        <div class="mail">
            <span class="flaticon-user"></span>
            <input type="text" name="user_mail">
        </div>
        <div class="password">
            <span class="flaticon-door-key"></span>
            <input type="text" name="user_psswd">
        </div>
        <div class="remember_me">
            <span class="flaticon-clipboard"></span>
            <p>Remember Me</p>
            <input type="checkbox" name="remember_me">
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>