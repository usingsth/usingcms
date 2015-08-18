<?php
checkLogin();
if(!checkMode()){
	die("没有权限");
}
if(!empty($_POST)){	
	$time = date('Ymd',time());
	$_POST['mtime'] = $time;	
	$res = insert('news',$_POST);
	if(!empty($res)){
		header('Location:'.ROOT.'index.php?c=news&a=index&admin=1');
	}
	else{
		die('修改失败');
	}
}
$res = getlist('category',0,100,'*','pid=0');
view(array('res'=>$res));