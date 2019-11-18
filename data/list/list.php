<?php
require_once("../init.php");
@$pno=$_REQUEST["pno"];
$output=["count"=>0,"pageSize"=>15,"pageCount"=>0,"pno"=>0,"products"=>[]];
if($pno!=null){
	$sql="select count(*) from ysfy_list";
	$result=mysqli_query($conn,$sql);
	$output["count"]=mysqli_fetch_row($result)[0];
	$output["pageCount"]=Ceil($output["count"]/$output["pageSize"]);
	$output["pno"]=$pno;
	$limit=" limit ".$output["pageSize"]*$pno.",".$output["pageSize"];
	$sql="select * from ysfy_list $limit";
	$result=mysqli_query($conn,$sql);
	$output["products"]=mysqli_fetch_all($result,1);
}
echo json_encode($output);
?>