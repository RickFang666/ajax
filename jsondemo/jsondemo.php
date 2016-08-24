<?php
$user = $_POST['user'];
$json_user = json_decode($user,true);

//$json = '{"username":"lisi","age":"20"}';

echo json_encode($json_user);

?>