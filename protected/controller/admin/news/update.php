<?php
checkLogin();

$id = !empty($_GET['id'])?$_GET['id']:die('非法id');
//调用查找一条数据库信息函数
$res = getOne('news','id='.$id);
if(!empty($_POST)){
	$pid = $_POST['id'];
	
	//调用更新函数
	$res = update('news',$_POST,'id='.$pid);
	if(!empty($res)){
		header('Location:'.ROOT.'index.php?c=news&a=index&admin=1');
	}else{
		die('修改失败');
	}
}

view(array('res'=>$res));
//include('templates/update.php');