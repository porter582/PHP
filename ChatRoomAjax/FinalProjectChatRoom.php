<?php
	$dbh = new PDO("mysql:host=icarus.cs.weber.edu;dbname=W01258771", 'W01258771', 'Portercs!');

	class Room {
		public $person1Name = "";
		public $person2Name = "";
		public $person1Words = array();
		public $person2Words = array();
		public $id = 1;
	}

	$room = new Room;
	$personNum;

	function getRoom($id){
		global $room, $dbh;
		$sql = $dbh->prepare("SELECT roomBoard FROM chatroom WHERE ID = :id;");
        $sql->bindParam(":id", $id);
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$result = $sql->execute();
		$row = $sql->fetch();
		$jsonPage = $row->roomBoard;
		$room = json_decode($jsonPage);
	}

	function storePerson($id)
	{
		global $room, $dbh;
        $jsonRoom = json_encode($room);
		$sql = $dbh->prepare("UPDATE chatroom SET roomBoard = :room WHERE ID = :id;");
        $sql->bindParam(":id", $id);
		$sql->bindParam(":room", $jsonRoom);
		$result = $sql->execute();
	}


	if(isset($_GET['action']) and $_GET['action'] == "messagebuttonclick"){
		$room = json_decode($_GET['content']);
		$value = $_GET['value'];
		$person = $_GET['person'];
		if($person == "1")
		{
			array_push($room->person1Words, $value);
		} else if($person == "2")
		{
			array_push($room->person2Words, $value);
		}
		$jsonRoom = json_encode($room);
		$sql = $dbh->prepare("UPDATE chatroom SET roomBoard =  :room  WHERE ID = :id;");
        $sql->bindParam(":id", $room->id);
		$sql->bindParam(":room", $jsonRoom);
		$result = $sql->execute();
		echo json_encode($room);
	} else if(isset($_GET['action']) and $_GET['action'] == "refresh"){
		getRoom($room->id);
		echo json_encode($room);
	} else if(isset($_GET['action']) and $_GET['action'] == "logout") {
        $sql = $dbh->prepare("DELETE FROM chatroom WHERE ID = :id");
        $sql->bindParam("id", $room->id);
        $result = $sql->execute();
    } else{
	$sql = $dbh->prepare("SELECT * FROM chatroom WHERE ID = :id;");
	$sql->bindParam(":id", $room->id);
	$result = $sql->execute();

	if($sql->rowCount() == 0)
	{
		$room->person1Name = $name;
		$personNum = 1;
		$jsonRoom = json_encode($room);
		$sql = $dbh->prepare("INSERT INTO chatroom(ID, roomBoard) VALUES (:id, :room);");
        $sql->bindParam(":id", $room->id);
        $sql->bindParam(":room", $jsonRoom);
		$result = $sql->execute();
		storePerson($room->id);
		$personNum = 1;
	}
	else
	{
		$sql = $dbh->prepare("SELECT roomBoard FROM chatroom WHERE ID = :id;");
        $sql->bindParam(":id", $room->id);
		$sql->setFetchMode(PDO::FETCH_OBJ);
		$result = $sql->execute();
		$row = $sql->fetch();
		$needToDecode = $row->roomBoard;
		$room = json_decode($needToDecode);
		if($room->person2Name == "") {
            if (strlen($room->person2Name) <= 0) {
                $room->person2Name = $name;
                $personNum = 2;
                storePerson($room->id);
            }
        }else{
		    $room = new Room;
            $room->person1Name = $name;
            $personNum = 1;
            $newJsonRoom = json_encode($room);
            $sql = $dbh->prepare("INSERT INTO chatroom(ID, roomBoard) VALUES (:id, :room);");
            $sql->bindParam(":id", $room->id);
            $sql->bindParam(":room", $newJsonRoom);
            $result = $sql->execute();
            $room->id = $dbh->lastInsertId();
            storePerson($room->id);
            $personNum = 1;
        }
	}
	?>
<html>
	<body>
		<link rel="stylesheet" href="style.css">
		<input name="messageBox" id="messageBox" type="text">
		<button id="person" onclick="sendWord(<?php echo $personNum ?>)">Submit</button>
		<div>
		    <p id="p1Words">
		    <p id="p2Words">
        </div>
        <form action = "MainFinalProject.php">
            <input type="submit" value="Logout" onclick="logout()">
        </form>
		<script>
			var timer = setInterval(timerTick, 100);
			var words1 = new Array();
			var words2 = new Array();
			var room = <?php echo json_encode($room); ?>;
			var personNum = parseInt(<?php echo $personNum;?>);
			refreshPage();

			function logout(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if(this.readyState == 4 && this.status == 200){
                        room = JSON.parse(this.responseText);
                        refreshPage();
                    }
                }
                xmlhttp.open("GET","FinalProjectChatRoom.php?action=logout", true);
                xmlhttp.send();
            }

			function sendWord(person){
				var value = document.getElementById("messageBox").value;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if(this.readyState == 4 && this.status == 200){
						room = JSON.parse(this.responseText);
						refreshPage();
					}
				}
				xmlhttp.open("GET","FinalProjectChatRoom.php?action=messagebuttonclick&content=" + JSON.stringify(room) + "&value=" + value + "&person=" + <?php echo $personNum;?>, true);
				xmlhttp.send();
			}
			
			function refreshPage(){
				document.getElementById("p1Words").innerHTML = "";
				for(var i = 0; i < room.person1Words.length; i++)
				{
					words1[i] = room.person1Words[i];
					document.getElementById("p1Words").innerHTML += room.person1Name+ ": " + words1[i] + "<br>";
				}
				
				document.getElementById("p2Words").innerHTML = "";
				for(var i = 0; i < room.person2Words.length; i++)
				{
					words2[i] = room.person2Words[i];
					document.getElementById("p2Words").innerHTML += room.person2Name+ ": " + words2[i] + "<br>";
				}
			}

			function timerTick(){
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if(this.readyState == 4 && this.status == 200){
						//window.alert(this.responseText);
						room = JSON.parse(this.responseText);
						refreshPage();
					}
				}
				xmlhttp.open("GET","FinalProjectChatRoom.php?action=refresh", true);
				xmlhttp.send();
			}
		</script>
	</body>
</html>
<?php }
?>