<?php

try {

    define('DB_SOURCE', 'mysql:host=localhost;dbname=user');
    define('DB_USER', 'root');
    define('DB_PSSWD', '');
    
    $userAccount = htmlentities(addslashes($_POST['user_accnt']));
    $userPassword = htmlentities(addslashes($_POST['user_psswd']));
    $rememberMe = htmlentities(addslashes($_POST['remember_me']));

    $dbh = new PDO(DB_SOURCE, DB_USER, DB_PSSWD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $dbh->exec('SET CHARACTER SET utf8');
    
    $query = 'SELECT * FROM authorized_2';
    
    $result = $dbh->prepare($query);
    $result->execute();
    
    $authorized = false;
    while ($user = $result->fetch(PDO::FETCH_ASSOC)) {
        ($user['account'] == $userAccount && $user['password'] == $userPassword) ? $authorized = true : $authorized = false;
    }
    
    if ($authorized && $rememberMe) {
        header('Location:../authorized/authorized.php?remember=yes');
    } else if ($authorized && !$rememberMe) {
        header('Location:../authorized/authorized.php');
    } else {
        header('Location:../index.php');
    }

} catch (Exception $e) {
    echo "Ocurrio un problema con la conexion a la base de datos";
    echo "<br>Error en linea:" . $e->getLine();
    echo "<br>Error:" . $e->getMessage();
} finally {
    $dbh = null;
}


?>