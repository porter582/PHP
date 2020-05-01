<?php
	$userName = $_POST["userName"]; 
	$password = $_POST["password"];
	$salt = "";
	if($userName == "" or $password == "")
    {
        include 'CreateAccountHTML.html';
    }
	$dbh = new PDO("mysql:host=icarus.cs.weber.edu;dbname=W01258771", 'W01258771', 'Portercs!');

	$sql = $dbh->prepare("SELECT * FROM Users WHERE UserName =  :name;");
	$sql->bindParam(":name", $userName);
	$result = $sql->execute();

	if($sql->rowCount() == 0)
	{
		for($i=0; $i<32; $i++)
		{
			$randomNum=rand(10,99);
			$salt=$salt.$randomNum;
		}
		$password=$password . $salt;
		$password=hash('sha256', $password);
		$sql = $dbh->prepare("INSERT INTO Users(ID, UserName, Password, Salt) VALUES (NULL, :name , :password , :salt);");
		$sql->bindParam(":name", $userName);
		$sql->bindParam(":password", $password);
		$sql->bindParam(":salt", $salt);

		if ($sql->execute()) {
			include 'MainFinalProject.php';
		} else {
			echo "Error Inserting ";
		}
	}
	else
	{
		echo "Username is already taken";
	}