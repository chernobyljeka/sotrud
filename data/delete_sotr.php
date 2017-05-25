<?php 

include("../db_sittings.php");

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else
    {

    $ID_SOTR = trim($_POST['ID_SOTR']);

    $result = $mysqli->query("Delete From `sotrudniki` WHERE `sotrudniki`.`ID_SOTR` = '$ID_SOTR'");
    if ($result != 0) { header('Location: ../index.php');}
    else
    {
    	echo 'Не удалось внести изменения!';
    	echo '<a href="../index.php"> Назад </a>';
    }
}

?>