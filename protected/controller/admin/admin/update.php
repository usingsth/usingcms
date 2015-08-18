<?php
checkLogin();
$id = !empty($_GET['id'])?$_GET['id']:die('非法id');
//调用查找一条数据库信息函数
$res = getOne('admin','id='.$id);
$temp = $res['password'];

if($res['groupid'] <= $_SESSION['level_id']){
	die("权限不足");
}

if(!empty($_POST)){
	$pid = $_POST['id'];
	if($_POST['password'] != $temp ){
		$_POST['password'] = md5($_POST['password']);
	}
	//调用更新函数
	$res = update('admin',$_POST,'id='.$pid);
	if(!empty($res)){
		header('Location:'.ROOT.'index.php?c=admin&a=index&admin=1');
	}else{
		die('修改失败');
	}
}

view(array('res'=>$res));
//include('templates/update.php');