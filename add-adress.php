<html>
<head>
<?php 
if(isset($_POST['submitted'])){

include('conx.php');

$user = $_POST['User'];
$pass = $_POST['Pass'];

$sqlinsert = " INSERT INTO  (User,Pass) VALUES ('$user','$pass')";
	
if(!mysql_query($sqlinsert,$accounts)){die(mysql_error());}


}
?></head>
<body>
<h1>Adress</h1>
<form method="post" action="addadmin.php" >
<input type="hidden" name="submitted" value="true" />
<fieldset>
<legend>Add Mohafaza</legend>
<table>
<tr><label><td>Name:</td><td><input type="text" name="User" /></td> </label></tr>
</table></fieldset>
<fieldset>
<legend>Kazaa</legend>
<table>
<input type="select" name="moh" />

<?php


?>
</table></fieldset>
