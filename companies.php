<html>
<head>
<style>
a:link {color:white;}    
a:visited {color:white;} 

</style>
<link rel="stylesheet" type="text/css" href="adminstyle.css">
</head>

<body background="adminbg.jpg">
<a href="admin-home.php" >Admin Home</a></br></br>
<p align=center>This page purpose is to select the companies</br> that i want them to be shown on my website 
by checking on the checkbox and updating.</br> 
The companies showns are the one with 'yes' in the column submit </p>
<fieldset>
<legend >Industries</legend>
<?php 
include('conx.php');

//
if(isset($_POST['update'])){
if(isset($_POST[show]) && $_POST[show]=='yes'){

$UpdateInd = "UPDATE Industry SET Submit='$_POST[show]' WHERE Comp_id='$_POST[hidden]'";
mysql_query($UpdateInd,$accounts);
}
}
//
$query_ind="SELECT * FROM Industry ";
$inddata = mysql_query($query_ind,$accounts);
echo "<table border=1><tr>
<th>Company Name</th>
<th>Owner</th>
<th>Authorized to Sign</th>
<th>CR</th>
<th>Activity</th>
<th>Company Type</th>
<th>State</th>
<th>District</th>
<th>City</th>
<th>Street</th>
<th>Building</th>
<th>Telephone</th>
<th>Fax</th>
<th>POBOX</th>
<th>Website</th>
<th>Email</th>
<th>Show</th>";
while($rec=mysql_fetch_array($inddata)){
echo "<form action=companies.php method=post>";
echo "<tr>";
echo "<td>".$rec['CompName']."</td>";
echo "<td>".$rec['Owner']."</td>";
echo "<td>".$rec['AuthSign']."</td>";
echo "<td>".$rec['CR']."</td>";
echo "<td>".$rec['Activity']."</td>";
echo "<td>".$rec['CompanyType']."</td>";
echo "<td>".$rec['State']."</td>";
echo "<td>".$rec['District']."</td>";
echo "<td>".$rec['City']."</td>";
echo "<td>".$rec['Street']."</td>";
echo "<td>".$rec['Building']."</td>";
echo "<td>".$rec['Telephone']."</td>";
echo "<td>".$rec['Fax']."</td>";
echo "<td>".$rec['POBOX']."</td>";
echo "<td>".$rec['Website']."</td>";
echo "<td>".$rec['Email']."</td>";
echo "<td>".$rec['Submit']."</td>";
echo "<td>"."<input type=checkbox name=show value='yes'>"."</td>";
echo "<td>"."<input type=hidden name=hidden value='$rec[Comp_id]'>"."</td>";
echo "<td>"."<input type=submit name=update value ='update'>"."</td>";
echo "</form>";

}
echo "</table>";
mysql_close($accounts);
?>
</fieldset>



<fieldset>
<legend>Banks</legend>
<?php 
include('conx.php');

//
if(isset($_POST['update2'])){
if(isset($_POST[show2]) && $_POST[show2]=='yes'){

$UpdateInd = "UPDATE Banks SET Submit='$_POST[show2]' WHERE Bank_id='$_POST[hidden2]'";
mysql_query($UpdateInd,$accounts);
}
}
//
$query_bank="SELECT * FROM Banks ";
$bankdata = mysql_query($query_bank,$accounts);
echo "<table border=1><tr>
<th>Bank Name</th>
<th>CEO</th>
<th>CR</th>
<th>Capital</th>
<th>Date Founded</th>
<th>State</th>
<th>District</th>
<th>City</th>
<th>Street</th>
<th>Building</th>
<th>Telephone</th>
<th>Fax</th>
<th>POBOX</th>
<th>Website</th>
<th>Email</th>
<th>Show</th>";
while($rec=mysql_fetch_array($bankdata)){
echo "<form action=companies.php method=post>";
echo "<tr>";
echo "<td>".$rec['BankName']."</td>";
echo "<td>".$rec['CEO']."</td>";
echo "<td>".$rec['CR']."</td>";
echo "<td>".$rec['Capital']."</td>";
echo "<td>".$rec['DateFounded']."</td>";
echo "<td>".$rec['State']."</td>";
echo "<td>".$rec['District']."</td>";
echo "<td>".$rec['City']."</td>";
echo "<td>".$rec['Street']."</td>";
echo "<td>".$rec['Building']."</td>";
echo "<td>".$rec['Telephone']."</td>";
echo "<td>".$rec['Fax']."</td>";
echo "<td>".$rec['POBOX']."</td>";
echo "<td>".$rec['Website']."</td>";
echo "<td>".$rec['Email']."</td>";
echo "<td>".$rec['Submit']."</td>";
echo "<td>"."<input type=checkbox name=show2 value='yes'>"."</td>";
echo "<td>"."<input type=hidden name=hidden2 value='$rec[Bank_id]'>"."</td>";
echo "<td>"."<input type=submit name=update2 value ='update'>"."</td>";
echo "</form>";

}
echo "</table>";
mysql_close($accounts);
?>
</fieldset>

