<?php
require("./init.php");

//1
$sql="select * from tb where name='1'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo $item->so.",".$item->lk.",".$item->ft;

//1-3
$sql="select * from tb where name='1-3'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//1-X2
$sql="select * from tb where name='1-X2'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//2
$sql="select * from tb where name='2'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//2-S
$sql="select * from tb where name='2-S'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//3
$sql="select * from tb where name='3'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//3-S1
$sql="select * from tb where name='3-S1'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//3-S2
$sql="select * from tb where name='3-S2'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//4
$sql="select * from tb where name='4'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//4-2
$sql="select * from tb where name='4-2'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//S
$sql="select * from tb where name='S'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//S1
$sql="select * from tb where name='S1'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//S1-X1
$sql="select * from tb where name='S1-X1'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//S2
$sql="select * from tb where name='S2'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//S2-2
$sql="select * from tb where name='S2-2'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//X
$sql="select * from tb where name='X'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//X-1
$sql="select * from tb where name='X-1'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//X1
$sql="select * from tb where name='X1'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//X1-4
$sql="select * from tb where name='X1-4'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//X2
$sql="select * from tb where name='X2'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;

//X2-4
$sql="select * from tb where name='X2-4'";
$rs=mysqli_query($link,$sql);
$item=$rs->fetch_object();
echo ",".$item->so.",".$item->lk.",".$item->ft;
?>