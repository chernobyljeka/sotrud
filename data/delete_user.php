<?php 

include("../db_sittings.php");

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else
    {

    $ID_USER = trim($_POST['UserID']);

    $result = $mysqli->query("Delete From `login` WHERE `login`.`UserID` = '$ID_USER'");
    if ($result != 0) { header('Location: ../reg.php');}
    else
    {
    	echo 'Не удалось внести изменения!';
    	echo '<a href="../reg.php"> Назад </a>';
    }
}

?>