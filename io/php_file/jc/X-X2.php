<?php
require("./init.php");
$error="";
$flag=false;

$sql="select * from tb where name='X'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
// X lk 
if($item->lk==0){
	//X ft
	if($item->ft==0){				
		$sql="select * from tb where name='1'";
		$rs=mysqli_query($link,$sql);
		$item=$rs->fetch_object();
		// 1 lk 
		if($item->lk==0){
			//1 ft
			if($item->ft==0){
				$sql="select * from tb where name='X-1'";
				$rs=mysqli_query($link,$sql);
				$item=$rs->fetch_object();
				//X-1 so
				if($item->so==0){
					//X-1 lk
					if($item->lk==0){
						$sql="select * from tb where name='1-X2'";
						$rs=mysqli_query($link,$sql);
						$item=$rs->fetch_object();
						//1-X2 so 
						if($item->so==0){
							//1-X2 lk
							if($item->lk==0){
								$flag=true;
							}else{$error=$item->l_error;}
						}else{$error=$item->s_error;}
					}else{$error=$item->l_error;}
				}else{$error=$item->s_error;}
			}else{$error=$item->f_error;}
		}else{$error=$item->l_error;}
	}else{$error=$item->f_error;}
}else{$error=$item->l_error;}
if($flag==true){include("./X-X2_c.php");}
echo json_encode($flag).",".(($error));

?>