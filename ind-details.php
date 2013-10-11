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
$sql2="SELECT * FROM Industry WHERE Comp_id=$val";
$inddetails = mysql_query($sql2,$accounts);

echo "<table border=0 style='background-color:#E6E6E6' >";

while ($indrecord
 = mysql_fetch_array($inddetails)){
$val;

echo "<tr><td>Company Name:</td><td>".$indrecord['CompName']."</td></tr>";
echo "<tr><td>Owner:</td><td>".$indrecord["Owner"]."</td></tr>";
echo "<tr><td>Activity:</td><td>".$indrecord['Activity']."</td></tr>";
echo "<tr><td>Company Type:</td><td>".$indrecord['CompanyType']."</td></tr>";
echo "<tr><td>Adress:</td><td>".$indrecord['City'].','.$indrecord['Street'].','.$indrecord['Building']."</td></tr>";
echo "<tr><td>Telephone:</td><td>".$indrecord["Telephone"]."</td></tr>";
echo "<tr><td>Fax:</td><td>".$indrecord['Fax']."</td></tr>";
echo "<tr><td>PO Box:</td><td>".$indrecord['POBOX']."</td></tr>";
echo "<tr><td>Website:</td><td>".$indrecord['web']."</td></tr>";
echo "<tr><td>Email:</td><td>".$indrecord['email']."</td></tr>";

}

echo "</table>";



 ?>
</body></html>
