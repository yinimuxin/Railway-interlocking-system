<?php
require("./init.php");
$error=" ";


$sql="select * from tb where name='X2-4'";
$rs=mysqli_query($link, $sql);
$item=$rs->fetch_object();
if($item->lk==0){
	$flag=true;
	$sql="update tb set lk='1' where name='X2-4'";
	$rs=mysqli_query($link, $sql);
	echo json_encode($flag).",".(($error));
	exit;
}

$sql="update tb set lk='0' where name='X2-4'";
$rs=mysqli_query($link, $sql);

if($item->so==0){
	$flag=1;
	
}else{
	$flag=2;
}
echo json_encode($flag).",".(($error));

?>