<?php 
$server = "localhost";
$username = "root";
$password = "hott";
$database = "northwind";

$con = mysql_connect($server, $username, $password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($database, $con);

$sql="SELECT CompanyName, ContactName, Phone FROM Suppliers";

$result = mysql_query($sql) or die (mysql_error());

$array = array();
$row = mysql_fetch_row($result);

while($row) {
    $array[] = $row;
    $row = mysql_fetch_row($result);
}
echo json_encode($array);

mysql_close($con);	
?>