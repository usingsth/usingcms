<?php
//加载分页函数
include(MODEL.'page.func.php');

//验证登陆
checkLogin();
//验证权限
if(!checkMode()){
	die("没有权限");
}

$pre_page = 5;//每页显示条数
$curr_page = !empty($_GET['p'])?$_GET['p']:1;//当前页
$offset = ($curr_page-1)*$pre_page;//偏移量

//获取列表
$join = "join category on news.cate_id=category.id";
$res = getList('news',$offset,$pre_page,'news.*,category.name','1',array('id','desc'),$join);
//获取分页按钮
$page = getPage('news','index.php?a=index&c=news&admin=1',$curr_page);
//print_r($_SERVER);exit;
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])){
	//16进制Unicode 0000-FFFF
	echo json_encode(array('res'=>$res,'page'=>$page));//ajax只接收输出，不接收renturn值
}else{
//加载视图
	view(array('res'=>$res,'page'=>$page));
}