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
$sql2="SELECT * FROM Banks WHERE Bank_id=$val";
$bankdetails = mysql_query($sql2,$accounts);
echo "<table border=0 style='background-color:#E6E6E6'>";

while ($bankrecord = mysql_fetch_array($bankdetails)){
$val;

echo "<tr><td>Bank Name:</td><td>".$bankrecord['BankName']."</td></tr>";
echo "<tr><td>CEO:</td><td>".$bankrecord["CEO"]."</td></tr>";
echo "<tr><td>Capital:</td><td>".$bankrecord['Capital']."</td></tr>";
echo "<tr><td>Date Founded:</td><td>".$bankrecord['DateFounded']."</td></tr>";
echo "<tr><td>Adress:</td><td>".$bankrecord['City'].','.$bankrecord['Street'].','.$bankrecord['Building']."</td></tr>";
echo "<tr><td>Telephone:</td><td>".$bankrecord["Telephone"]."</td></tr>";
echo "<tr><td>Fax:</td><td>".$bankrecord['Fax']."</td></tr>";
echo "<tr><td>PO Box:</td><td>".$bankrecord['POBOX']."</td></tr>";
echo "<tr><td>Website:</td><td>".$bankrecord['web']."</td></tr>";
echo "<tr><td>Email:</td><td>".$bankrecord['email']."</td></tr>";

}

echo "</table>";



 ?>
</body></html>
