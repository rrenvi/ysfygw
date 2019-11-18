<?php
	require_once("../init.php");
	@$kw=$_REQUEST['kw'];
	@$pno=$_REQUEST["pno"];
	$output=[
		"count"=>0,
		"pageSize"=>15,
		"pageCount"=>0,
		"pno"=>0,
		"products"=>[]
	];
	if($kw!=null&&$pno!=null){
		$kws=explode(" ",$kw);//用空格将$kw这个字符串炸开 相当于 split
		for($i=0;$i<count($kws);$i++)
			$kws[$i]=" title like '%".$kws[$i]."%'";
		$where="where".implode(" and ",$kws);//相当于 join
		$sql="select count(*) from ysfy_list $where";
		$result=mysqli_query($conn,$sql);
		$output["count"]=mysqli_fetch_row($result)[0];
		$output["pageCount"]=Ceil($output["count"]/$output["pageSize"]);
		$output["pno"]=$pno;
		$limit=" limit ".$output["pageSize"]*$pno. "," .$output["pageSize"];
		$sql="select * from ysfy_list $where $limit";
		$result=mysqli_query($conn,$sql);
		$output['products']=mysqli_fetch_all($result,1);
		}
	echo json_encode($output);
?>