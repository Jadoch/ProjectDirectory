
<html>
<head>
<title>
Directory of Lebanese Companies
</title>
<script type="text/javascript">



 var Blank = [''];
var Groups = new Array ('Baalbeck-Hermel:Baalbeck-Hermel','Beirut:Beirut','Beqaa:Beqaa','Mount Lebanon:Mount Lebanon','Nabatieh:Nabatieh','North:North','South:South');
  var g1 = new Array(':Baalbeck',':Hermel');
  var g2 = new Array(':Rashaya',':Western Beqaa',':Zahle');
  var g3 = new Array(':Aley',':Baabda',':Byblos',':Chouf',':Keserwan',':Metn');
  var g4 = new Array(':Bint Jbeil',':Hasbaya',':Marjeyoun',':Nabatieh');
  var g5 = new Array(':Akkar',':Batroun',':Bcharreh',':Koura',':Minieh-Donieh',':Tripoli',':Zgharta');
  var g6 = new Array(':Jezzine',':Saida',':Tyr');
  var g7 = new Array(':Beirut');       
function ListSetUp(level) {
  switch (level) {
   case 'Groups' : Populate('LSBox0',Groups);   Populate('LSBox1', Blank); break;
    case 'Baalbeck-Hermel': Populate('LSBox1', g1); break;
    case 'Beqaa': Populate('LSBox1', g2); break;
    case 'Mount Lebanon': Populate('LSBox1', g3); break;
    case 'Nabatieh': Populate('LSBox1', g4); break;
    case 'North': Populate('LSBox1', g5); break;
    case 'South': Populate('LSBox1', g6); break;
    case 'Beirut': Populate('LSBox1', g7); break;
   default : alert('Invalid entry: '+level); break;  // should never ooccur
  }
}

function Populate(IDS,Items){
  var tmp = [];
  var sel = document.getElementById(IDS);
  sel.options.length=0;
    sel.options[0]=new Option('[SELECT]','',true,true);
  for (var zxc0=0;zxc0<Items.length;zxc0++){
    if (Items[zxc0]){
      tmp = Items[zxc0].split(':');
      sel.options[sel.options.length]=new Option(tmp[1],tmp[0],true,true);
sel.options[zxc0+1].value=tmp[1];
    }
  }

  
  sel.selectedIndex=0;
}



</script>


<?php 
if(isset($_POST['submitted'])){

include('conx.php');

$cname = $_POST['CName'];
$CR = $_POST['CR'];
$CEO = $_POST['CEO'];
$Capital = $_POST['Capital'];
$Date = $_POST['DateFounded'];
$State = $_POST['State'];
$Dist = $_POST['District'];
$City = $_POST['City'];
$Street = $_POST['Street'];
$Build = $_POST['Build'];
$Tel = $_POST['Tel'];
$Fax = $_POST['Fax'];
$POBox = $_POST['POBOX'];
$Web = $_POST['web'];
$Email = $_POST['email'];

$sqlinsert = " INSERT INTO Banks (BankName,CEO,CR,Capital,DateFounded,State,District,City,Street,Building,Telephone,Fax,POBOX,Website,Email) VALUES ('$cname','$CEO','$CR','$Capital','$Date','$State','$Dist','$City','$Street','$Build','$Tel','$Fax','$POBox','$Web','$Email')";
	
if(!mysql_query($sqlinsert,$accounts)){die(mysql_error());}


}
?></head>
<body background="blue-cells-backgrounds.jpg" onload="ListSetUp('Groups')" >
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
<tr><td><table>
<tr> 

<td><a href="add-ind.php" >Add Industrial Company</a></td>
<td><a href="add-bank.php" >Add Bank</a></td>
<td><a href="add-ins.php" >Add Insurance Company</a></td>
<td><a href="add-imp.php" >Add Importer</a></td>

</tr>
</table>
<h1>Bank</h1>
<form method="post" action="add-bank.php" >
<input type="hidden" name="submitted" value="true" />
<fieldset>
<legend>Basic Info</legend>
<table>
<tr><label><td>Bank Name:</td><td><input type="text" name="CName" style="background-color:#F2F5A9" required /></td> </label></tr>
<tr><label><td>CR:</td><td><input type="text" name="CR" /> </td></label></tr>
<tr><label><td>CEO:</td><td><input type="text" name="CEO" style="background-color:#F2F5A9" required/></td> </label></tr>
<tr><label><td>Capital:</td><td><input type="text" name="Capital" style="background-color:#F2F5A9" required/> </td></label></tr>
<tr><label><td>Date Founded:</td><td><input type="text" name="DateFounded" /> </td></label></tr>
</table></fieldset>
<fieldset>
<legend>Main Branch Adress</legend>
<table>
<tr><label><td>State:</td><td><select id="LSBox0" name="State" onchange="ListSetUp(this.value)"></select></td> </label><tr/>
<tr><label><td>District:</td><td><select name="District" id="LSBox1"></select></td></label><tr/>
<tr><label><td>City/Town:</td><td><input type="text" name="City" style="background-color:#F2F5A9" required/> </td></label><tr/>
<tr><label><td>Street:</td><td><input type="text" name="Street" /> </td></label><tr/>
<tr><label><td>Building:</td><td><input type="text" name="Build" /> </td></label><tr/>
</table></fieldset>

<fieldset>
<legend>Main Branch Contact</legend>
<table>
<tr><label><td>Telephone:</td><td><input type="text" name="Tel" style="background-color:#F2F5A9" required/></td> </label><tr/>
<tr><label><td>Fax:</td><td><input type="text" name="Fax" /> </td></label><tr/>
<tr><label><td>P.O. Box :</td><td><input type="text" name="POBOX" /> </td></label><tr/>
<tr><label><td>Website:</td><td><input type="text" name="web" /> </td></label><tr/>
<tr><label><td>Email:</td><td><input type="text" name="email" /> </td></label><tr/>
</table></fieldset>


<br />
<input type="submit" value="Add Company" />	

</form>
</td></tr></table>
</body>

</html> 

