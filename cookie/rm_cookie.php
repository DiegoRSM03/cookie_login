<?php

setcookie('user[accnt]',$_POST['user_mail'],time()-1);
setcookie('user[psswd]',$_POST['user_psswd'],time()-1);

header('Location:ls_cookie');

?>