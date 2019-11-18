<?php
require_once("../init.php");
@$iid=$_REQUEST["iid"];
if($iid!=null){
	$sql="delete from ysfy_shoppingcart where iid=$iid";
	mysqli_query($conn,$sql);
}
?>