<?php
require("./init.php");
$error="";
$flag=false;

$sql="select * from tb where name='S1'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();

//S1 lk 
if($item->lk==0){
	//S1 ft 
	if($item->ft==0){		
		$sql="select * from tb where name='X'";
		$rs=mysqli_query($link,$sql);
		$item=$rs->fetch_object();
		//X lk
		if($item->lk==0){
			//X ft 
			if($item->ft==0){
				$sql="select * from tb where name='1'";
				$rs=mysqli_query($link,$sql);
				$item=$rs->fetch_object();
				//1 lk
				if($item->lk==0){
					//1 ft 
					if($item->ft==0){
						$sql="select * from tb where name='3'";
						$rs=mysqli_query($link,$sql);
						$item=$rs->fetch_object();
						//3 lk 
						if($item->lk==0){
							//3 ft 
							if($item->ft==0){
								$sql="select * from tb where name='X-1'";
								$rs=mysqli_query($link,$sql);
								$item=$rs->fetch_object();
								//X-1 so 
								if($item->so==0){
									//X-1 lk 
									if($item->lk==0){
										$sql="select * from tb where name='1-3'";
										$rs=mysqli_query($link,$sql);
										$item=$rs->fetch_object();	
										//1-3 so 
										if($item->so==0){
											//1-3 lk 
											if($item->lk==0){
												$sql="select * from tb where name='3-S1'";
												$rs=mysqli_query($link,$sql);
												$item=$rs->fetch_object();	
												//3-S1 so 
												if($item->so==0){
													//3-S1 lk 
													if($item->lk==0){
														$flag=true;
													}else{$error=$item->l_error;}
												}else{$error=$item->s_error;}
											}else{$error=$item->l_error;}
										}else{$error=$item->s_error;}
									}else{$error=$item->l_error;}
								}else{$error=$item->s_error;}
							}else{$error=$item->f_error;}
						}else{$error=$item->l_error;}
					}else{$error=$item->f_error;}
				}else{$error=$item->l_error;}
			}else{$error=$item->f_error;}
		}else{$error=$item->l_error;}
	}else{$error=$item->f_error;}
}else{$error=$item->l_error;}
if($flag==true){include("./S1_c.php");}
echo json_encode($flag).",".(($error));

?>