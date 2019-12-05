<?php
	$userName = $_POST["userName"]; 
	$password = $_POST["password"];
	$salt = "";
	
	$dbh = new PDO("mysql:host=icarus.cs.weber.edu;dbname=W01258771", 'W01258771', 'Portercs!');
	$servername = "localhost";
	$susername = "W01258771";
	$spassword = "Portercs!";
	$dbname = "W01258771";
	
	$conn = new mysqli($servername, $susername, $spassword, $dbname);
	
	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM Users WHERE UserName = \"" . $userName . "\";";
	$result = $conn->query($sql);
	
	if($result->num_rows == 0)
	{
		for($i=0; $i<32; $i++)
		{
			$randomNum=rand(10,99);
			$salt=$salt.$randomNum;
		}
		
		$password=$password . $salt;
		$password=hash('sha256', $password);
		
		$sql = "INSERT INTO Users(ID, UserName, Password, Salt) VALUES (NULL,\"" . $userName . "\",\"" . $password . "\", \"" . $salt . "\");";
		
		if ($conn->query($sql) == TRUE) {
			echo "Inserted";
		} else {
			echo "Error Inserting " . $conn->error;
		}
	}
	else
	{
		echo "Username is already taken";
	}
	$conn->close();