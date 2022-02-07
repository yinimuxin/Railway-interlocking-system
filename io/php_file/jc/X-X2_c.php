<?php

//X
$sql="update tb set so='1' where name='X'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='X'";
$rs=mysqli_query($link, $sql);

//1
$sql="update tb set so='1' where name='1'";
$rs=mysqli_query($link, $sql);

$sql="update tb set lk='1' where name='1'";
$rs=mysqli_query($link, $sql);

//X-1
$sql="update tb set so='1' where name='X-1'";
$rs=mysqli_query($link, $sql);

//1-X2
$sql="update tb set so='1' where name='1-X2'";
$rs=mysqli_query($link, $sql);

?>