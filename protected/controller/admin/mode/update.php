<?php
checkLogin();
if(!checkMode()){
	die("没有权限");
}
$id = !empty($_GET['id'])?$_GET['id']:die('非法id');
//调用查找一条数据库信息函数
$res = getOne('mode','id='.$id);
$res['modeid'] = json_decode($res['modeid']);

if($res['level_id'] <= $_SESSION['level_id'] && $_SESSION['level_id'] != 1){
	die("权限不足");
}

if(!empty($_POST)){
	$_POST['modeid'] = json_encode($_POST['modeid']);
	$res = update("mode",$_POST,'id='.$id);
	if($res){
		header('Location:'.ROOT.'index.php?c=mode&a=index&admin=1');
	}
	else{
		die("编辑失败");
	}
}


view(array('res'=>$res));
//include('templates/update.php');