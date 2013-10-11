
<html>
<head>
<style>
a:link {color:white;}    
a:visited {color:white;}  

</style>
<link rel="stylesheet" type="text/css" href="adminstyle.css">

<?php 
if(isset($_POST['submitted'])){

include('conx.php');

$user = $_POST['User'];
$pass = $_POST['Pass'];

$sqlinsert = " INSERT INTO Admins (User,Pass) VALUES ('$user','$pass')";
	
if(!mysql_query($sqlinsert,$accounts)){die(mysql_error());}

mysql_close($accounts);
}
?></head>
<body background="adminbg.jpg" >
<a href="admin-home.php" >Admin Home</a></br>
<h1>Admin</h1>
<form method="post" action="addadmin.php" >
<input type="hidden" name="submitted" value="true" />
<fieldset>
<legend>Add Admin</legend>
<table>
<tr><label><td>User:</td><td><input type="text" name="User" /></td> </label></tr>
<tr><label><td>Password:</td><td><input type="text" name="Pass" /> </td></label></tr>
</table></fieldset>
<fieldset>
<legend>Admins</legend>
<?php
include('conx.php');

if(isset($_POST['update'])){
$Update = "UPDATE admins SET Pass='$_POST[pass2]' WHERE Name='$_POST[hidden1]'";
mysql_query($Update,$accounts);
};

$sql1 = "SELECT * FROM Admins";
$mydata1 = mysql_query($sql1,$accounts);
echo "<table border =1 >
<tr>

<th> User </th> 
<th> Pass </th>
</tr>";
while ($record = mysql_fetch_array($mydata1)){
$val;
echo "<form method='post' action='addadmin.php'	>";
echo "<tr>";
echo "<td>".$record['User']."</td>";
echo "<td>".$record["Pass"]."</td>";
echo "<td><a href=\"delete-admin.php?whatever=".$record['ID']."\" >Delete</a></td>";
echo "</tr>";
echo "</form>";
}

echo "</table>";

mysql_close($accounts);
?>
</table></fieldset>


<br />
<input type="submit" value="Add Company" />	

</form>

</body>
<!--  -->
</html> 

