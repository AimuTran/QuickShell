<?php
require("config.php");
$mysqli = new mysqli($dbhost,$username,$password,$dbname);
if(mysqli_connect_error())
{
	printf("cant connect to the database��%s\n",mysqli_connect_error());
	exit();
}
?>