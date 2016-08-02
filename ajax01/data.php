<?php 
$username = $_POST['username'];
$password = $_POST['password'];

//连接数据库
//添加数据当中

$flag = 1;

if($flag == 1){
	echo '用户名'.$username.'|密码'.$password;
}else{
	echo 0;
}


?>

<script type="text/javascript">
	parent.document.getElementById('showInfo').innerHTML = '注册成功！';


</script>