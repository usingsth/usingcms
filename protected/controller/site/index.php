<?php
//print_r($_SESSION);exit;
if(!empty($_POST)){
	if(!empty($_POST['remeber'])){
		$remeber = $_POST['remeber'];
	}
	unset($_POST['remeber']);
	$_POST['password'] = md5($_POST['password']);
	$res = getOne('user',$_POST);
	//print_R(json_encode($res));exit;
	if(!empty($res)){
		$_SESSION['username'] = $res['username'];
		if(!empty($remeber)){
			setcookie('username',$res['username'],time()+3600);
		}
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
			echo json_encode($res);
			return false;
		}
	}else{
		die(json_encode('用户名密码错误'));
	}
	
}

if(!empty($_COOKIE['username']) && empty($_SESSION['username'])){
	$_SESSION['username'] = $_COOKIE['username'];
}

//$smarty->display('header.tpl');
$smarty->display('site/index.tpl');
//$smarty->display('footer.tpl');
// view(array(),'');
