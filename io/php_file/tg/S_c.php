<?php

//X
$sql="update tb set so='0' where name='X'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='X'";
$rs=mysqli_query($link, $sql);

//1
$sql="update tb set so='0' where name='1'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='1'";
$rs=mysqli_query($link, $sql);

//3
$sql="update tb set so='0' where name='3'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='3'";
$rs=mysqli_query($link, $sql);

//S1
$sql="update tb set so='1' where name='S1'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='S1'";
$rs=mysqli_query($link, $sql);

//X1
$sql="update tb set so='0' where name='X1'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='X1'";
$rs=mysqli_query($link, $sql);

//4
$sql="update tb set so='0' where name='4'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='4'";
$rs=mysqli_query($link, $sql);

//2
$sql="update tb set so='0' where name='2'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='2'";
$rs=mysqli_query($link, $sql);

//S
$sql="update tb set so='1' where name='S'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='S'";
$rs=mysqli_query($link, $sql);

//X-1
$sql="update tb set so='1' where name='X-1'";
$rs=mysqli_query($link, $sql);

//1-3
$sql="update tb set so='1' where name='1-3'";
$rs=mysqli_query($link, $sql);

//3-S1
$sql="update tb set so='1' where name='3-S1'";
$rs=mysqli_query($link, $sql);

//S1-X1
$sql="update tb set so='1' where name='S1-X1'";
$rs=mysqli_query($link, $sql);

//X1-4
$sql="update tb set so='1' where name='X1-4'";
$rs=mysqli_query($link, $sql);

//4-2
$sql="update tb set so='1' where name='4-2'";
$rs=mysqli_query($link, $sql);

//2-S
$sql="update tb set so='1' where name='2-S'";
$rs=mysqli_query($link, $sql);




?>