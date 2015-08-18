<?php
/*
封装函数作用：
1.方便阅读
2.方便调用
3.代码的复用
步骤：
1.保证程序的正常运转
2.考虑代码的复用性
*/




/*
//生成页码组件函数
@param string 表名
@param string url地址
@param int 当前页码
@param int 每页显示的条数
@param int 显示页码数量
@return string 页码组件
*/
function getPage($table,$url,$curr_page,$pre_page=5,$page_num=5){
	$sql = "select count(*) as sum from {$table}";
	$query = mysql_query($sql);
	$res = mysql_fetch_assoc($query);
	$total = $res['sum'];//总条数
	$total_page = ceil($total/$pre_page);

	$floor_page = floor($page_num/2);
	$start_page = $curr_page - $floor_page;//起始页
	$end_page = $curr_page + $floor_page;//结束页

	if($start_page<1){
	$start_page =1;
	$end_page = $page_num;
	}
	if($end_page>$total_page){
	$end_page = $total_page;
	$start_page = $total_page-$page_num+1;
	}
	if($total_page<$page_num){
	$start_page = 1;
	$end_page = $total_page;
	}
	if($curr_page >$total_page){
	$curr_page = $total_page;
	}
	if($curr_page<1){
	$curr_page = 1;
	}
	$page = '';

	//首页
	$page .= '<a href="'.$url.'&p=1" class="number" title="1">首页</a>';

	//上一页
	if($curr_page>1){
	$prev_page = $curr_page -1;
	$page .= '<a href="'.$url.'&p='.$prev_page.'" class="number" title="'.$prev_page.'">上一页</a>';
	}

	//上五页
	if($start_page>5){
	$prev_page_5 = $curr_page -$page_num;
	$page .= '<a href="'.$url.'&p='.$prev_page_5.'" class="number" title="'.$prev_page_5.'">...</a>';
	}

	//循环生成页码
	for($i=$start_page;$i<=$end_page;$i++){
	if($i == $curr_page){
	$page .= '<a href="'.$url.'&p='.$i.'" class="number current" title="'.$i.'">'.$i.'</a>'; 
	}else{
	$page .= '<a href="'.$url.'&p='.$i.'" class="number" title="'.$i.'">'.$i.'</a>'; 
	}
	}

	//下五页
	if($end_page<=$total_page-$page_num){
	$next_page_5 = $curr_page +$page_num;
	$page .= '<a href="'.$url.'&p='.$next_page_5.'" class="number" title="'.$next_page_5.'">...</a>';
	}

	//下一页
	if($curr_page<$total_page){
	$next_page = $curr_page +1;
	$page .= '<a href="'.$url.'&p='.$next_page.'" class="number" title="'.$next_page.'">下一页</a>';
	}


//尾页
	$page .= '<a href="'.$url.'&p='.$total_page.'" class="number" title="'.$total_page.'">尾页</a>';
	return $page;
}