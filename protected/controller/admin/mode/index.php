<?php
//加载分页函数
include(MODEL.'page.func.php');

//验证登陆
checkLogin();
if(!checkMode()){
	die("没有权限");
}

$res = getList('mode',0,100,'*','id>='.$_SESSION['level_id']);


view(array('res'=>$res));
