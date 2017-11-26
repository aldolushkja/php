<?php 

//Connect to MySQL
$connection = mysqli_connect('shareddb1e.hosting.stackcp.net', '3232b0b7','g/AouBkXTGwK','messageapp');

//Test connection

if(mysqli_connect_errno()){
	echo 'DB Connection error: '.mysqli_connect_error();
}