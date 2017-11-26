<?php 

//Variables for connecting to your database.
//These variable values come from your hosting account.
$hostname = "shareddb1e.hosting.stackcp.net";
$username = "aldolushkja";
$dbname = "messageapp-3232b0b7";

//Connect to MySQL
$connection = mysqli_connect($hostname, $username,'123456db',$dbname);

//Test connection

if(mysqli_connect_errno()){
	echo 'DB Connection error: '.mysqli_connect_error();
}
