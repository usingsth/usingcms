<?php

//验证登陆
checkLogin();
$pid = !empty($_GET['id'])?$_GET['id']:die('非法id');
$res = delete('news','id='.$pid);
if(!empty($res)){
		header("Location:".ROOT."index.php?a=index&c=news&admin=1");
	}else{
		die('删除失败');
	}
