<html>
<head>
<title>
Directory of Lebanese Companies
</title>
</head>
<body background="blue-cells-backgrounds.jpg">

<table border=1 align=center style="background-image:url(background2.jpg)";><tr><td>
<table width=935px align="center" border="0" cellpadding="0" cellspacing="0" class="menu" >
<tbody>
  <tr>
      <form action="search.php" method=get > 
      <td align=center><a href="index.php" style="color:#120000" >Home</a> </td>
      <td> <a href="add.php" style="color: #120000" >Add </a></td>

      <td align="right"	><input name="SearchF" align="right" type="text"  id="Search"  style="height:20px;width:130px;color:#521616;"></td>

      <td align=center>
      <select name="List"  class="txt" style="height:20px;width: 170px;">
	
	<option value="Industry">INDUSTRIAL SECTOR</option>
	<option value="Banks"">BANKS SECTOR</option>
	<option value="Insurance">INSURANCE SECTOR</option>
	<option value="Importers">IMPORTER SECTOR</option>
	
      </select></td>
      <td width=60px><input type="submit" Value="Search" Name="Search"></td>
  </form>
  </tr>
  <tr  > <td height=1 colspan=935px bgcolor=black> ss </td></tr>
  <tr >
    <td align=right > Find Companies :</td> 
    <td 	align=center colspan=735px	 > <a href="list_ind.php">Industrial Companies       |<a href="list_bank.php" >Banks       |<a href="list_ins.php" >Insurance Companies       |<a href="list_imp.php" >Importers</td>
    

  </tr>
  <tr>
  </tr>


   </table>
</td></tr>

<tr><td align=center>

<?php
include('conx.php');

$sqllist = "SELECT * FROM Importers WHERE Submit='yes'";
$implistdata = mysql_query($sqllist,$accounts);
echo "<table border=1><tr>
<th>Importer</th><th>District</th><th>City</th><th>Telephone</th><th>Email</th>
</tr>
";
while ($imprecord = mysql_fetch_array($implistdata)){
$val;
echo "<form method='post' action='list_imp.php'	>";
echo "<tr>";
echo "<td>".$imprecord['ImpName']."</td>";
echo "<td>".$imprecord["District"]."</td>";
echo "<td>".$imprecord['City']."</td>";
echo "<td>".$imprecord['Telephone']."</td>";
echo "<td>".$imprecord['Email']."</td>";
echo "<td><a href=\"imp-details.php?whatever=".$imprecord['Imp_id']."\" >Details</a></td>";
echo "</tr>";
echo "</form>";
}

echo "</table>";

mysql_close($accounts);
?>


</td>
  </tr>

</table>
</body>
</html>

