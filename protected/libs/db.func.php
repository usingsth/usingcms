<?php
//数据库函数库

function connect($host,$user,$pwd,$db){
	mysql_connect($host,$user,$pwd) or die(mysql_error());
	mysql_select_db($db) or die('没有这个数据库');
	mysql_query('set names utf8');
} 

/*
//获取列表
@param string 表名
@param int    偏移量
@param int    每页显示条数
@param string 排序
return array  列表结果集
*/
function getList($table,$offset,$pre_page,$res='*',$where='1',$order=array(),$join=''){
	$sql = "select {$res} from {$table} {$join} where {$where} " ;
	if(!empty($order)){
		$sql .= "order by {$table}.$order[0] $order[1] ";
	}
	$sql .= "limit {$offset},{$pre_page}";
	$query=mysql_query($sql) or die('sql语句有语法错误');
	$res = array();
	while($row = mysql_fetch_assoc($query)){
		$res[] = $row;
	}
	return $res;
}


function getOne($table,$con = '1'){
	if(is_array($con)){
		$str = '';
		foreach($con as $k=>$v){
			$str .=	"{$k}='{$v}' and ";
		}
		$con = substr($str,0,-4);
	}
	$sql = "select * from {$table} where {$con}";//echo $sql;exit;
	$query = mysql_query($sql) or die('sql语句有语法错误');
	$result = mysql_fetch_assoc($query);
	return $result;
}

function update($table,$data=array(),$con){
	$str = '';
	foreach($data as $k=>$v){
		$str .="`{$k}`='{$v}',";
	}
	$str = substr($str,0,-1);
	$sql = "update {$table} set {$str}  where {$con}";
	$query = mysql_query($sql);
	return mysql_affected_rows();
}

function delete($table,$con){
	$sql = "delete from {$table} where {$con}";
	$query = mysql_query($sql) or die('sql语句有语法错误');
	return mysql_affected_rows();
}


function insert($table,$data=array()){
	$keys= '';
	$values = '';
	foreach($data as $key=>$val){
		$keys .="`{$key}`,";
		$values .="'{$val}',"; 
	}
	$keys = substr($keys,0,-1);
	$values = substr($values,0,-1);
	$sql = "insert into {$table}({$keys}) values({$values})";
	$query = mysql_query($sql) or die('sql语句有语法错误');
	return mysql_affected_rows();
}