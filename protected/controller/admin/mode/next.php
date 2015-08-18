<?php
checkLogin();
$pid = $_GET['pid']>=0?$_GET['pid']:die('非法id');
$res = getlist('category',0,100,'*','pid='.$pid);
echo json_encode($res);
return false;