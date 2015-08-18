<?php
//验证登陆
function checkLogin(){
	if(empty($_SESSION['username'])){
	header("Location:".ROOT."index.php?a=login&admin=1&c=admin");
	}
}

function checkMode(){
	if(empty($_SESSION['level'])){
		$xml = simplexml_load_file(MODEL.'menu.xml');
		foreach($xml->mhead as $key=>$val){
			foreach($val->action as $k=>$v){
				$controller = (string)$val->name->attributes()->en;
				$action = (string)$v->name->attributes()->en;
				$_SESSION['level'][$controller.'/'.$action] = (int)$v->name->attributes()->id;
				
			}
		}
	}
	$id = $_SESSION['level'][C_NAME.'/'.A_NAME];
	if(in_array($id,$_SESSION['mode'])){
		return true;
	}
	return false;
}

function view($data=array(),$admin='admin'){
	if(!empty($admin)){
		$xml = simplexml_load_file(MODEL.'menu.xml');
		//print_r($xml);exit;
	}
	extract($data);
	include VIEW.$admin.'/header.php';
	include VIEW.$admin.'/'.C_NAME.'/'.A_NAME.'.php';
	include VIEW.$admin.'/footer.php';
	//define('VIEW','protected/templates/');
}