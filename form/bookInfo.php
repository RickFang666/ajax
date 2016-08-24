<?php
$flag = $_POST['flag'];
require_once('connect.php');
if($flag == 1){//添加
	$bookName = $_POST['bookName'];
	$bookAuthor = $_POST['bookAuthor'];
	$recommend = $_POST['recommend'];
	$bookDesc = $_POST['bookDesc'];
	$category = $_POST['category'];
	mysql_query("INSERT INTO bookinfo (book_name, book_author, recommend,book_category,book_desc) 
	VALUES ('".$bookName."', '".$bookAuthor."', ".$recommend.",'".$category."','".$bookDesc."')");
}else if($flag == 2){//删除
	$id= $_POST['id'];
	mysql_query("DELETE FROM bookinfo WHERE id =".$id);
}else if($flag == 3){//更新查询
	$id= $_POST['id'];
	$query=mysql_query("select * from bookinfo where id =".$id);
	while ($row=mysql_fetch_array($query)) {
		$book = array(
			'id'=>$row['id'],
			'bookName'=>$row['book_name'],
			'bookAuthor'=>$row['book_author'],
			'recommend'=>$row['recommend'],
			'category'=>$row['book_category'],
			'bookDesc'=>$row['book_desc']
        );
    }
    echo json_encode($book);
	die();
}else if($flag == 4){
	$id= $_POST['id'];
	$bookName = $_POST['bookName'];
	$bookAuthor = $_POST['bookAuthor'];
	$recommend = $_POST['recommend'];
	$bookDesc = $_POST['bookDesc'];
	$category = $_POST['category'];
	mysql_query("UPDATE bookinfo set book_name = '".$bookName."',book_author = '".$bookAuthor."',recommend = ".$recommend.",book_category = '".$category."',book_desc = '".$bookDesc."' where id = ".$id);
}



//列表数据查询
$query=mysql_query("select * from bookinfo order by id desc");
while ($row=mysql_fetch_array($query)) {
	$rec = $row['recommend'];
	if($rec == 1){
		$rec= '是';
	}else if($rec == 2){
		$rec = '否';
	}

	$arr = explode(',',$row['book_category']); 
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

	$sayList[] = array(
		'id'=>$row['id'],
		'bookName'=>$row['book_name'],
		'bookAuthor'=>$row['book_author'],
		'recommend'=>$rec,
		'category'=>$str,
		'bookDesc'=>$row['book_desc']
    );
}
echo json_encode($sayList);










// if($recommend == 1){
// 	$recommend = '是';
// }else if($recommend == 2){
// 	$recommend = '否';
// }

// $arr = explode(',',$category); 

// $str = '';
// for($i = 0;$i < count($arr);$i++){
//    if($arr[$i] == 1){
//         $str = $str.'计算机 ';
//    }else if($arr[$i] == 2){
//    		$str = $str.'文学 ';
//    }else if($arr[$i] == 3){
//    		$str = $str.'会计';
//    }
// }
// $result = array();
// $result['bookName'] = $bookName;
// $result['bookAuthor'] = $bookAuthor;
// $result['recommend'] = $recommend;
// $result['bookDesc'] = $bookDesc;
// $result['category'] = $str;

// echo json_encode($result);

