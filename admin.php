<html>
<head><title> Sign in </title></head>
<body background="adminbg.jpg">
<h1 align=center style="color:#2E2E2E"> Lebanese Directory </h1>
<table align=center style="background-color:black">
<form method="post">
<tr><td><div style="color:white"> Username:</td></tr> <tr><td><input type=text name="user1"></td></tr>
<tr><td><div style="color:white">Password:</td></tr> <tr><td><input type=password name="pass1"></td></tr>

<tr><td><input type=submit name="signin2" value="Sign in!"></td></tr>
</table>
<?php 

if(isset($_POST['user1']) && isset($_POST['pass1'])) {

$user1=$_POST['user1'];
$pass1=$_POST['pass1'];

include("conx.php");
$query="select * from Admins Where User='$user1' and Pass='$pass1'";
$results=mysql_query($query);
$itemRow=mysql_fetch_array($results);

if(mysql_num_rows($results)!=0){
if(($itemRow["user"]=$user1)&&($itemRow["pass"]=$pass1)){
echo "true";
session_start (); 
$_SESSION['login'] = $user1; 
$_SESSION['pwd'] = $pass1; 
header ('location: admin-home.php');

}}
else {echo "wrong user or pass";}}


?>
</form>
<body>
</html>
