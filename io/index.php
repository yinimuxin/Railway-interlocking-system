<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>一个车站</title>	
		<script>
		window.onload=function(){
			
			var _175_1=document.getElementById("_175_1");
			var _175_2=document.getElementById("_175_2");
			var _175_3=document.getElementById("_175_3");
			var _175_4=document.getElementById("_175_4");
			
			var _100_1=document.getElementById("_100_1");
			var _100_2=document.getElementById("_100_2");
			var _100_3=document.getElementById("_100_3");
			
			var _top=document.getElementById("_top");
			var _top2=document.getElementById("_top2");
			var _btm=document.getElementById("_btm");
			var _btm2=document.getElementById("_btm2");
			
			var _cd_1=document.getElementById("_cd_1");
			var _cd_2=document.getElementById("_cd_2");
			var _cd_3=document.getElementById("_cd_3");
			var _cd_4=document.getElementById("_cd_4");
			
			var X=document.getElementById("X");
			var X1=document.getElementById("X1");
			var X2=document.getElementById("X2");
			var S1=document.getElementById("S1");
			var S2=document.getElementById("S2");
			var S=document.getElementById("S");
			var info=document.getElementById("info");
			var _info=document.getElementById("_info");
			
			
			var test=document.getElementById("test");
			//消息题示
			var ta=document.getElementById("ta");
			//操作记录
			var log=document.getElementById("log");
			ta.scrollTop=ta.scrollHeight;
			
			//init();
		}
		function init(){
			var obj = new XMLHttpRequest();
				obj.open("GET","php_file/fetch.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						infos=((obj.responseText)).split(",");
						var it=0;
						for(let i=0;i<21;i++){
							for(let j=0;j<3;j++){
								arrs[i][j]=infos[it];
								it++;
							}
						}
					}
				}
			
			//1
			if(arrs[0][0]==0) _cd_1.src="img/cd_g.jpg";		
			if(arrs[0][0]==1) _cd_1.src="img/cd_f1.jpg";
			if(arrs[0][1]==0) _cd_1.style.cssText="border: none";
			if(arrs[0][1]==1) _cd_1.style.border="4px solid white"
			if(arrs[0][2]==1) _cd_1.src="img/cd_g1.jpg";
			//1-3
			if(arrs[1][0]==0) _100_1.src="img/100b.jpg";		
			if(arrs[1][0]==1) _100_1.src="img/100w.jpg";
			if(arrs[1][1]==1) _100_1.src="img/100r.jpg";
			//1-X2
			if(arrs[2][0]==0) _top.src="img/top_b.jpg";		
			if(arrs[2][0]==1) _top.src="img/top_w.jpg";
			if(arrs[2][1]==1) _top.src="img/top_r.jpg";
			//2
			if(arrs[5][0]==0) _cd_2.src="img/cd_g.jpg";		
			if(arrs[5][0]==1) _cd_2.src="img/cd_f2.jpg";
			if(arrs[5][1]==0) _cd_2.style.cssText="border: none";
			if(arrs[5][1]==1) _cd_2.style.border="4px solid white"
			if(arrs[5][2]==1) _cd_2.src="img/cd_g2.jpg";
			//2-S
			if(arrs[4][0]==0) _175_4.src="img/175b.jpg";		
			if(arrs[4][0]==1) _175_4.src="img/175w.jpg";
			if(arrs[4][1]==1) _175_4.src="img/175r.jpg";
			//3
			if(arrs[8][0]==0) _cd_3.src="img/cd_g.jpg";		
			if(arrs[8][0]==1) _cd_3.src="img/cd_f3.jpg";
			if(arrs[8][1]==0) _cd_3.style.cssText="border: none;";
			if(arrs[8][1]==1) _cd_3.style.border="4px solid white"
			if(arrs[8][2]==1) _cd_3.src="img/cd_g3.jpg";
			//3-S1
			if(arrs[6][0]==0) _175_2.src="img/175b.jpg";		
			if(arrs[6][0]==1) _175_2.src="img/175w.jpg";
			if(arrs[6][1]==1) _175_2.src="img/175r.jpg";
			//3-S2
			if(arrs[7][0]==0) _btm2.src="img/btm_b2.jpg";		
			if(arrs[7][0]==1) _btm2.src="img/btm_w2.jpg";
			if(arrs[7][1]==1) _btm2.src="img/btm_r2.jpg";
			//4
			if(arrs[3][0]==0) _cd_4.src="img/cd_g.jpg";		
			if(arrs[3][0]==1) _cd_4.src="img/cd_f4.jpg";
			if(arrs[3][1]==0) _cd_4.style.cssText="border: none";
			if(arrs[3][1]==1) _cd_4.style.border="4px solid white"
			if(arrs[3][2]==1) _cd_4.src="img/cd_g4.jpg";
			//4-2
			if(arrs[9][0]==0) _100_3.src="img/100b.jpg";		
			if(arrs[9][0]==1) _100_3.src="img/100w.jpg";
			if(arrs[9][1]==1) _100_3.src="img/100r.jpg";
			//S
			if(arrs[10][0]==0) S.src="img/xh_r.jpg";
			if(arrs[10][0]==1) S.src="img/xh_g.jpg";
			if(arrs[10][1]==0) S.style.cssText="border-right: 4px solid #059CEC;";
			if(arrs[10][1]==1) S.style.cssText="border-right:4px solid red";
			//S1
			if(arrs[11][0]==0) S1.src="img/xh_r.jpg";		
			if(arrs[11][0]==1) S1.src="img/xh_g.jpg";
			if(arrs[11][1]==0) S1.style.cssText="border-right: 4px solid #059CEC;";
			if(arrs[11][1]==1) S1.style.cssText="border-right:4px solid red";
			//S1-X1
			if(arrs[12][0]==0) _100_2.src="img/100b.jpg";		
			if(arrs[12][0]==1) _100_2.src="img/100w.jpg";
			if(arrs[12][1]==1) _100_2.src="img/100r.jpg";
			//S2
			if(arrs[13][0]==0) S2.src="img/xh_r.jpg";		
			if(arrs[13][0]==1) S2.src="img/xh_g.jpg";
			if(arrs[13][1]==0) S2.style.cssText="border-right: 4px solid #059CEC;";
			if(arrs[13][1]==1) S2.style.cssText="border-right:4px solid red";
			//S2-2
			if(arrs[14][0]==0) _btm.src="img/btm_b.jpg";		
			if(arrs[14][0]==1) _btm.src="img/btm_w.jpg";
			if(arrs[14][1]==1) _btm.src="img/btm_r.jpg";
			//X
			if(arrs[15][0]==0) X.src="img/xh_r.jpg";		
			if(arrs[15][0]==1) X.src="img/xh_g.jpg";
			if(arrs[15][1]==0) X.style.cssText="border-left: 4px solid #059CEC;";
			if(arrs[15][1]==1) X.style.cssText="border-left:4px solid red";
			//X-1
			if(arrs[16][0]==0) _175_1.src="img/175b.jpg";		
			if(arrs[16][0]==1) _175_1.src="img/175w.jpg";
			if(arrs[16][1]==1) _175_1.src="img/175r.jpg";
			//X1
			if(arrs[17][0]==0) X1.src="img/xh_r.jpg";		
			if(arrs[17][0]==1) X1.src="img/xh_g.jpg";
			if(arrs[17][1]==0) X1.style.cssText="border-left: 4px solid #059CEC;";
			if(arrs[17][1]==1) X1.style.cssText="border-left:4px solid red";
			//X1-4
			if(arrs[18][0]==0) _175_3.src="img/175b.jpg";		
			if(arrs[18][0]==1) _175_3.src="img/175w.jpg";
			if(arrs[18][1]==1) _175_3.src="img/175r.jpg";
			//X2
			if(arrs[19][0]==0) X2.src="img/xh_r.jpg";		
			if(arrs[19][0]==1) X2.src="img/xh_g.jpg";
			if(arrs[19][1]==0) X2.style.cssText="border-left: 4px solid #059CEC;";
			if(arrs[19][1]==1) X2.style.cssText="border-left:4px solid red";
			//X2-4
			if(arrs[20][0]==0) _top2.src="img/top_b2.jpg";		
			if(arrs[20][0]==1) _top2.src="img/top_w2.jpg";
			if(arrs[20][1]==1) _top2.src="img/top_r2.jpg";
			
			
		}
		</script>
		<style>
			body{
					position: relative;
					background-color: rgb(50,50,50);
			}
			table {
				border:2px solid white;
				color: white;
			}
			tr{
				height: 80px;
			}
			tr th{
				font:bold;
				font-weight: 100;
				width: 20%;
			}
			tr th:nth-child(3){
				width: 60%;
			}
			#sss input {
				height: 80px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 100%;
			}
			#graph{
				height: 350px;
				width: 1200px;
				position: relative;
				margin: 0 auto;
			}
			#graph img {
				display: block;
				position: absolute;
			}
			#graph span{
				position: absolute;
				color: white;
				font-size: 20px;
				z-index: 100;
			}
			#_175_1{
				top: 150px;
				left: 10px;
			}
			#_175_2{
				left:375px;
				top:150px;
			}
			#_175_3{
				top:150px;
				left:615px;
			}
			#_175_4{
				top:150px;
				left:975px;
			}
			#_cd_1{
				top: 150px;
				left:185px;
				
			}
			#_cd_2{
				top: 150px;
				left:325px;
				
			}
			#_cd_3{
				top:150px;
				left:790px;
				
			}
			#_cd_4{
				top: 150px;
				left:940px;
				
			}
			#_100_1{
				top: 150px;
				left:225px;
			}
			#_100_2{
				top:150px;
				left:545px;
				z-index: -1;
			}
			#_100_3{
				top:150px;
				left:840px;
			}
			#_top{
				top: 15px;
				left: -10px;
				z-index: -11;
			}
			#_top2{
				top: 15px;
				left:640px;
			}
			#_btm2{
				top:190px;
				left:-20px;
				z-index: -11;
			}
			#_btm{
				top:190px;
				left:530px;
			}
			#X{
				top:120px;
				left:50px;
				border-left: 4px solid #059CEC;
			}
			#X1{
				top:120px;
				left:620px;
				border-left: 4px solid #059CEC;
			}
			#X2{
				top:35px;
				left:650px;
				border-left: 4px solid #059CEC;
			}
			#S1{
				top:180px;
				left:495px;
				border-right: 4px solid #059CEC;
			}
			#S2{
				top:270px;
				left:450px;
				border-right: 4px solid #059CEC;
			}
			#S{
				top:179.5px;
				left:1050px;
				border-right: 4px solid #059CEC ;
			}
			/*----------X-------------*/
			#_X{
				top:120px;
				left:30px;
			}
			#_X #_X_cz {
				display:none;
			}
			#_X #_X_cz input {
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}	
			#_X:hover #_X_cz{
				display: block;
			}
			/*----------X1-------------*/	
			#_X1{
				top:120px;
				left:590px;
			}
			#_X1 #_X1_cz{
				display:none;
			}
			#_X1 #_X1_cz input {
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}	
			#_X1:hover #_X1_cz{
				display: block;
			}
			
			/*----------X2-------------*/	
			
			#_X2{
				top:30px;
				left:620px;
			}
			#_X2 #_X2_cz{
				display:none;	
				
			}
			#_X2 #_X2_cz input {
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}	
			#_X2:hover #_X2_cz{
				display: block;
			}
			
			/*----------S-------------*/	
			#_S{
				top:190px;
				left:1015px;	
			}
			#_S #_S_cz{
				display:none;	
			}
			#_S #_S_cz input {
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 100%;
			}	
			#_S:hover #_S_cz{
				display: block;
			}
			
			/*----------S1-------------*/	
			
			#_S1{
				top:190px;
				left:560px;
			}
			#_S1 #_S1_cz{
				display:none;	
			}
			#_S1 #_S1_cz input {
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}	
			#_S1:hover #_S1_cz{
				display: block;
			}
			/*----------S2-------------*/	
			#_S2{
				top:275px;
				left:520px;
			}
			
			#_S2 #_S2_cz{
				display:none;	
			}
			#_S2 #_S2_cz input {
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}	
			#_S2:hover #_S2_cz{
				display: block;
			}
			/*----------cd_1-------------*/	
			#cd_1{
				top: 130px;
				left:165px;
			}
			#cd_1_cz{
				display: none;
				width: 300px;
				position: relative;
				top:-120px;
				z-index: 300;
			}
			#cd_1 #cd_1_cz input{
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}
			#cd_1:hover #cd_1_cz{
				display: block;
			}
			/*----------cd_2-------------*/	
			#cd_2{
				top: 130px;
				left:305px;
			}
			#cd_2_cz{
				display: none;
				width: 300px;
				position: relative;
				top:-120px;
				z-index: 300;
			}
			#cd_2 #cd_2_cz input{
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}
			#cd_2:hover #cd_2_cz{
				display: block;
			}
			
			/*----------cd_3-------------*/	
			#cd_3{
				top:133px;
				left:760px;
			}
			#cd_3_cz{
				display: none;
				width: 300px;
				position: relative;
				top:-120px;
				z-index: 300;
			}
			#cd_3 #cd_3_cz input{
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}
			#cd_3:hover #cd_3_cz{
				display: block;
			}
			/*----------cd_4-------------*/	
			#cd_4{
				top: 130px;
				left:915px;
			}
			#cd_4_cz{
				display: none;
				width: 300px;
				position: relative;
				top:-120px;
				z-index: 300;
			}
			#cd_4 #cd_4_cz input{
				height: 50px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				text-align: center;
				font-size: 20px;
				width: 50%;
			}
			#cd_4:hover #cd_4_cz{
				display: block;
			}
			
			#info{
				right: 0px;
				top: -80px;
				border-bottom: 5px solid white;
				padding-bottom:12px;
				padding-left:14px;
				padding-right:20px;
			}
			#_info{
				right: 84px;
				top: -67px;
				font-size:20px;
				border-bottom: 5px solid white;
				padding-bottom:23px;
				padding-left:32px;
			}
			
			#station{
				width: max-content;
				position: relative;
				border: 5px solid white;
				margin: 0 auto;
			}
			#caption{
				width: 240px;
				margin: 0 auto;
				position: relative;
				
				top : -15px;
				line-height: 3em;
				border-bottom: 5px solid white;
				border-right: 5px solid white;
				border-left: 5px solid white;
			}
			#caption p{
				color: white;
				font:bold;
				margin-top:22px;
				padding-top:px;
				font-size:20px;
				
			}
			#btns tr td{
					text-align: center;
					cursor: pointer;
			}
			#X-X1_jc{
				width: 297px;
				height: 80px;
				position: absolute;
				
				left: 2px;
			}
			#X-X2_jc{
				width: 297px;
				height: 80px;
				position: absolute;
				top:80px;
				left: 2px;
			}
			#S-S1_jc{
				width: 297px;
				height: 80px;
				position: absolute;
				top:160px;
				left:2px;
			}
			#S-S2_jc{
				width: 297px;
				height: 80px;
				position: absolute;
				top:240px;
				left:2px;
			}
			#X1_fc{
				width: 297px;
				height: 80px;
				position: absolute;
				top:320px;
				left:2px;
			}
			#X2_fc{
				width: 297px;
				height: 80px;
				position: absolute;
				top:400px;
				left:2px;
			}
			#S1_fc{
				width: 297px;
				height: 80px;
				position: absolute;
				top:480px;
				left:2px;
			}
			#S2_fc{
				width: 297px;
				height: 80px;
				position: absolute;
				top:560px;
				left:2px;
			}
			#X_tg{
				width:297px;
				height: 80px;
				position: absolute;
				top:630px;
				left:2px;
			}
			#S_tg{
				width: 297px;
				height: 80px;
				position: absolute;
				top:710px;
				left:2px;
			}
			#X-X1_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				left: -2px;
			}
			#X-X2_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:80px;
				left: -2px;
			}
			p {
				user-select:none;
			}
			td p{
				user-select:none;
			}
			#S-S1_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:160px;
				left:-2px;
			}
			#S-S2_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:240px;
				left:-2px;
			}
			#X1_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:320px;
				left:-2px;
			}
			#X2_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:400px;
				left:-2px;
			}
			#S1_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:480px;
				left:-2px;
			}
			#S2_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:560px;
				left:-2px;
			}
			#X_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:640px;
				left:-2px;
			}
			#S_qx{
				width: 297px;
				height: 80px;
				position: absolute;
				top:720px;
				left:-2px;
			}
			
			#drop_1,#drop_2,#drop_3{
				display:inline-block;
				position:relative;
				top:-94px;
				left:2px;
			}
			#drop_2{
				left:-2px;
			}
			#drop_3{
				left:235px;
				z-index:200;
			}
			#px_btn {
				height:80px;
				display:inline;
				width:240px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				border-bottom:4px solid white;
				border-right:4px solid white;
				font-size:20px;
			}
			#qx_btn {
				height:80px;
				width:240px;
				background-color: rgb(50,50,50);
				border-bottom:4px solid white;
				border-right:4px solid white;
				color: #F0F8FF;
				font-size:20px;
			}
			
			#cz_btn {
				height:80px;
				width:240px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;
				border-bottom:4px solid white;
				border-right:4px solid white;
				font-size:20px;
			}
			
			#drop_content input{
				height: 80px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;	
				text-align: center;
				font-size: 20px;
				width: 240px;
				z-index:200;
			}
			#drop_content2 input{
				height: 80px;
				background-color: rgb(50,50,50);
				color: #F0F8FF;	
				text-align: center;
				font-size: 20px;
				width: 240px;
				z-index:200;
			}
			#drop_content{
				display: none;
				position: absolute;
				width:297px;
				height: 79px;
			}
			#drop_content2{
				display: none;
				position: absolute;
				width:297px;
				height: 79px;
			}
			#drop_content3{
				display: none;
				position: absolute;
				width:297px;
				height: 79px;
			}
			#drop_content3 input{
				text-decoration:none;
				color:white;
				height: 60px;
				background-color: rgb(50,50,50);
				text-align: center;
				border-bottom: 4px solid #F0F8FF;
				font-size: 20px;
				width: 240px;
				z-index:200;
			}
		
		
			#drop_1:hover #drop_content{
				display: block;
			}
			#drop_2:hover #drop_content2{
				display: block;
			}
			#drop_3:hover #drop_content3{
				display: block;
			}
			#show_log:hover #drop_log{
				display:block	
			}
			#drop_log{
				position:absolute;
				top:700px;
				display:none;
			}
			#log{
				border-radius:10%;
				height:300px;
				width:200px;
				color:white;
				font-size:20px;
				background-color:rgb(50,50,50)	
			}
			
			
			
			
		</style>
	</head>
	<body>
		
		<div id="station">
			<div id="caption">
				<p align="center">一个车站</p>
			</div>
			<div id="graph">
				<img id="_175_1" src="img/175b.jpg" />
				<img id="_175_2" src="img/175b.jpg">
				<img id="_175_3" src="img/175b.jpg">
				<img id="_175_4" src="img/175b.jpg">
				
				<img id="_100_1" src="img/100b.jpg" />
				<img id="_100_2" src="img/100b.jpg">
				<img id="_100_3" src="img/100b.jpg">
				
				<img id="_top" src="img/top_b.jpg">
				<img id="_top2" src="img/top_b2.jpg">
				<img id="_btm" src="img/btm_b.jpg">
				<img id="_btm2" src="img/btm_b2.jpg">
				
				<img id="_cd_1" src="img/cd_g.jpg"/>
				<img id="_cd_2" src="img/cd_g.jpg">
				<img id="_cd_3" src="img/cd_g.jpg">
				<img id="_cd_4" src="img/cd_g.jpg">
					
				<img id="X" src="img/xh_r.jpg">
				<img id="X1" src="img/xh_r.jpg">
				<img id="X2" src="img/xh_r.jpg">
				<img id="S1" src="img/xh_r.jpg">
				<img id="S2" src="img/xh_r.jpg">
				<img id="S" src="img/xh_r.jpg">
				<img id="info" src="img/xh_g.jpg">
				
				<span id="_X">X
				<div id="_X_cz">
				<input type="button" id="_X_cz_1" value="改变信号机的状态">
				<input type="button" id="_X_cz_2" value="改变信号机的锁定状态">
				<input type="button" id="_X_cz_3" value="故障模拟">
				</div></span>
				
				<span id="_X1">X1
				<div id="_X1_cz">
				<input type="button" id="_X1_cz_1" value="改变信号机的状态">
				<input type="button" id="_X1_cz_2" value="改变信号机的锁定状态">
				<input type="button" id="_X1_cz_3" value="故障模拟">
				</div></span>
				
				<span id="_X2">X2
				<div id="_X2_cz">
				<input type="button" id="_X2_cz_1" value="改变信号机的状态">
				<input type="button" id="_X2_cz_2" value="改变信号机的锁定状态">
				<input type="button" id="_X2_cz_3" value="故障模拟">
				</div></span>
				
				<span id="_S">S
				<div id="_S_cz">
				<input type="button" id="_S_cz_1" value="改变信号机的状态">
				<input type="button" id="_S_cz_2" value="改变信号机的锁定状态">
				<input type="button" id="_S_cz_3"    >
				</div></span>
				
				<span id="_S1">S1
				<div id="_S1_cz">  
				<input type="button" id="_S1_cz_1" value="改变信号机的状态">
				<input type="button" id="_S1_cz_2" value="改变信号机的锁定状态">
				<input type="button" id="_S1_cz_3" value="故障模拟">
				</div></span>
				
				<span id="_S2">S2
				<div id="_S2_cz">
				<input type="button" id="_S2_cz_1" value="改变信号机的状态">
				<input type="button" id="_S2_cz_2" value="改变信号机的锁定状态">
				<input type="button" id="_S2_cz_3" value="故障模拟">
				</div></span>
				
				<span id="_info">系统正常运行</span>
				<span id="cd_1">1                                         
				<div id="cd_1_cz">
				<input type="button" id="cd_1_1" value="改变道岔1状态">
				<input type="button" id="cd_1_2" value="故障模拟">
				</div>
				</span>
				
				<span id="cd_2">3
				<div id="cd_2_cz">
				<input type="button" id="cd_2_1" value="改变道岔3状态">
				<input type="button" id="cd_2_2" value="故障模拟">
				</div>
				</span>
				
				<span id="cd_3">4
				<div id="cd_3_cz">
				<input type="button" id="cd_3_1" value="改变道岔4状态">
				<input type="button" id="cd_3_2" value="故障模拟">
				</div>
				</span>
				
				<span id="cd_4">2
				<div id="cd_4_cz">
				<input type="button" id="cd_4_1" value="改变道岔2状态">
				<input type="button" id="cd_4_2" value="故障模拟">
				</div>
				</span>
				
				<div id="drop_1">
				<input type="button" id="px_btn" value="排选进路">
				<div id="drop_content">
				
											<input type="button" id="X-X1_jc" value="选排接车进路X-X1">
											<input type="button" id="X-X2_jc" value="选排接车进路X-X2">
											<input type="button" id="S-S1_jc" value="选排接车进路S-S1">
											<input type="button" id="S-S2_jc" value="选排接车进路S-S2">
											<input type="button" id="X1_fc" value="选排发车进路X1">
											<input type="button" id="X2_fc" value="选排发车进路X2">
											<input type="button" id="S1_fc" value="选排发车进路S1">
											<input type="button" id="S2_fc" value="选排发车进路S2">
											<input type="button" id="X_tg" value="选排通过进路X">
											<input type="button" id="S_tg" value="选排通过进路S">
										</div>
				</div>
				<div id="drop_2">
				<input type="button" id="qx_btn" value="取消进路">
				<div id="drop_content2">
					
											<input type="button" id="X-X1_qx" value="取消接车进路X-X1">
											<input type="button" id="X-X2_qx" value="取消接车进路X-X2">
											<input type="button" id="S-S1_qx" value="取消接车进路S-S1">
											<input type="button" id="S-S2_qx" value="取消接车进路S-S2">
											<input type="button" id="X1_qx" value="取消发车进路X1">
											<input type="button" id="X2_qx" value="取消发车进路X2">
											<input type="button" id="S1_qx" value="取消发车进路S1">
											<input type="button" id="S2_qx" value="取消发车进路S2">
											<input type="button" id="X_qx" value="取消通过进路X">
											<input type="button" id="S_qx" value="取消通过进路S">
										</div>
				</div>
				
				<div id="drop_3">
				<input type="button" id="cz_btn" value="操作轨道电路">
				<div id="drop_content3">				
					<input type="button" id="X-1_lk" value="X-1">
					<input type="button" id="1-3_lk" value="1-3">
					<input type="button" id="3-S1_lk" value="3-S1">
					<input type="button" id="S1-X1_lk" value="S1-X1">
					<input type="button" id="X1-4_lk" value="X1-4">
					<input type="button" id="4-2_lk" value="4-2">
					<input type="button" id="2-S_lk" value="2-S">
					<input type="button" id="1-X2_lk" value="1-X2">
					<input type="button" id="X2-4_lk" value="X2-4">
					<input type="button" id="3-S2_lk" value="3-S2">
					<input type="button" id="S2-2_lk" value="S2-2">
				</div>
				</div>
				
			</div>
			<div id="sss">
				<table id="btns" width="1200px" border="5px solid white;">
					<tr>
						<td colspan="4">
							<textarea id="ta" style="width: 100%; height: 80px; background-color: rgb(50,50,50);color: white; font-size: 18px;"></textarea>
						</td>
					</tr>
					<tr>
						<td id="gx" onselectstart=" return false">更新系统状态</td>
						<td width="300px" id="hy" onselectstart=" return false" >全部还原</td>
						<td id="zgzmn" onselectstart=" return false">总故障模拟</td>
						<td id="sygzhf" onselectstart=" return false">所有故障恢复</td>
					</tr>
					<tr>
						<td id="cp2" onselectstart=" return false">紧急灾害报警</td>
						<td id="cp3" onselectstart=" return false">系统信号丢失模拟</td>
						<td onselectstart=" return false" id="show_log">查看操作记录
						<div id="drop_log"><textarea id="log"></textarea></div>
						</td>
						<td onselectstart=" return false" id="del_log">删除操作记录</td>
						
					</tr>
				</table>
			</div>
		</div>
		<p style="color: white;" id="test">a</p>
		
		<?php
		require("php_file/init.php");
		?>
		<script>
			
			var infos;
			var arrs=new Array;
			for(let i=0;i<21;i++){
				arrs[i]=new Array;
			}
			
			//X-X1  接车
			var X_X1_jc=document.getElementById("X-X1_jc");
			var flag,error;
			var str,arr;
			var flag_X_X1=false;
			X_X1_jc.onclick=function(){
				if(flag_X_X1==true){
					ta.value="进路X-X1已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/jc/X-X1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true"){
							  ta.value="选排进路X-X1成功\n";
							  log.value+="选排进路X-X1\n";
							  flag_X_X1=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			//X-X2 接车
			var X_X2_jc=document.getElementById("X-X2_jc");
			var flag,error;
			var str,arr;
			var flag_X_X2=false;
			X_X2_jc.onclick=function(){
				if(flag_X_X2==true){
					va.value="进路X-X2已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/jc/X-X2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true") {
							ta.value="选排进路X-X2成功\n";
							log.value+="选排进路X-X2\n";
							flag_X_X2=true;
						}
						test.innerText=flag;
					}
				}
				init();
			}
			//S-S1 接车
			var S_S1_jc=document.getElementById("S-S1_jc");
			var flag,error;
			var str,arr;
			var flag_S_S1=false;
			S_S1_jc.onclick=function(){
				if(flag_S_S1==true){
					va.value="进路S-S1已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/jc/S-S1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true") {
							ta.value="选排进路S-S1成功\n";
							log.value+="选排进路S-S1\n";
							flag_S_S1=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			//S-S2 接车
			var S_S2_jc=document.getElementById("S-S2_jc");
			var flag,error;
			var str,arr;
			var flag_S_S2=false;
			S_S2_jc.onclick=function(){
				if(flag_S_S2==true){
					va.value="进路S-S2已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/jc/S-S2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true"){
							ta.value="选排进路S-S2成功\n";
							log.value+="选排进路S-S2\n";
							flag_S_S2=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			
			//X1 发车
			var X1_fc=document.getElementById("X1_fc");
			var flag,error;
			var str,arr;
			var flag_X1=false;
			X1_fc.onclick=function(){
				if(flag_X1==true){
					va.value="进路X1已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/fc/X1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="选排进路X1成功\n";
							log.value+="选排进路X1\n";
							flag_X1=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			//X2 发车
			var X2_fc=document.getElementById("X2_fc");
			var flag,error;
			var str,arr;
			var flag_X2=false;
			X2_fc.onclick=function(){
				if(flag_X2==true){
					va.value="进路X2已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/fc/X2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true") {
							ta.value="选排进路X2成功\n";
							log.value+="选排进路X1\n";
							flag_X2=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			//S1 发车
			var S1_fc=document.getElementById("S1_fc");
			var flag,error;
			var str,arr;
			var flag_S1=false;
			S1_fc.onclick=function(){
				if(flag_S1==true){
					va.value="进路S1已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/fc/S1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="选排进路S1成功\n";
							log.value+="选排进路S1\n";
							flag_S1=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			
			//S2 发车
			var S1_fc=document.getElementById("S2_fc");
			var flag,error;
			var str,arr;
			var flag_S2=false;
			S2_fc.onclick=function(){
				if(flag_S2==true){
					va.value="进路S2已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/fc/S2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="选排进路S2成功\n";
							log.value+="选排进路S2\n";
							flag_S2=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			
			//X 通过
			var X_tg=document.getElementById("X_tg");
			var flag,error;
			var str,arr;
			var flag_X=false;
			X_tg.onclick=function(){
				if(flag_X==true){
					va.value="进路X已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/tg/X.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="选排进路X成功\n";
							log.value+="选排进路X\n";
							flag_X=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			//S 通过
			var S_tg=document.getElementById("S_tg");
			var flag,error;
			var str,arr;
			var flag_S=false;
			S_tg.onclick=function(){
				if(flag_S==true){
					va.value="进路S已经建立,不允许重复建立\n";
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/tg/S.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="选排进路S成功\n";
							log.value+="选排进路S\n";
							flag_S=true;
						}
						
						test.innerText=flag;
					}
				}
				init();
			}
			
			//X-X1 取消
			var X_X1_qx=document.getElementById("X-X1_qx");
			var flag,error;
			var str,arr;
			
			X_X1_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_X_X1==false){
					ta.value="进路X-X1尚未建立"
					return;
				}
				
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/X-X1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="false"){
							return;
						}
						if(flag=="true")  {
							ta.value="取消进路X-X1成功\n";
							log.value+="取消进路X-X1\n";
						}
						flag_X_X1=false;
						test.innerText=flag;
					}
				}
				init();
			}
			//X-X2 取消
			var X_X2_qx=document.getElementById("X-X2_qx");
			var flag,error;
			var str,arr;
			X_X2_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_X_X2==false){
					ta.value="进路X-X2尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/X-X2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路X-X2成功\n";
							log.value+="取消进路X-X2\n";
						}
						flag_X_X2=false;
						test.innerText=flag;
					}
				}
				init();
			}
			//S-S1 取消
			var S_S1_qx=document.getElementById("S-S1_qx");
			var flag,error;
			var str,arr;
			S_S1_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_S_S1==false){
					ta.value="进路S-S1尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/S-S1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路S-S1成功\n";
							log.value+="取消进路S-S1\n";
						}
						flag_S_S1=false;
						test.innerText=flag;
					}
				}
				init();
			}
			
			//S-S2 取消
			var S_S2_qx=document.getElementById("S-S2_qx");
			var flag,error;
			var str,arr;
			S_S2_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_S_S2==false){
					ta.value="进路S-S2尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/S-S2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路S-S2成功\n";
							log.value+="取消进路S-S2\n";
						}
						flag_S_S2=false;
						test.innerText=flag;
					}
				}
				init();
			}
			
			//X1 取消
			var X1_qx=document.getElementById("X1_qx");
			var flag,error;
			var str,arr;
			X1_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_X1==false){
					ta.value="进路X-X1尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/X1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路X1成功\n";
							log.value+="取消进路X1\n";
						}
						flag_X1=false;
						test.innerText=flag;
					}
				}
				init();
			}
			//X2 取消
			var X2_qx=document.getElementById("X2_qx");
			var flag,error;
			var str,arr;
			X2_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_X2==false){
					ta.value="进路X-X1尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/X2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路X2成功\n";
							log.value+="取消进路X1\n";
						}
						flag_X2=false;
						test.innerText=flag;
					}
				}
				init();
			}
			
			//S1 取消
			var S1_qx=document.getElementById("S1_qx");
			var flag,error;
			var str,arr;
			S1_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_S1==false){
					ta.value="进路S1尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/S1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路S1成功\n";
							log.value+="取消进路S1\n";
						}
						flag_S1=false;
						test.innerText=flag;
					}
				}
				init();
			}
			
			//S2 取消
			var S2_qx=document.getElementById("S2_qx");
			var flag,error;
			var str,arr;
			S2_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_S2==false){
					ta.value="进路S2尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/S2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路S2成功\n";
							log.value+="取消进路S2\n";
						}
						flag_S2=false;
						test.innerText=flag;
					} 
				}
				init();
			}
			//X 取消
			var X_qx=document.getElementById("X_qx");
			var flag,error;
			var str,arr;
			X_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_X==false){
					ta.value="进路X尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/X.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路X成功\n";
							log.value+="取消进路X\n";
						}
						flag_X=false;
						test.innerText=flag;
					}
				}
				init();
			}
			//S 取消
			var S_qx=document.getElementById("S_qx");
			var flag,error;
			var str,arr;
			S_qx.onclick=function(){
				var passwd=prompt("请输入密码");
				if(passwd!="123"){
					alert("密码错误！");
					return;
				}
				if(flag_S==false){
					ta.value="进路S尚未建立"
					return;
				}
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qx/S.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(error!="")ta.value=error+"\n";
						if(flag=="true")  {
							ta.value="取消进路S成功\n";
							log.value+="取消进路S\n";
						}
						flag_S=false;
						test.innerText=flag;
					}
				}
				init();
			}
			
			
			//_X_cz_1 
			var _X_cz_1=document.getElementById("_X_cz_1");
			var flag;
			var error;
			var str,arr;
			_X_cz_1.onclick=function(){
					var obj = new XMLHttpRequest();
					obj.open("GET","php_file/cz/_X_cz_1.php",true);
					obj.send();
					obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="2"){
							X.src="img/xh_r.jpg";
							ta.value="信号X关闭";
						}
						if(flag=="true"){
							X.src="img/xh_g.jpg";
							ta.value="信号X开启";
						}
						if(error!="") {
							ta.value=error+"\n";			
						}
						test.innerText=flag;
					}
				}	
			}	
			
			//_X_cz_2 锁定
			var _X_cz_2=document.getElementById("_X_cz_2");
			var flag;
			var error;
			var str,arr;
			_X_cz_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X_cz_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							X.style.cssText="border-left:4px solid red;"
							ta.value="信号机X锁定\n";
						}else{
							X.style.cssText="border-left:4px solid #059CEC;"
							ta.value="信号机X解除锁定\n";
						}
						
						test.innerText=flag;
					}
				}
			}
			var _X_cz_3=document.getElementById("_X_cz_3");
			var flag;
			var error;
			var str,arr;
			_X_cz_3.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X_cz_3.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="信号机X故障\n";
						}else{
							ta.value="信号机X解除故障\n";
						}
						test.innerText=flag;
					}
				}	
			}
			
			
			//_X1_cz_1 
			var _X1_cz_1=document.getElementById("_X1_cz_1");
			var flag;
			var error;
			var str,arr;
			_X1_cz_1.onclick=function(){	
			
					var obj = new XMLHttpRequest();
					obj.open("GET","php_file/cz/_X1_cz_1.php",true);
					obj.send();
					obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
					
						if(flag=="2"){
							X1.src="img/xh_r.jpg";
							ta.value="信号X1关闭";
						}
						if(flag=="true"){
							X1.src="img/xh_g.jpg";
							ta.value="信号X1开启";
						}
						
						if(error!="") {
							ta.value=error+"\n";
						}
						test.innerText=flag;
					}
				}		
			}
				
					
			
			//_X1_cz_2 锁定
			var _X1_cz_2=document.getElementById("_X1_cz_2");
			var flag;
			var error;
			var str,arr;
			_X1_cz_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X1_cz_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							X1.style.cssText="border-left:4px solid red;"
							ta.value="信号机X1锁定\n";
						}else{
							X1.style.cssText="border-left:4px solid #059CEC;"
							ta.value="信号机X解除锁定\n";
						}
						test.innerText=flag;
					}
				}
			}
			//_X1_cz_3 锁定
			var _X1_cz_3=document.getElementById("_X1_cz_3");
			var flag;
			var error;
			var str,arr;
			_X1_cz_3.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X1_cz_3.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="信号机X1故障\n";
						}else{
							ta.value="信号机X1解除故障\n";
						}
						test.innerText=flag;
					}
				}	
			}
			
			//_X2_cz_1 
			var _X2_cz_1=document.getElementById("_X2_cz_1");
			var flag;
			var error;
			var str,arr;
			_X2_cz_1.onclick=function(){	
					var obj = new XMLHttpRequest();
					obj.open("GET","php_file/cz/_X2_cz_1.php",true);
					obj.send();
					obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
					
						if(flag=="2"){
							X2.src="img/xh_r.jpg";
							ta.value="信号X2关闭";
						}
						if(flag=="true"){
							X2.src="img/xh_g.jpg";
							ta.value="信号X2开启";
						}
						
						if(error!="") {
							ta.value=error+"\n";
						}
						test.innerText=flag;
					}
				}		
			}
				
					
			
			//_X2_cz_2 锁定
			var _X2_cz_2=document.getElementById("_X2_cz_2");
			var flag;
			var error;
			var str,arr;
			_X2_cz_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X2_cz_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							X2.style.cssText="border-left:4px solid red;"
							ta.value="信号机X2锁定\n";
						}else{
							X2.style.cssText="border-left:4px solid #059CEC;"
							ta.value="信号机X2解除锁定\n";
						}
						test.innerText=flag;
					}
				}
			}
			//_X2_cz_3 
			var _X2_cz_3=document.getElementById("_X2_cz_3");
			var flag;
			var error;
			var str,arr;
			_X2_cz_3.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X2_cz_3.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="信号机X2故障\n";
						}else{
							ta.value="信号机X2解除故障\n";
						}
						test.innerText=flag;
					}
				}	
			}
			
			
			//_S_cz_1 
			var _S_cz_1=document.getElementById("_S_cz_1");
			var flag;
			var error;
			var str,arr;
			_S_cz_1.onclick=function(){
					var obj = new XMLHttpRequest();
					obj.open("GET","php_file/cz/_S_cz_1.php",true);
					obj.send();
					obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="2"){
							S.src="img/xh_r.jpg";
							ta.value="信号S关闭";
						}
						if(flag=="true"){
							S.src="img/xh_g.jpg";
							ta.value="信号S开启";
						}
						if(error!="") {
							ta.value=error+"\n";			
						}
						test.innerText=flag;
					}
				}	
			}
					
			
			//_S_cz_2 锁定
			var _S_cz_2=document.getElementById("_S_cz_2");
			var flag;
			var error;
			var str,arr;
			_S_cz_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_S_cz_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							S.style.cssText="border-right:4px solid red;"
							ta.value="信号机S锁定\n";
						}else{
							S.style.cssText="border-right:4px solid #059CEC;"
							ta.value="信号机S解除锁定\n";
						}
						test.innerText=flag;
					}
				}
			}
			//S 故障
			var _S_cz_3=document.getElementById("_S_cz_3");
			var flag;
			var error;
			var str,arr;
			_S_cz_3.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_S_cz_3.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="信号机S故障\n";
						}else{
							ta.value="信号机S解除故障\n";
						}
						test.innerText=flag;
					}
				}	
			}
			
			//_S1_cz_1 
			var _S1_cz_1=document.getElementById("_S1_cz_1");
			var flag;
			var error;
			var str,arr;
			_S1_cz_1.onclick=function(){
					var obj = new XMLHttpRequest();
					obj.open("GET","php_file/cz/_S1_cz_1.php",true);
					obj.send();
					obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="2"){
							S1.src="img/xh_r.jpg";
							ta.value="信号S1关闭";
						}
						if(flag=="true"){
							S1.src="img/xh_g.jpg";
							ta.value="信号S1开启";
						}
						if(error!="") {
							ta.value=error+"\n";			
						}
						test.innerText=flag;
					}
				}	
			}
					
			
			//_S1_cz_2 
			var _S1_cz_2=document.getElementById("_S1_cz_2");
			var flag;
			var error;
			var str,arr;
			_S1_cz_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_S1_cz_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							S1.style.cssText="border-right:4px solid red;"
							ta.value="信号机S1锁定\n";
						}else{
							S1.style.cssText="border-right:4px solid #059CEC;"
							ta.value="信号机S1解除锁定\n";
						}
						test.innerText=flag;
					}
				}
			}
			//S1_cd_3
			var _S1_cz_3=document.getElementById("_S1_cz_3");
			var flag;
			var error;
			var str,arr;
			_S1_cz_3.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_S1_cz_3.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="信号机S1故障\n";
						}else{
							ta.value="信号机S1解除故障\n";
						}
						test.innerText=flag;
					}
				}	
			}
			
			//_S2_cz_1 
			var _S2_cz_1=document.getElementById("_S2_cz_1");
			var flag;
			var error;
			var str,arr;
			_S2_cz_1.onclick=function(){
					var obj = new XMLHttpRequest();
					obj.open("GET","php_file/cz/_S2_cz_1.php",true);
					obj.send();
					obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="2"){
							S2.src="img/xh_r.jpg";
							ta.value="信号S2关闭";
						}
						if(flag=="true"){
							
							S2.src="img/xh_g.jpg";
							ta.value="信号S2开启";
						}
						if(error!="") {
							ta.value=error+"\n";			
						}
						test.innerText=flag;
					}
				}	
			}
					
			
			//_S2_cz_2 
			var _S2_cz_2=document.getElementById("_S2_cz_2");
			var flag;
			var error;
			var str,arr;
			_S2_cz_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_S2_cz_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							S2.style.cssText="border-right:4px solid red;"
							ta.value="信号机S2锁定\n";
						}else{
							S2.style.cssText="border-right:4px solid #059CEC;"
							ta.value="信号机S2解除锁定\n";
						}
						test.innerText=flag;
					}
				}
			}
			//S2_cd_3
			var _S2_cz_3=document.getElementById("_S2_cz_3");
			var flag;
			var error;
			var str,arr;
			_S2_cz_3.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_S2_cz_3.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="信号机S2故障\n";
						}else{
							ta.value="信号机S2解除故障\n";
						}
						test.innerText=flag;
					}
				}	
			}
			
			//cd_1_1
			var cd_1_1=document.getElementById("cd_1_1");
			var flag;
			var error;
			var str,arr;
			cd_1_1.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/cd_1_1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="岔道1反位成功\n";	
							_cd_1.src="img/cd_f1"
						}
						if(flag=="false"){
							ta.value=error;	
						}
						if(flag=="2"){
							ta.value="岔道1正位成功\n";
							_cd_1.src="img/cd_g"
						}
						test.innerText=flag;
					}
				}	
			}
			//cd_1_2
			var cd_1_2=document.getElementById("cd_1_2");
			var flag;
			var error;
			var str,arr;
			cd_1_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/cd_1_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="岔道1解除故障\n";
							log.value+="岔道1解除故障\n";
							_cd_1.src="img/cd_g"
						}else{
							ta.value="岔道1故障";
							log.value+="岔道1故障\n";
							_cd_1.src="img/cd_g1";
						}
						test.innerText=flag;
					}
				}	
			}
			
			//cd_2_1
			var cd_2_1=document.getElementById("cd_2_1");
			var flag;
			var error;
			var str,arr;
			cd_2_1.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/cd_2_1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="岔道3反位成功\n";	
							_cd_2.src="img/cd_f2"
						}
						if(flag=="false"){
							ta.value=error;	
						}
						if(flag=="2"){
							ta.value="岔道3正位成功\n";
							_cd_2.src="img/cd_g"
						}
						test.innerText=flag;
					}
				}	
			}
			//cd_2_2
			var cd_2_2=document.getElementById("cd_2_2");
			var flag;
			var error;
			var str,arr;
			cd_2_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/cd_2_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="岔道3解除故障\n";
							log.value+="岔道3解除故障\n";
							_cd_2.src="img/cd_g"
						}else{
							ta.value="岔道3故障";
							log.value+="岔道3故障\n";
							_cd_2.src="img/cd_g2";
						}
						test.innerText=flag;
					}
				}	
			}
			
			//cd_3_1
			var cd_3_1=document.getElementById("cd_3_1");
			var flag;
			var error;
			var str,arr;
			cd_3_1.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/cd_3_1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="岔道4反位成功\n";	
							_cd_3.src="img/cd_f3"
						}
						if(flag=="false"){
							ta.value=error;	
						}
						if(flag=="2"){
							ta.value="岔道4正位成功\n";
							_cd_3.src="img/cd_g"
						}
						test.innerText=flag;
					}
				}	
			}
			//cd_3_2
			var cd_2_2=document.getElementById("cd_3_2");
			var flag;
			var error;
			var str,arr;
			cd_3_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/cd_3_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="岔道4解除故障\n";
							log.value+="岔道4解除故障\n";
							_cd_3.src="img/cd_g"
						}else{
							ta.value="岔道4故障";
							log.value+="岔道4故障\n";
							_cd_3.src="img/cd_g3";
						}
						test.innerText=flag;
					}
				}	
			}

			//cd_4_1
			var cd_4_1=document.getElementById("cd_4_1");
			var flag;
			var error;
			var str,arr;
			cd_4_1.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/cd_4_1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="岔道2反位成功\n";	
							_cd_4.src="img/cd_f4"
						}
						if(flag=="false"){
							ta.value=error;	
						}
						if(flag=="2"){
							ta.value="岔道4正位成功\n";
							_cd_4.src="img/cd_g"
						}
						test.innerText=flag;
					}
				}	
			}
			//cd_4_2
			var cd_4_2=document.getElementById("cd_4_2");
			var flag;
			var error;
			var str,arr;
			cd_4_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/cd_4_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="岔道2解除故障\n";
							log.value+="岔道2解除故障\n";
							_cd_4.src="img/cd_g"
						}else{
							ta.value="岔道2故障";
							log.value+="岔道2故障\n";
							_cd_4.src="img/cd_g4";
						}
						test.innerText=flag;
					}
				}	
			}			
			
			
			
			//更新
			var gx=document.getElementById("gx");
			gx.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/fetch.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						infos=((obj.responseText)).split(",");
						var it=0;
						for(let i=0;i<21;i++){
							for(let j=0;j<3;j++){
								arrs[i][j]=infos[it];
								it++;
							}
						}
					}
				}
				init();
				ta.value="执行系统更新操作\n";
			}
			
			//总故障模拟
			var flag;
			var error;
			var str,arr;
			var zgzmn=document.getElementById("zgzmn");
			zgzmn.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/zgzmn.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="总故障模拟成功\n";
							log.value+="总故障模拟\n";
							info.src="img/xh_r.jpg";
							_info.innerText="系统发生故障"
						}else{
							ta.value="总故障模拟失败\n"+error;
						}
						test.innerText=flag;
					}
				}	
			}
			
			//总故障模拟
			var flag;
			var error;
			var str,arr;
			var cp2=document.getElementById("cp2");
			cp2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/zgzmn.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="紧急灾害报警成功\n";
							log.value+="紧急灾害报警\n";
							info.src="img/xh_r.jpg";
							_info.innerText="系统发生故障"
						}else{
							ta.value="紧急灾害报警失败\n"+error;
						}
						test.innerText=flag;
					}
				}	
			}
			//总故障模拟
			var flag;
			var error;
			var str,arr;
			var cp3=document.getElementById("cp3");
			
			cp3.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/zgzmn.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="系统信号丢失模拟成功\n";
							log.value+="系统信号丢失模拟\n";
							info.src="img/xh_r.jpg";
							_info.innerText="系统发生故障"
							
						}else{
							ta.value="系统信号丢失模拟失败\n"+error;
						}
						test.innerText=flag;
					}
				}	
			}
			//所有故障恢复
			var flag;
			var error;
			var str,arr;
			var sygzhf=document.getElementById("sygzhf");
			sygzhf.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/sygzhf.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							ta.value="所有故障恢复成功\n";
							log.value+="所有故障恢复\n";
							info.src="img/xh_g.jpg";
							_info.innerText="系统运行正常"
						}else{
							ta.value="所有故障恢复失败\n"+error;
						}
						test.innerText=flag;
					}
				}	
			}
			
			
			
			
			
			//全部还原
			var hy=document.getElementById("hy");
			hy.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/qbhy.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						info.src="img/xh_g.jpg";
						_info.innerText="系统运行正常"
						ta.value="执行全部还原操作\n";
						flag_S=false;
						flag_S1=false
						flag_S2=false;
						flag_S_S1=false;
						flag_S_S2=false;
						flag_X_X1=false
						flag_X_X2=false;
						flag_X=false;
						flag_X1=false;
						flag_X2=false;
					}
					init();
				}
				init();
			}
			//删除操作记录
			var del_log=document.getElementById("del_log");
			del_log.onclick=function(){
				log.value="";
				ta.value="操作记录删除"
			}
			
			//X-1 锁定
			var _X_1=document.getElementById("X-1_lk");
			var flag;
			var error;
			var str,arr;
			_X_1.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X_1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_175_1.src="img/175r.jpg"
							ta.value="轨道X-1锁定成功";
							log.value+="轨道X-1锁定\n"
						}
						if(flag=="1"){
							_175_1.src="img/175b.jpg"
							ta.value="轨道X-1解除锁定成功";
							log.value+="轨道X-1解除锁定\n"
						}
						if(flag=="2"){
							_175_1.src="img/175w.jpg"
							ta.value="轨道X-1解除锁定成功";
							log.value+="轨道X-1解除锁定\n"
						}
						
						
						test.innerText=flag;
					}
				}
			}
			//1-3 锁定
			var _1_3=document.getElementById("1-3_lk");
			var flag;
			var error;
			var str,arr;
			_1_3.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_1_3.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_100_1.src="img/100r.jpg"
							ta.value="轨道1-3锁定成功";
							log.value+="轨道1-3锁定\n"
						}
						if(flag=="1"){
							_100_1.src="img/100b.jpg"
							ta.value="轨道1-3解除锁定成功";
							log.value+="轨道1-3解除锁定\n"
						}
						if(flag=="2"){
							_100_1.src="img/100w.jpg"
							ta.value="轨道1-3解除锁定成功";
							log.value+="轨道1-3解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			//3-S1 锁定
			var _3_S1=document.getElementById("3-S1_lk");
			var flag;
			var error;
			var str,arr;
			_3_S1.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_3_S1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_175_2.src="img/175r.jpg"
							ta.value="轨道3-S1锁定成功";
							log.value+="轨道3-S1锁定\n"
						}
						if(flag=="1"){
							_175_2.src="img/175b.jpg"
							ta.value="轨道3-S1解除锁定成功";
							log.value+="轨道3-S1解除锁定\n"
						}
						if(flag=="2"){
							_175_2.src="img/175w.jpg"
							ta.value="轨道3-S1解除锁定成功";
							log.value+="轨道3-S1解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			
			//S1-X1 锁定
			var _S1_X1=document.getElementById("S1-X1_lk");
			var flag;
			var error;
			var str,arr;
			_S1_X1.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_S1_X1.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_100_2.src="img/100r.jpg"
							ta.value="轨道S1-X1锁定成功";
							log.value+="轨道S1-X1锁定\n"
						}
						if(flag=="1"){
							_100_2.src="img/100b.jpg"
							ta.value="轨道S1-X1解除锁定成功";
							log.value+="轨道S1-X1解除锁定\n"
						}
						if(flag=="2"){
							_100_2.src="img/100w.jpg"
							ta.value="轨道S1-X1解除锁定成功";
							log.value+="轨道S1-X1解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			//X1-4 锁定
			var _X1_4=document.getElementById("X1-4_lk");
			var flag;
			var error;
			var str,arr;
			_X1_4.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X1_4.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_175_3.src="img/175r.jpg"
							ta.value="轨道X1-4锁定成功";
							log.value+="轨道X1-4锁定\n"
						}
						if(flag=="1"){
							_175_3.src="img/175b.jpg"
							ta.value="轨道X1-4解除锁定成功";
							log.value+="轨道X1-4解除锁定\n"
						}
						if(flag=="2"){
							_175_3.src="img/175w.jpg"
							ta.value="轨道X1-4解除锁定成功";
							log.value+="轨道X1-4解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			//4-2 锁定
			var _4_2=document.getElementById("4-2_lk");
			var flag;
			var error;
			var str,arr;
			_4_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_4_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_100_3.src="img/100r.jpg"
							ta.value="轨道4-2锁定成功";
							log.value+="轨道4-2锁定\n"
						}
						if(flag=="1"){
							_100_3.src="img/100b.jpg"
							ta.value="轨道4-2解除锁定成功";
							log.value+="轨道4-2解除锁定\n"
						}
						if(flag=="2"){
							_100_3.src="img/100w.jpg"
							ta.value="轨道4-2解除锁定成功";
							log.value+="轨道4-2解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			//2-S 锁定
			var _2_S=document.getElementById("2-S_lk");
			var flag;
			var error;
			var str,arr;
			_2_S.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_2_S.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_175_4.src="img/175r.jpg"
							ta.value="轨道2-S锁定成功";
							log.value+="轨道4-2锁定\n"
						}
						if(flag=="1"){
							_175_4.src="img/175b.jpg"
							ta.value="轨道2-S解除锁定成功";
							log.value+="轨道2-S解除锁定\n"
						}
						if(flag=="2"){
							_175_4.src="img/175w.jpg"
							ta.value="轨道2-S解除锁定成功";
							log.value+="轨道2-S解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			//1-X2 锁定
			var _1_X2=document.getElementById("1-X2_lk");
			var flag;
			var error;
			var str,arr;
			_1_X2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_1_X2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_top.src="img/top_r.jpg"
							ta.value="轨道1-X2锁定成功";
							log.value+="轨道1-X2锁定\n"
						}
						if(flag=="1"){
							_top.src="img/top_b.jpg"
							ta.value="轨道1-X2解除锁定成功";
							log.value+="轨道1-X2解除锁定\n"
						}
						if(flag=="2"){
							_top.src="img/top_w.jpg"
							ta.value="轨道1-X2解除锁定成功";
							log.value+="轨道1-X2解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			//X2-4 锁定
			var _X2_4=document.getElementById("X2-4_lk");
			var flag;
			var error;
			var str,arr;
			_X2_4.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_X2_4.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_top2.src="img/top_r2.jpg"
							ta.value="轨道X2-4锁定成功";
							log.value+="轨道X2-4锁定\n"
						}
						if(flag=="1"){
							_top2.src="img/top_b2.jpg"
							ta.value="轨道X2-4解除锁定成功";
							log.value+="轨道1-X2解除锁定\n"
						}
						if(flag=="2"){
							_top2.src="img/top_w2.jpg"
							ta.value="轨道X2-4解除锁定成功";
							log.value+="轨道X2-4解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			//3-S2 锁定
			var _3_S2=document.getElementById("3-S2_lk");
			var flag;
			var error;
			var str,arr;
			_3_S2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_3_S2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_btm2.src="img/btm_r2.jpg"
							ta.value="轨道3-S2锁定成功";
							log.value+="轨道3-S2锁定\n"
						}
						if(flag=="1"){
							_btm2.src="img/btm_b2.jpg"
							ta.value="轨道3-S2解除锁定成功";
							log.value+="轨道3-S2解除锁定\n"
						}
						if(flag=="2"){
							_btm2.src="img/btm_w2.jpg"
							ta.value="轨道3-S2解除锁定成功";
							log.value+="轨道3-S2解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			//S2-2 锁定
			var _S2_2=document.getElementById("S2-2_lk");
			var flag;
			var error;
			var str,arr;
			_S2_2.onclick=function(){
				var obj = new XMLHttpRequest();
				obj.open("GET","php_file/cz/_S2_2.php",true);
				obj.send();
				obj.onreadystatechange=function(){
					if(obj.readyState==4 && obj.status==200){
						str=unescape((obj.responseText));
						arr=str.split(",");
						flag=arr[0];
						error=arr[1];
						if(flag=="true"){
							_btm.src="img/btm_r.jpg"
							ta.value="轨道S2-2锁定成功";
							log.value+="轨道S2-2锁定\n"
						}
						if(flag=="1"){
							_btm.src="img/btm_b.jpg"
							ta.value="轨道S2-2解除锁定成功";
							log.value+="轨道S2-2解除锁定\n"
						}
						if(flag=="2"){
							_btm.src="img/btm_w.jpg"
							ta.value="轨道S2-2解除锁定成功";
							log.value+="轨道S2-2解除锁定\n"
						}			
						test.innerText=flag;
					}
				}
			}
			
			<?php
			
			?>
		</script>
		
		
	</body>
</html>
