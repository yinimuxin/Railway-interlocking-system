<?php
require("./init.php");
$error="";
$flag=false;

$sql="select * from tb where name='X1-4'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
//X1-4 lk 
if($item->lk==0){
	$sql="select * from tb where name='4-2'";
	$rs=mysqli_query($link,$sql);
	$item=$rs->fetch_object();
	//4-2 lk 
	if($item->lk==0){
		$sql="select * from tb where name='2-S'";
		$rs=mysqli_query($link,$sql);
		$item=$rs->fetch_object();
		//2-S lk 
		if($item->lk==0){
			$flag=true;
		}else{$error=$item->l_error;}
	}else{$error=$item->l_error;}
}else{$error=$item->l_error;}
if($flag==true){include("./X1_c.php");}
echo json_encode($flag).",".(($error));

?>