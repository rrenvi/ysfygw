<?php
require_once("../init.php");
@$uname=$_REQUEST["uname"];
$sql="select * from ysfy_user where uname='$uname'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);//抓取一行数据在连接的结果里
if($row==null){
	echo "1";
}else{
	echo "0";
}
?>