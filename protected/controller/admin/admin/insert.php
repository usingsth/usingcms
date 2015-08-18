<?php
checkLogin();
if(!checkMode()){
	die("没有权限");
}
if(!empty($_POST)){	
	$time = date('Ymd',time());
	$_POST['mtime'] = $time;
	$_POST['password'] = md5($_POST['password']);	
	$res = insert('admin',$_POST);
	if(!empty($res)){
		header('Location:'.ROOT.'index.php?c=admin&a=index&admin=1');
	}
	else{
		die('修改失败');
	}
}
view();