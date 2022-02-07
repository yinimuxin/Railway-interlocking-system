<?php
require("./init.php");
$error=" ";
$flag=false;

$sql="select * from tb where name='2'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();

if($item->ft==1){
	$flag=true;
	$sql="update tb set ft='0' where name='2'";
	$rs=mysqli_query($link,$sql);
}else{
	$sql="update tb set ft='1' where name='2'";
	$rs=mysqli_query($link,$sql);
}

echo json_encode($flag).",".(($error));

?>