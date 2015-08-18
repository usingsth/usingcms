<?php
function gotCate($pid='0',$res=array(),$level=0){
	$res1 = getList('category',0,100,'*','pid='.$pid);
	if(!empty($res1)){
		foreach($res1 as $k=>$v){
			$str = '<font color="red" >';
			for($i=0;$i<$level;$i++){
				$str .='|-';
			}
			$str .='</font>';
			$v['str_name'] = $str.'<font color="green" >'.$v['name'].'</font>';
			$res[] = $v;
			$res = gotCate($v['id'],$res,$level+1);
		}
	}
	return $res;
}

