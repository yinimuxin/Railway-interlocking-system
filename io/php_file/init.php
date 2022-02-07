<?php
	$link=mysqli_connect("localhost","root","root")
	or die("数据库服务器连接失败!<BR>");
	mysqli_select_db($link,"bdm807374282_db")
	or die("数据库选择失败!<BR>");
	mysqli_query($link,"set names utf-8");
	
?>
