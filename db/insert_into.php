<?php

try {

    $userAccnt = htmlentities(addslashes($_POST['user_accnt']));
    $userPsswd = htmlentities(addslashes($_POST['user_psswd']));
    
    define('DB_SOURCE', 'mysql:host=localhost;dbname=user');
    define('DB_USER', 'root');
    define('DB_PSSWD', '');

    $dbh = new PDO(DB_SOURCE, DB_USER, DB_PSSWD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $dbh->exec('SET CHARACTER SET utf8');

    $query = 'INSERT INTO authorized_2 VALUES (:userAccnt, :userPsswd)';

    $result = $dbh->prepare($query);
    $result->bindValue(':userAccnt', $userAccnt);
    $result->bindValue(':userPsswd', $userPsswd);
    $result->execute();
    $result->closeCursor();
    
} catch (Exception $e) {
    echo "Ocurrio un error al conectar con la base de datos.";
    echo "Error en linea: " . $e->getLine();
    echo "Mas informacion:<br>" . $e->getMessage();
} finally {
    $dbh = null;
    header('Location:../authorized/authorized.php');
}

?>