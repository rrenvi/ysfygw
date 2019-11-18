<?php
require_once("../init.php");
@$lid=$_REQUEST["lid"];
if($lid!=null){
	$sql="select * from ysfy_details where lid=$lid";
	$result=mysqli_query($conn,$sql);
	echo json_encode(mysqli_fetch_all($result,1));
}
?>