<?php

//S
$sql="update tb set so='1' where name='S'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='S'";
$rs=mysqli_query($link, $sql);

//2
$sql="update tb set so='1' where name='2'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='2'";
$rs=mysqli_query($link, $sql);


//S2-2
$sql="update tb set so='1' where name='S2-2'";
$rs=mysqli_query($link, $sql);


//2-S
$sql="update tb set so='1' where name='2-S'";
$rs=mysqli_query($link, $sql);

?>