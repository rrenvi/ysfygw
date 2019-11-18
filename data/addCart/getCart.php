<?php
require_once("../init.php");
session_start();
@$uid=$_SESSION["uid"];
if($uid!=null){
	$sql="SELECT count(*) FROM `ysfy_shoppingcart` WHERE uid=$uid";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_row($result);
  $sql="SELECT * FROM `ysfy_shoppingcart` inner JOIN `ysfy_details` on `ysfy_shoppingcart`.lid=`ysfy_details`.lid WHERE uid=$uid order by iid desc";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_all($result,1);
	$output=["counts"=>$row,"data"=>$rows];
	echo json_encode($output);
}
?>