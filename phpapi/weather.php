<?php
$cityCode = $_GET['cityCode'];
header("Content-type:text/html;charset=utf-8");
function GetCurl($url){
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl,CURLOPT_URL, $url);
    curl_setopt($curl,CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    $resp = curl_exec($curl);
    curl_close($curl);
    return $resp;
}
$resp = GetCurl("http://apistore.baidu.com/microservice/weather?cityid=".$cityCode);
$resp = json_decode($resp,true);
header('Content-type: application/json');
echo json_encode($resp);