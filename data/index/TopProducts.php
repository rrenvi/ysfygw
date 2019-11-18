<?php
require_once("../init.php");
//@$pid=$_REQUEST["pid"];
$total=[
	"quanbu"=>[],
	"jichu"=>[],
	"mianmo"=>[],
	"shenti"=>[],
	"caizhuang"=>[],
	"jiemian"=>[],
	"mianbu"=>[],
	"nanshi"=>[]
];
$sql="SELECT * FROM `ysfy_index_product`";
$result=mysqli_query($conn,$sql);
$total["quanbu"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM `ysfy_index_jichu`";
$result=mysqli_query($conn,$sql);
$total["jichu"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM `ysfy_index_mianmo`";
$result=mysqli_query($conn,$sql);
$total["mianmo"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM `ysfy_index_shenti`";
$result=mysqli_query($conn,$sql);
$total["shenti"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM `ysfy_index_caizhuang`";
$result=mysqli_query($conn,$sql);
$total["caizhuang"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM `ysfy_index_jiemian`";
$result=mysqli_query($conn,$sql);
$total["jiemian"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM `ysfy_index_mianbu`";
$result=mysqli_query($conn,$sql);
$total["mianbu"]=mysqli_fetch_all($result,1);
$sql="SELECT * FROM `ysfy_index_nanshi`";
$result=mysqli_query($conn,$sql);
$total["nanshi"]=mysqli_fetch_all($result,1);
echo json_encode($total);
?>