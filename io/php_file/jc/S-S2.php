<?php
require("./init.php");
$error="";
$flag=false;

$sql="select * from tb where name='S'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();

//S lk
if($item->lk==0){
	//S ft
	if($item->ft==0){
		$sql="select * from tb where name='2'";
		$rs=mysqli_query($link,$sql);
		$item=$rs->fetch_object();
		//2 lk 
		if($item->lk==0){
			//2 ft
			if($item->ft==0){
				$sql="select * from tb where name='2-S'";
				$rs=mysqli_query($link,$sql);
				$item=$rs->fetch_object();
				//2-S so 
				if($item->so==0){
					//2-S lk 
					if($item->lk==0){
						$sql="select * from tb where name='S2-2'";
						$rs=mysqli_query($link,$sql);
						$item=$rs->fetch_object();
						//S2-2 so
						if($item->so==0){
							//S2-2 lk 
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


if($flag==true){include("./S-S2_c.php");}
echo json_encode($flag).",".(($error));

?>