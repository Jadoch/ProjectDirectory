<html>
<head>
<title>
Directory of Lebanese Companies
</title>
</head>
<body background="searchbg.jpg" >

<?php
include("conx.php");
$val=$_GET['whatever'];
$sql2="SELECT * FROM Insurance WHERE Ins_id=$val";
$insdetails = mysql_query($sql2,$accounts);
echo "<table border=0 style='background-color:#E6E6E6'>";

while ($insrecord
 = mysql_fetch_array($insdetails)){
$val;

echo "<tr><td>Insurance Name:</td><td>".$insrecord['InsuranceName']."</td></tr>";
echo "<tr><td>CEO:</td><td>".$insrecord["Owner"]."</td></tr>";
echo "<tr><td>Capital:</td><td>".$insrecord['Capital']."</td></tr>";
echo "<tr><td>CR:</td><td>".$insrecord['CR']."</td></tr>";
echo "<tr><td>Adress:</td><td>".$insrecord['City'].','.$insrecord['Street'].','.$insrecord['Building']."</td></tr>";
echo "<tr><td>Telephone:</td><td>".$insrecord["Telephone"]."</td></tr>";
echo "<tr><td>Fax:</td><td>".$insrecord['Fax']."</td></tr>";
echo "<tr><td>PO Box:</td><td>".$insrecord['POBOX']."</td></tr>";
echo "<tr><td>Website:</td><td>".$insrecord['web']."</td></tr>";
echo "<tr><td>Email:</td><td>".$insrecord['email']."</td></tr>";

}

echo "</table>";



 ?>
</body></html>
