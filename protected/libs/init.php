<?php

session_start();

//加载公用函数库
include MODEL.'common.func.php';

//加载数据库函数
include MODEL.'db.func.php';

//连接数据库
connect('localhost','root','123123','1305_cms');

//加载smarty
include(MODEL.'smarty/Smarty.class.php');

$smarty = new Smarty;

$smarty->template_dir = VIEW;
$smarty->compile_dir = VIEW.'templates_c/';
//$smarty->config_dir = '/web/www.mydomain.com/smarty/guestbook/configs/';
$smarty->cache_dir = VIEW.'cache/';

$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

$smarty->caching = 2;
$smarty->cache_lifetime = 300;



 
