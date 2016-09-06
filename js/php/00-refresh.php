<?php


    $name = $_POST["name"];
    $pwd = $_POST["pwd"];

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "POST") {

        if ($name == "zs" && $pwd == "123") {
            echo "登录成功";
        }else{
            echo "登录失败";
        }
    }
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form method="post" action="00-refresh.php">
        <input type="text" name="name" id="name" placeholder="请输入用户名"/> <br/>
        <input type="text" name="pwd" id="pwd" placeholder="请输入密码"/><br/>
        <input type="submit" id="login" value="登录"/>
    </form>
</body>
</html>