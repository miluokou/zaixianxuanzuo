<?php
	
	
	require "../model/Db.php";
	require "../model/Model.php";
	
	$m=new Model();
	$data=$m->login();
	
/*
 
// 创建连接
$conn = new mysqli('localhost', 'root', '', 'web');
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
 
// 预处理及绑定
$stmt = $conn->prepare("select count(*) from user where acc=? and pass=? and type=? ");
$stmt->bind_param("sss", $acc, $pass, $type);
 
$acc = "15713905085";
$pass = "tea001";
$type= "1";
//绑定结果集
$stmt->bind_result($result);
//执行
$stmt->execute();
//取出绑定的结果集
while($stmt->fetch()){
 echo "$result";
}
//关闭结果集
$stmt->free_result();
$stmt->close();
 
*/


	
?>
 
