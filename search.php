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
<tr>
<td align=center><?php 

if(isset($_GET['SearchF'])&&isset($_GET['Search']) ){

include('conx.php');
if($_GET['List']=='Industry'){
$name=$_GET['SearchF'];

$getdata="SELECT * FROM Industry  where CompName LIKE '%$name%'  ";
$data=mysql_query($getdata,$accounts);
echo "<table border=1><tr>
<th>Company Name</th>
<th>District</th>
<th>City</th>
<th>Telephone</th>
<th>Email</th>
";
while($rec=mysql_fetch_array($data)){
echo "<form method='post' action='list_ind.php'	>";
echo "<tr>";
echo "<td>".$rec['CompName']."</td>";
echo "<td>".$rec["District"]."</td>";
echo "<td>".$rec['City']."</td>";
echo "<td>".$rec['Telephone']."</td>";
echo "<td>".$rec['Email']."</td>";
echo "<td><a href=\"ind-details.php?whatever=".$rec['Comp_id']."\" >Details</a></td>";
echo "</tr>";
echo "</form>";} 
echo "</table>";
}
//
if($_GET['List']=='Banks'){
$name=$_GET['SearchF'];

$getdata="SELECT * FROM Banks  where BankName LIKE '%$name%'  ";
$data=mysql_query($getdata,$accounts);
echo "<table border=1><tr>
<th>Company Name</th>
<th>District</th>
<th>City</th>
<th>Telephone</th>
<th>Email</th>
";
while($rec=mysql_fetch_array($data)){
echo "<form method='post' action='list_ind.php'	>";
echo "<tr>";
echo "<td>".$rec['BankName']."</td>";
echo "<td>".$rec["District"]."</td>";
echo "<td>".$rec['City']."</td>";
echo "<td>".$rec['Telephone']."</td>";
echo "<td>".$rec['Email']."</td>";
echo "<td><a href=\"bank-details.php?whatever=".$rec['Bank_id']."\" >Details</a></td>";
echo "</tr>";
echo "</form>";} 
echo "</table>";
}
//
if($_GET['List']=='Insurance'){
$name=$_GET['SearchF'];

$getdata="SELECT * FROM Insurance  where InsuranceName LIKE '%$name%'  ";
$data=mysql_query($getdata,$accounts);
echo "<table border=1><tr>
<th>Company Name</th>
<th>District</th>
<th>City</th>
<th>Telephone</th>
<th>Email</th>
";
while($rec=mysql_fetch_array($data)){
echo "<form method='post' action='list_ind.php'	>";
echo "<tr>";
echo "<td>".$rec['InsuranceName']."</td>";
echo "<td>".$rec["District"]."</td>";
echo "<td>".$rec['City']."</td>";
echo "<td>".$rec['Telephone']."</td>";
echo "<td>".$rec['Email']."</td>";
echo "<td><a href=\"ins-details.php?whatever=".$rec['Ins_id']."\" >Details</a></td>";
echo "</tr>";
echo "</form>";} 
echo "</table>";
}

//
if($_GET['List']=='Importers'){
$name=$_GET['SearchF'];

$getdata="SELECT * FROM Importers where CompName LIKE '%$name%'  ";
$data=mysql_query($getdata,$accounts);
echo "<table border=1><tr>
<th>Company Name</th>
<th>District</th>
<th>City</th>
<th>Telephone</th>
<th>Email</th>
";
while($rec=mysql_fetch_array($data)){
echo "<form method='post' action='list_ind.php'	>";
echo "<tr>";
echo "<td>".$rec['ImpName']."</td>";
echo "<td>".$rec["District"]."</td>";
echo "<td>".$rec['City']."</td>";
echo "<td>".$rec['Telephone']."</td>";
echo "<td>".$rec['Email']."</td>";
echo "<td><a href=\"imp-details.php?whatever=".$rec['Imp_id']."\" >Details</a></td>";
echo "</tr>";
echo "</form>";} 
echo "</table>";
}
}
 ?>

</td>
</tr>

</table>

</body>
</html>
