<?php
//加载分页函数
include(MODEL.'page.func.php');
//checkMode();

$pre_page = 5;//每页显示条数
$curr_page = !empty($_GET['p'])?$_GET['p']:1;//当前页
$offset = ($curr_page-1)*$pre_page;//偏移量


if(!$smarty->is_cached('news/index.tpl',$curr_page)){
	echo 1111;
	$res = getList('news',$offset,$pre_page,'*','5',array('id','desc'));
	$page = getPage('news','index.php?a=index&c=news',$curr_page);
	//print_r($_SERVER);exit;
	$smarty->assign('res',$res);
	$smarty->assign('page',$page);
}


$smarty->display('news/index.tpl',$curr_page);

//view(array('res'=>$res,'page'=>$page),'');
