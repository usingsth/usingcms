<?php
//验证登陆
checkLogin();
if(!checkMode()){
	die("没有权限");
}
//加载分页函数
include(MODEL.'page.func.php');
$pre_page = 5;//每页显示条数
$curr_page = !empty($_GET['p'])?$_GET['p']:1;//当前页
$offset = ($curr_page-1)*$pre_page;//偏移量

//获取列表函数
$res = getList('admin',$offset,$pre_page,'*','1');

//调用分页函数
$page = getPage('admin','index.php?a=index&c=admin&admin=1',$curr_page);


view(array('res'=>$res,'page'=>$page));