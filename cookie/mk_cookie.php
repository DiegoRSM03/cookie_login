<?php

setcookie('user[accnt]',$_POST['user_mail'],time()+100000);
setcookie('user[psswd]',$_POST['user_psswd'],time()+100000);

header('Location:ls_cookie');

?>
