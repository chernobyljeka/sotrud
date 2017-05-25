<?php 

include("../db_sittings.php");

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else
    {
    $result = $mysqli->query("TRUNCATE TABLE dismissed");
    header('Location: ../table_dismissed.php');
}

?>