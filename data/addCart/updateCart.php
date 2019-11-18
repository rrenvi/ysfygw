<?php
require_once("../init.php");
@$iid=$_REQUEST["iid"];
@$count=$_REQUEST["count"];
if($iid!=null&&$count!=null){
	if($count>0)
		$sql="update ysfy_shoppingcart set count=$count where iid=$iid";
	else
		$sql="delete from ysfy_shoppingcart where iid=$iid";
	mysqli_query($conn,$sql);
}
?>