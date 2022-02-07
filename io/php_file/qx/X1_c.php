<?php

//S
$sql="update tb set so='0' where name='S'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='S'";
$rs=mysqli_query($link, $sql);

//X1
$sql="update tb set so='0' where name='X1'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='X1'";
$rs=mysqli_query($link, $sql);

//2
$sql="update tb set so='0' where name='2'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='2'";
$rs=mysqli_query($link, $sql);

//4
$sql="update tb set so='0' where name='4'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='0' where name='4'";
$rs=mysqli_query($link, $sql);

//X1-4
$sql="update tb set so='0' where name='X1-4'";
$rs=mysqli_query($link, $sql);

//4-2
$sql="update tb set so='0' where name='4-2'";
$rs=mysqli_query($link, $sql);

//2-S
$sql="update tb set so='0' where name='2-S'";
$rs=mysqli_query($link, $sql);

?>