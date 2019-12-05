<?php
		$servername = "localhost";
		$susername = "id11172519_pouser9949";
		$spassword = "HbVGN2koui";
		$dbname = "id11172519_userdb";

	$conn = new mysqli($servername, $susername, $spassword, $dbname);
	
	if($conn->connect_error)
	{
		die("Connection failed");
	}
	
	$sql = "SELECT Word FROM Words ORDER BY RAND() LIMIT 100";
	
	$result = mysqli_query($conn, $sql);

	
	$outputWords = $result->fetch_all(MYSQLI_ASSOC);
	echo json_encode($outputWords);
	
	$conn->close();
	

?>