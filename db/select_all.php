<?php

try {

    define('DB_SOURCE', 'mysql:host=localhost;dbname=user');
    define('DB_USER', 'root');
    define('DB_PSSWD', '');

    $dbh = new PDO(DB_SOURCE, DB_USER, DB_PSSWD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $dbh->exec('SET CHARACTER SET utf8');

    $query = 'SELECT * FROM authorized_2';

    $result = $dbh->prepare($query);
    $result->execute();

    while ($user = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
            echo "<td>$user[account]</td>";
            echo "<td>$user[password]</td>";
        echo '</tr>';
    }

    $result->closeCursor();

} catch (Exception $e) {
    echo "Ocurrio un error al conectar con la base de datos.";
    echo "Error en linea: " . $e->getLine();
    echo "Mas informacion:<br>" . $e->getMessage();
} finally {
    $dbh = null;
}

?>