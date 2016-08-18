<?php 
$callback = $_GET['_jsonp'];

$arr = array("zhangsan","lisi","zhaoliu");


echo $callback."(".json_encode($arr).")";

 ?>