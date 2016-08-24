<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['age'];
// echo "姓名：".$username."|密码:".$password."年龄：".$age;
?>

<script>
    parent.document.getElementById("showInfo").innerHTML = "注册成功";
</script>