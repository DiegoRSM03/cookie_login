<?php

if (!$_COOKIE['user[accnt]'] || !$_COOKIE['user[psswd]']) {
    header('Location:index.php');
}

?>