<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="./css/style.css">

    <title>CRUD</title>

    <?php
    ($_GET['remember']) ? setcookie('remember', $_GET['remember'], time()+(60*30), '/4-cookie_login/') : '';
    ?>
</head>
<body>
    <h1>Welcome</h1>
    <table>
        <thead>
            <tr>
                <th>Account or Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php require('../db/select_all.php') ?>
        </tbody>
    </table>
    <form action="../db/insert_into.php" method="post">
        <h1>Create User</h1>
        <div class="account">
            <span class="flaticon-user"></span>
            <input type="text" name="user_accnt" placeholder="Email or Account">
        </div>
        <div class="password">
            <span class="flaticon-door-key"></span>
            <input type="password" name="user_psswd" placeholder="Password">
        </div>
        <input type="submit" value="Create">
    </form>
</body>
</html>