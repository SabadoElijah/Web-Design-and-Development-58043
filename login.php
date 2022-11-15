<?php
require_once 'login.php';

mysql_connect($username,$password,$db,$ss);
//mysql_select_db("login");

/*mysql($username,$password,$db, $ss);
if($conn->connect_error) die ("Fatal error");*/
//get values of username and password from login.php

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//to connect database to server and database

/*mysql_connect("localhost","root","");
mysql_select_db("login");*/

//query the database for the user 

$result = mysql_query("Select *from users where username = '$username' and password = '$password'")
			or die("Failed to query database".mysql_error());
			
			
$row = mysql_fetch_array($result);

if($row['username'] == $username && $row['password'] == $password)
{
	echo "Successfully login";
	
}

else
	echo "Failed to login";


?>