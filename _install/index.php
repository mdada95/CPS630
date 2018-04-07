<?php
	$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db="group49DB"; 
	try {
		$conn = new PDO("mysql:host=$host", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE IF NOT EXISTS art_storeDB";
		$conn->exec($sql);
		$sql = "use art_storeDB";
		$conn->exec($sql);
		$sql = "CREATE TABLE IF NOT EXISTS ARTISTS (
		            ID int(11) AUTO_INCREMENT PRIMARY KEY,
		            artistname varchar(30) NOT NULL)";
		$conn->exec($sql);
		echo "DB created successfully";

	}catch (PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
?>