<?php
require("./init.php");
$error=" ";
$flag=false;

$sql="select * from tb where name='X'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
if($item->so==1){
	$sql="update tb set so='0' where name='X'";
	$rs=mysqli_query($link,$sql);	
	$flag=2;
	echo json_encode($flag).",".(($error));
	exit;
}
//X lk
if($item->lk==0){		
	//X ft 
	if($item->ft==0){		
		$sql="select * from tb where name='X-1'";
		$rs=mysqli_query($link,$sql);
		$item=$rs->fetch_object();
		//X-1 lk 
		if($item->lk==0){
			$flag=true;
		}else{$error="信号机X作为进路保护";}
	}else{$error="信号机X以损坏";}
}else{$error="信号机X以被锁定";}
//if($flag==true){include("./S1_c.php");}
if($flag==true){
	$sql="update tb set so='1' where name='X'";
	$rs=mysqli_query($link, $sql);
}
echo json_encode($flag).",".(($error));

?>