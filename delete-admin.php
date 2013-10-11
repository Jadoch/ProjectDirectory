<?php
include("conx.php");
$val=$_GET['whatever'];
$sql2="DELETE FROM Admins WHERE ID='$val'";
echo $sql2;
$mydata2 = mysql_query($sql2,$accounts) ; 
header ("Location: addadmin.php");
 ?>
