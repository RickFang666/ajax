<?php

    header('Content-Type:application/json;charset=utf-8');

    $name = $_POST["name"];
    $pwd = $_POST["pwd"];
    //模拟网络耗时
    sleep(3);
    if ($name == "zs" && $pwd == "123") {
    	echo 1; //登录成功
    }else{
    	echo 0; //登录失败
    }

?>