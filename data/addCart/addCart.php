<?php
require_once("../init.php");
SESSION_START();
@$uid=$_SESSION["uid"];
@$lid=$_REQUEST["lid"];
@$count=$_REQUEST["count"];
if($uid!=null&&$lid!=null&&$count!=null){
  $sql="select * from ysfy_shoppingcart where uid=$uid and lid=$lid";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_row($result);
  if($row==null){
	$sql="insert into ysfy_shoppingcart values(null,$uid,$lid,$count,0)";
  }else{
	$sql="update ysfy_shoppingcart set count=count+$count where iid=".$row[0];
  }
  mysqli_query($conn,$sql);
}
?>