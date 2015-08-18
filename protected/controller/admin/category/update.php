<?php
checkLogin();
$id = !empty($_GET['id'])?$_GET['id']:die('非法id');
$detail = getOne('category','id='.$id);

$arr = array();
$pra_res = $detail;
$pra_id = 1;//随便赋不是0的值
while($pra_id != 0){
	$pra_id = $pra_res['pid'];
	$temp_id = $pra_res['id'];

	$res = getList('category',0,100,'*','pid='.$pra_id);//当前级别的所有信息
	$pra_res = getOne('category','id='.$pra_id);//父级信息
	$arr[$temp_id] = $res;

}
$arr = array_reverse($arr,true);
unset($arr[$id]);

if(!empty($_POST)){
	$res = update('category',$_POST,'id='.$id);
	if(!empty($res)){
		header('Location:'.ROOT.'index.php?c=category&a=index&admin=1');
	}else{
		die('修改失败');
	}
}

view(array('detail'=>$detail,'arr'=>$arr));




