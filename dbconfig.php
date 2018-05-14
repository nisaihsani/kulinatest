<?php

function dbconnect()
{
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password, "kulinatest");
	return $conn;
}


?>
