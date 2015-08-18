<?php
/*
1.用户触发form表单提交数据
2.接收页面传输的数据（post,get）post:$_POST,get:$_GET
	$_POST,$_GET等属于php预定义数组
3.连接数据库
	empty():判断某个变量是否为空，如果为空，返回true，否则返回false
	isset():判断变量是否存在或者是否设置，如果存在或设置，返回true，否则返回false
4.查找数据是否存在
5.跳转页面
*/
if(!empty($_POST['username'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	//调用getOne函数
	$result = getOne('admin',"`username` = '{$username}' and `password` = '{$password}'");
	if(empty($result)){
		echo '用户名或密码错误';
	}else{
	//1.js跳转页面，会执行两次请求，会影响用户体验
		//echo  '<script>alert("登陆成功");window.location.href="index.php"</script>';
	
	//2.php方式跳转页面header()里面写绝对地址，不要写相对地址，只执行一次
		$temp = getOne('mode','level_id='.$result['groupid']);
		$_SESSION['level_id'] = $result['groupid'];
		$_SESSION['user_id'] = $result['id'];
		$_SESSION['username'] = $result['username'];
		$temp['modeid'] = json_decode($temp['modeid']);
		$_SESSION['mode'] = $temp['modeid'];
		header("Location:".ROOT."index.php?a=index&c=news&admin=1");
	
	
		//echo '登陆成功';
	}
}

include VIEW.$admin.'/'.$c.'/'.$a.'.php';
//include('templates/login.php');
/*
$res = mysql_query($sql) or die('账号密码不对');
$rows = array();
while($row = mysql_fetch_assoc($res))
{
	$rows[] = $row;
}
print_r($row);
*/
//print_r($_POST);

?>



