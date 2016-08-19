<?php
$fn = $_GET['cb'];//获取参数：回调函数的名字
$arr = array('zhangsan','lisi','wangwu');
echo $fn.'('.json_encode($arr).');';//callback(['zhangsan','lisi','wangwu']);

