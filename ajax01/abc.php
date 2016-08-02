<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>----</title>
</head>
<body>
	
	
<?php 

//连接数据库
//取出来数据
$apple = '苹果';


$flag = $_GET['param'];

if($flag == 1){
	echo '<div  style="color:red;">'.$apple.'</div>';
}else if($flag == 2){
	echo '<div>香蕉456</div>';
}else{
	echo '<div>橘子</div>';
}



?>
</body>
</html>

