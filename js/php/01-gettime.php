<?php
        // 指定允许其他域名访问  解决跨域的问题
        header('Access-Control-Allow-Origin:*');
        // 模拟网络延时
        //sleep(3);

	    //取出当前系统时间
        date_default_timezone_set('Asia/Shanghai');
        $now = time();
        $nowStr = date('Y-m-d H:i:s', $now);

        echo $nowStr;
?>