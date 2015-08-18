<?php
checkLogin();
$res = getlist('category',0,100,'*','pid=0');
if(!empty($_POST)){	
	$res = insert('category',$_POST);
	if(!empty($res)){
		header('Location:'.ROOT.'index.php?c=category&a=index&admin=1');
	}
	else{
		die('修改失败');
	}
}


view(array('res'=>$res));