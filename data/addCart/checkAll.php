<?php
require_once("../init.php");
session_start();
@$uid=$_SESSION["uid"];
@$checked=$_REQUEST["checked"];
if($uid!=null&&$checked!=null){
	$sql="update ysfy_shoppingcart set is_checked=$checked where uid=$uid";
	mysqli_query($conn,$sql);
}
?>