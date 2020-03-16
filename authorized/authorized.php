<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">

    <title>BIENVENIDO</title>

    <?php

    ($_GET['remember']) ? setcookie('remember', $_GET['remember'], time()+(60*30), '/4-cookie_login/') : '';

    ?>
</head>
<body>
    <h1>Bienvenido</h1>
    <table>
        
    </table>
</body>
</html>