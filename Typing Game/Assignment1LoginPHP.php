<?php 
	session_start();
	
	$userName = $_POST["userName"]; 
	$password = $_POST["password"];
	
	$_SESSION["userName"] = $userName; //session variables
	$_SESSION["password"] = $password;
	
	$servername = "localhost";
	$susername = "id11172519_pouser9949";
	$spassword = "HbVGN2koui";
	$dbname = "id11172519_userdb";
	
	$conn = new mysqli($servername, $susername, $spassword, $dbname);
	
	if($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT Salt FROM Users WHERE UserName = \"" . $userName . "\";";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$salt = $row['Salt'];
	$password = $password . $salt;
	$password = hash('sha256', $password);
	//echo $password;

	$sql = "DROP TABLE Words";
	$result = $conn->query($sql);

	$sql = "CREATE TABLE Words(ID INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Word varchar(10) NOT NULL)";
	$result = $conn->query($sql);
	
	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'hello')";
	$result = $conn->query($sql);
	
	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'jackelope')";
	$result = $conn->query($sql);
	
	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'primary')";
	$result = $conn->query($sql);
	
	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'secondary')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'school')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'poster')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'icecream')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'milk')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'mushroom')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'noodles')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'strawberry')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'hair')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'third')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'forth')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fifth')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'teacher')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'save')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'the')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'file')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'directory')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'linux')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'windows')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'apple')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tower')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'game')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'borderland')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'halo')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'angel')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'angel')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'derivative')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'integral')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'forum')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'yellow')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'blue')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'green')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'computer')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'functional')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'assignment')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'chemistry')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'purple')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'wild')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cat')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'weber')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'state')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'elevator')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'stairs')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'escalator')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'create')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lamp')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'block')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cube')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'triangle')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'login')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pyramid')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'minecraft')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pizza')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sandwich')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'burger')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cow')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tomato')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lettuce')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sushi')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'mustard')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fish')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'water')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'alfredo')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'marianara')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'garbage')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'landfill')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'global')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'warming')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'offense')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'defense')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'basket')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'ball')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'soccer')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'baseball')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tennis')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sports')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'football')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'spite')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'queen')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'know')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'waterfall')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'assertive')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dynamic')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sour')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dragon')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cause')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'spring')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'carve')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'password')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'craftsman')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'blame')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'flat')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'season')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fraction')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'large')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cower')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'confine')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'grow')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'market')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'difficult')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'narrow')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'drain')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cheap')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'strength')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'restoration')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'ring')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'satellite')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lung')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'favorable')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'leg')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'disorder')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'illusion')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'resign')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'popular')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'endure')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'seem')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'prevalence')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'real')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'white')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'egg')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'patch')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'observation')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'statement')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'distant')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'owe')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'separate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'faith')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'gift')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'variation')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'kettle')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'horn')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'output')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'decrease')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'go')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'exercise')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'rescue')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'provide')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cousin')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'period')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'conscience')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'education')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'occupation')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'money')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'challenge')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'birthday')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'look')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'choice')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'scatter')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'garlic')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'break')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'in')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'litigation')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'launch')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'supply')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'year')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'practical')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'wrist')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'conventional')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'infinite')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'share')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'exit')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'guide')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'structure')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'guide')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'shout')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'governor')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'humanity')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dimension')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'private')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'suffering')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'salmon')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'stab')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'shave')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'wind')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'hallway')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'medieval')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sell')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'barrel')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'candle')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fool')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pottery')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lease')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'knowledge')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dog')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'repeat')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'drive')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'telephone')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'mutation')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'climate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'shame')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'stuff')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'score')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tiger')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'costume')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'association')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'kinship')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'monstrous')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'convict')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'issue')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dividend')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'magnetic')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'missile')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'implicit')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'trance')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'bite')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'mind')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'conclusion')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dominant')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'privacy')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cheque')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'posture')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'flatware')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'difficulty')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'condition')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'elephant')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'guerrilla')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'bedroom')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'opera')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'glacier')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'indirect')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'garage')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'short')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'circuit')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pie')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'deport')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'monarch')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'part')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lodge')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'ballot')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'increase')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dump')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'career')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'module')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fridge')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dialect')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'battery')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fear')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'interrupt')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'jealous')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'chase')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'mourning')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tablet')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'handy')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'satisfied')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'glimpse')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'chapter')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'doll')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'prize')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'calendar')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'track')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'upset')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'miss')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'thank')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'switch')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'vegetation')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'loyalty')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'paragraph')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'mountain')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sleeve')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'laser')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'ray')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'thoughtful')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'drift')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'reach')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pledge')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pierce')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'coffee')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'runner')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'club')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'feast')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'donor')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'rubbish')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'transfer')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'bounce')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'drum')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'coma')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'accent')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'physics')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'side')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sail')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'census')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pedestrian')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'door')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'half')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'thigh')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'weight')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'chief')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'taste')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'stake')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'honor')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'job')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'column')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'route')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'neglect')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'approve')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'wall')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'outside')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pioneer')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'herb')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'represent')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'night')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'force')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'bloody')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'chart')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'journal')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'threaten')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fisherman')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'ego')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'bubble')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'waiter')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'shelf')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'essential')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'decoration')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'parking')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'species')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'battle')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'scandal')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'unique')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'victory')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'execution')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'victory')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'opinion')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fax')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'bank')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tycoon')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'union')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'notion')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'frog')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'project')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'huge')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'glue')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'stubborn')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cooperation')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'classify')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'deep')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'harass')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'invasion')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'function')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'warrant')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'string')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'umbrella')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'clue')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'register')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'throw')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'slave')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'game')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'heart')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'peel')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sun')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'moon')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'apology')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dough')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'see')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lamb')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'glasses')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'episode')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'displace')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'convulsion')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'matter')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'healthy')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'buttocks')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'prisoner')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'trick')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'mouth')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tile')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'eat')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'wait')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'stadium')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'patent')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'kick')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lose')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'loose')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'debt')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'liver')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'differ')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'match')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fish')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'virtue')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'partner')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pack')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fascinate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'transform')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'excavate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'format')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'piece')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'cup')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pastel')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'diagram')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'shop')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'empirical')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'biography')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'advantage')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'specimen')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'notice')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'double')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'address')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'penetrate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'embark')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lack')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'result')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'distributor')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'remunerate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'chalk')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'flexible')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'receipt')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'chocolate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'jean')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'acute')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'medal')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'resignation')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sample')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'prayer')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'city')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'harm')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'seller')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'note')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'absence')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'muggy')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'profession')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'rally')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'scene')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'award')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'trial')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'freshman')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'ignorance')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'presence')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'orchestra')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sink')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'courtship')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'install')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fragrant')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'grounds')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'rate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'diplomat')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'blow')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'live')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dead')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'snuggle')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'player')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'insistence')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'gene')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'gallon')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'lane')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'resource')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'rung')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'obscure')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sprite')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'bean')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'rice')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'creme')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'yogurt')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'brown')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'car')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'truck')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'bus')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dismay')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'text')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'right')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'left')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'i')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'yo')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'me')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sing')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sunday')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'monday')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tuesday')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'wednesday')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'thursday')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'random')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'generate')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'friday')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'saturday')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'dragonfruit')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'back')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pack')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'pants')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'shirt')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'shorts')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sock')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sixth')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'seventh')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'eight')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'nine')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'ten')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'eleven')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'tweleve')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'thirteen')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'fourteen')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'sixteen')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'seventeen')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'eighteen')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'nineteen')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'twenty')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'birth')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'date')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'grape')";
	$result = $conn->query($sql);

	$sql = "INSERT INTO Words (ID, Word) VALUES (NULL, 'juice')";
	$result = $conn->query($sql);
	
	$sql = "SELECT * FROM Users WHERE UserName = \"" . $userName . "\" AND Password = \"" . $password ."\";";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		include 'typing_game_page.html';
		#echo "found";
	} else {
		echo "Not Found";
	}
	
	$conn->close();
	?>
