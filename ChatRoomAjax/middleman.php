<?php
    $dbh = new PDO("mysql:host=icarus.cs.weber.edu;dbname=W01258771", 'W01258771', 'Portercs!');
    if (isset($_POST["userName"]))
    {
        if(isset($_POST["password"])) {
            $name = $_POST["userName"];
            $password = $_POST["password"];

            try {
                $sql = $dbh->prepare("SELECT Salt FROM Users WHERE UserName =  :name ;");
                $sql->bindParam(':name', $name);
                $sql->setFetchMode(PDO::FETCH_OBJ);
                $result = $sql->execute();
                if($sql->rowCount() > 0) {
                    $row = $sql->fetch();
                    $salt = $row->Salt;
                    $password = $password . $salt;
                    $password = hash('sha256', $password);
                }
            }catch (Exception $e)
            {
                include 'MainFinalProject.php';
            }
            $sql = $dbh->prepare("SELECT * FROM Users WHERE UserName = :name AND Password = :password;");
            $sql->bindParam(':name', $name);
            $sql->bindParam(':password', $password);
            $sql->setFetchMode(PDO::FETCH_OBJ);
            $result = $sql->execute();

            if ($sql->rowCount() > 0) {
                include 'FinalProjectChatRoom.php';
            } else {
                include 'MainFinalProject.php';
            }
        }
    }
?>