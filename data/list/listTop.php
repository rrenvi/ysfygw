<?php
require_once("../init.php");
$sql="SELECT * FROM `ysfy_list_top`";
$result=mysqli_query($conn,$sql);
echo json_encode(mysqli_fetch_all($result,1));
?>