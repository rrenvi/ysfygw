<?php
require_once("../init.php");
$total=[
	"pics"=>[],
	"intrimgs"=>[]
];
$sql="SELECT * FROM `ysfy_index_carousel`";
$result=mysqli_query($conn,$sql);
$total["pics"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM `ysfy_index_intr`";
$result=mysqli_query($conn,$sql);
$total["intrimgs"]=mysqli_fetch_all($result,1);
echo json_encode($total);
?>