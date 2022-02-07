<?php
require("./init.php");
$error=" ";
$flag=false;

$sql="select * from tb where name='1'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();

if($item->lk==0){
	if($item->ft==0){
		$flag=true;
	}else{$error="道岔1以损坏";}
}else{$error="道岔1以被锁定";}

if($flag==true&&$item->so==0){
	$sql="update tb set so='1' where name='1'";
	$rs=mysqli_query($link, $sql);
}

if($flag==true&&$item->so==1){
	$sql="update tb set so='0' where name='1'";
	$rs=mysqli_query($link, $sql);
	$flag=2;
}

echo json_encode($flag).",".(($error));

?>