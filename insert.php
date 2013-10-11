<?php $username="root";
$password="jad123";$database="test";
$field1name=$_POST['Value1'];
$field2name=$_POST['Value2'];
$field3name=$_POST['Value3'];
$field4name=$_POST['Value4'];
$field5name=$_POST['Value5'];
mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO tablename (1,2,3,4,5) VALUES('$field1name','$field2name',
'$field3name','$field4name','$field5name')";
mysql_query($query) or die('1');
mysql_close();
?>
