<?php
/**
* Connect.php - This program connects to the parking app's database.
* @author Jonathan Winters
* @date 13 November 2016
* @edit by Hailey Crouse 11/29/16
* @version 2.0
**/

	$servername = "localhost";
	$username = "parkingApp";
	$password = "CCUpark1";
	$dbname = "parkingAppDB";
	
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully <br>"; 
		}
	catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		include '_footer.php';
		exit();
		}
	
?>