<?php
checkLogin();

view(array(),'');

unset($_SESSION['username']);
setcookie('username','',0);
//header('location:'.ROOT.'index.php');
