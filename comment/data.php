<?php
require_once('connect.php');
$last = $_GET['last'];
$amount = $_GET['amount'];

$query=mysql_query("select * from comment order by id desc limit $last,$amount");
$flag = false;
while ($row=mysql_fetch_array($query)) {
	$flag = true;
	$sayList[] = array(
		'id'=>$row['id'],
		'nickname'=>$row['nickname'],
		'content'=>$row['content'],
		'imgpath'=>$row['imgpath'],
		'time'=>$row['time']
      );
}
if($flag){
    echo json_encode($sayList);
}else{
	echo true;
}

?>

