<?php
require("./init.php");
//X
$sql="update tb set ft='0' where name='X'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='X'";
$rs=mysqli_query($link, $sql);

//X1
$sql="update tb set ft='0' where name='X1'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='X1'";
$rs=mysqli_query($link, $sql);

//X2
$sql="update tb set ft='0' where name='X2'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='X2'";
$rs=mysqli_query($link, $sql);

//S
$sql="update tb set ft='0' where name='S'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='S'";
$rs=mysqli_query($link, $sql);

//S1
$sql="update tb set ft='0' where name='S1'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='S1'";
$rs=mysqli_query($link, $sql);

//S2
$sql="update tb set ft='0' where name='S2'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='S2'";
$rs=mysqli_query($link, $sql);

//1
$sql="update tb set ft='0' where name='1'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='1'";
$rs=mysqli_query($link, $sql);

//2
$sql="update tb set lk='0' where name='2'";
$rs=mysqli_query($link, $sql);
$sql="update tb set ft='0' where name='2'";
$rs=mysqli_query($link, $sql);


//3
$sql="update tb set lk='0' where name='3'";
$rs=mysqli_query($link, $sql);
$sql="update tb set ft='0' where name='3'";
$rs=mysqli_query($link, $sql);


//4
$sql="update tb set lk='0' where name='4'";
$rs=mysqli_query($link, $sql);

$sql="update tb set ft='0' where name='4'";
$rs=mysqli_query($link, $sql);

$flag=true;
$error="";
echo json_encode($flag).",".(($error));
?>