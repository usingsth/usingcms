<?php
checkLogin();
include MODEL.'cate.func.php';
$res = gotCate();





// $res1 = getlist('category',0,100,'*','pid=0');
// $res = array();
// foreach($res1 as $k1=>$v1){
	// $res[] = $v1;
	// $res2 = getlist('category',0,100,'','pid='.$v1['id']);
	// foreach($res2 as $k2=>$v2){
		// $res[] = $v2;
		// $res3 = getlist('category',0,100,'','pid='.$v2['id']);
		// foreach($res3 as $k3=>$v3){
			// $res[] = $v3;
		// }
	// }
// }

view(array('res'=>$res));