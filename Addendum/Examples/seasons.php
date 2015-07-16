<?php
$q=$_GET["season"];

$server = "localhost";
$username = "root";
$password = "hott";
$database = "ajax_db";

$con = mysql_connect($server, $username, $password, $database);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db($database, $con);

$sql="SELECT tourName, season FROM tours WHERE season = '".$q."'";

$result = mysql_query($sql) or die (mysql_error());

echo "<ul data-role='listview' id='tourslist' data-inset='true'>";
while($row = mysql_fetch_array($result)){
	echo '<li>'.$row['tourName'].'</li>';
}
echo "</ul>";

mysql_close($con);	
?>