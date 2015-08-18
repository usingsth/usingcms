<?php
define('CONTROLLER','protected/controller/');
define('VIEW','protected/templates/');
define('MODEL','protected/libs/');
define('ROOT','http://localhost/cms/');//整个网站的根目录
if($_SERVER['REQUEST_URI'] == '/'){
	header('location:'.ROOT.'index.php');
}
$a = !empty($_GET['a'])?$_GET['a']:'index';
$c = !empty($_GET['c'])?$_GET['c']:'site';
$admin = !empty($_GET['admin'])?'admin':'';
define('C_NAME',$c);
define('A_NAME',$a);

//error_reporting(0);


include MODEL.'init.php';

if(!empty($admin)){
	include CONTROLLER.$admin.'/'.$c.'/'.$a.'.php';
}else{
	include CONTROLLER.$c.'/'.$a.'.php';
}



