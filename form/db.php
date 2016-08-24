<?php
$bookName = $_POST['bookName'];
$bookAuthor = $_POST['bookAuthor'];
$recommend = $_POST['recommend'];
$bookDesc = $_POST['bookDesc'];
$category = $_POST['category'];

if($recommend == 1){
	$recommend = '是';
}else if($recommend == 2){
	$recommend = '否';
}

$arr = explode(',',$category); 

$str = '';
for($i = 0;$i < count($arr);$i++){
   if($arr[$i] == 1){
        $str = $str.'计算机 ';
   }else if($arr[$i] == 2){
   		$str = $str.'文学 ';
   }else if($arr[$i] == 3){
   		$str = $str.'会计';
   }
}
$result = array();
$result['bookName'] = $bookName;
$result['bookAuthor'] = $bookAuthor;
$result['recommend'] = $recommend;
$result['bookDesc'] = $bookDesc;
$result['category'] = $str;

echo json_encode($result);

