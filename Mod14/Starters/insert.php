<?php
$server = "localhost";
$username = "root";
$password = "hott";
$database = "ajax_db";

$name=$_POST['txtName'];
$email=urldecode($_POST['txtEmail']);
$phone=$_POST['txtPhone'];

$con = mysql_connect($server, $username, $password, $database);

 if (!$con) {
 die('Could not connect: ' . mysql_error());
 }
 
mysql_select_db($database, $con);

$query=mysql_query("INSERT INTO customer_info(name,email,phone) VALUES('$name','$email','$phone')");

if($query){
echo "Data for $name inserted successfully!";
}
else{ echo "An error occurred!"; }

mysql_close($con);
?>
 
 
