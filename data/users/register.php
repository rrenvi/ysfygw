<?php
require_once("../init.php");
@$uname=$_REQUEST["uname"];
if($uname==null){
	die("用户名不能为空");
}
@$upwd=$_REQUEST["upwd"];
if($upwd==null){
	die("用户密码不能为空");
}
@$email=$_REQUEST["email"];
if($email==null){
	die("邮箱不能为空");
}
@$phone=$_REQUEST["phone"];
if($phone==null){
	die("电话不能为空");
}
@$data=$_REQUEST["data"];
if($data==null){
	die("出生日期不能为空");
}
$sql="insert into ysfy_user(uname,upwd,email,phone,data)values('$uname','$upwd','$email','$phone','$data')";
$result=mysqli_query($conn,$sql);
if($result==false){
	echo "注册失败！";
}else{
	echo "注册成功！";
	$uid=mysqli_insert_id($conn);
	echo "新用户的编码是：$uid";
}
?>