<fieldset>
<legend>Insurance Companies</legend>
<?php 
include('conx.php');

//
if(isset($_POST['update'])){
if(isset($_POST[show]) && $_POST[show]=='yes'){

$UpdateIns = "UPDATE Insurance SET Submit='$_POST[show]' WHERE Ins_id='$_POST[hidden]'";
mysql_query($UpdateIns,$accounts);
}
}
//
$query_ins="SELECT * FROM Insurance ";
$insdata = mysql_query($query_ins,$accounts);
echo "<table border=1><tr>
<th>Insurance Company Name</th>
<th>CEO></th>
<th>CR</th>
<th>Capital</th>
<th>State</th>
<th>District</th>
<th>City</th>
<th>Street</th>
<th>Building</th>
<th>Telephone</th>
<th>Fax</th>
<th>POBOX</th>
<th>Website</th>
<th>Email</th>
<th>Show</th>";
while($rec=mysql_fetch_array($insdata)){
echo "<form action=companies.php method=post>";
echo "<tr>";
echo "<td>".$rec['InsuranceName']."</td>";
echo "<td>".$rec['CEO']."</td>";
echo "<td>".$rec['CR']."</td>";
echo "<td>".$rec['Capital']."</td>";
echo "<td>".$rec['DateFounded']."</td>";
echo "<td>".$rec['State']."</td>";
echo "<td>".$rec['District']."</td>";
echo "<td>".$rec['City']."</td>";
echo "<td>".$rec['Street']."</td>";
echo "<td>".$rec['Building']."</td>";
echo "<td>".$rec['Telephone']."</td>";
echo "<td>".$rec['Fax']."</td>";
echo "<td>".$rec['POBOX']."</td>";
echo "<td>".$rec['Website']."</td>";
echo "<td>".$rec['Email']."</td>";
echo "<td>".$rec['Submit']."</td>";
echo "<td>"."<input type=checkbox name=show value='yes'>"."</td>";
echo "<td>"."<input type=hidden name=hidden value='$rec[Ins_id]'>"."</td>";
echo "<td>"."<input type=submit name=update value ='update'>"."</td>";
echo "</form>";

}
echo "</table>";
mysql_close($accounts);
?>
</fieldset>

<fieldset>
<legend>Importers</legend>
<?php 
include('conx.php');

//
if(isset($_POST['update'])){
if(isset($_POST[show]) && $_POST[show]=='yes'){

$UpdateImp = "UPDATE Importers SET Submit='$_POST[show]' WHERE Imp_id='$_POST[hidden]'";
mysql_query($UpdateImp,$accounts);
}
}
//
$query_imp="SELECT * FROM Importers ";
$impdata = mysql_query($query_imp,$accounts);
echo "<table border=1><tr>
<th>Importer Name</th>
<th>Owner</th>
<th>CR</th>
<th>Activity</th>
<th>State</th>
<th>District</th>
<th>City</th>
<th>Street</th>
<th>Building</th>
<th>Telephone</th>
<th>Fax</th>
<th>POBOX</th>
<th>Website</th>
<th>Email</th>
<th>Show</th>";
while($rec=mysql_fetch_array($impdata)){
echo "<form action=companies.php method=post>";
echo "<tr>";
echo "<td>".$rec['ImpName']."</td>";
echo "<td>".$rec['Owner']."</td>";
echo "<td>".$rec['CR']."</td>";
echo "<td>".$rec['Activity']."</td>";
echo "<td>".$rec['State']."</td>";
echo "<td>".$rec['District']."</td>";
echo "<td>".$rec['City']."</td>";
echo "<td>".$rec['Street']."</td>";
echo "<td>".$rec['Building']."</td>";
echo "<td>".$rec['Telephone']."</td>";
echo "<td>".$rec['Fax']."</td>";
echo "<td>".$rec['POBOX']."</td>";
echo "<td>".$rec['Website']."</td>";
echo "<td>".$rec['Email']."</td>";
echo "<td>".$rec['Submit']."</td>";
echo "<td>"."<input type=checkbox name=show value='yes'>"."</td>";
echo "<td>"."<input type=hidden name=hidden value='$rec[Imp_id]'>"."</td>";
echo "<td>"."<input type=submit name=update value ='update'>"."</td>";
echo "</form>";

}
echo "</table>";
mysql_close($accounts);
?>
</fieldset>

</body>



</html>

