<?php

//数据库连接
function connect($host,$user,$psw,$db){
	mysql_connect($host,$user,$psw) or die(mysql_error());
	mysql_select_db($db) or die('没有这个数据库');
	mysql_query('set names utf8');
}
/*
//获取列表函数
@param string 表名
@param int 偏移量
@param int 截取长度
@param string 排列方式
return array 数据库列表
*/
function getList($table,$offset,$pre_page,$order='',$where = 1){
	
	$sql = "select * from {$table} where {$where} {$order} limit {$offset},{$pre_page}";
	$query=mysql_query($sql) or die('sql语句有语法错误');
	$res = array();
	
	while($row = mysql_fetch_assoc($query)){
		$res[] = $row;
	}
	return $res;
}
/*
//获取一条数据库信息
@param string 表名
@param string 条件
return array 数据库信息
*/
function getOne($table,$con = '0'){
	$sql = "select * from {$table} where {$con}";
	$query = mysql_query($sql) or die('sql语句有语法错误');
	$result = mysql_fetch_assoc($query);
	return $result;
}
/*
//更新数据库
@param string 表名
@param array $_POST数组（表单数组）
return int 影响的行
*/
function update($table,$data=array(),$con = '0'){
	$str = '';
	foreach($data as $k=>$v){
		$str .="`{$k}`='{$v}',";
	}
	$str = substr($str,0,-1);
	$sql = "update {$table} set {$str}  where {$con}";
	$query = mysql_query($sql);
	$res = mysql_affected_rows();
	return $res;
}
/*
//插入数据
@param string 表名
@param array $_POST数组（表单数组）
return int 影响的行
*/
function insert($table,$data=array()){
	$str1 = '';
	$str2 = '';
	foreach($data as $k=>$v){
		$str1 .= "`{$k}`,";
		$str2 .= "'{$v}',";
	}
	$str1 = substr($str1,0,-1);
	$str2 = substr($str2,0,-1);
	$sql = "insert into {$table}($str1) values($str2)";
	$query = mysql_query($sql) or die(mysql_error());
	$res = mysql_affected_rows();
	return $res;
}
/*
//删除数据
@param string 表名
@param string 条件
return int 影响的行
*/
function delete($table,$con = '0'){
	$sql = "delete from {$table} where {$con}";
	$query = mysql_query($sql) or die('sql语句有语法错误');
	$res = mysql_affected_rows();
	return $res;
}

























