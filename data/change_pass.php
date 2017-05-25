<?php
if (isset($_POST['cur_pass'])) { $cur_pass = $_POST['cur_pass']; if ($cur_pass == '') { unset($cur_pass);} }
if (isset($_POST['new_pass'])) { $new_pass = $_POST['new_pass']; if ($new_pass == '') { unset($new_pass);} }
if (isset($_POST['neww_pass'])) { $neww_pass = $_POST['neww_pass']; if ($neww_pass == '') { unset($neww_pass);} }

session_start();
$id = $_SESSION['id'];
include ("../db_sittings.php");

$result = $mysqli->query("SELECT pas_hash FROM login WHERE UserID=$id");
$myrow = $result->fetch_assoc();
if ($myrow['pas_hash']!=md5($cur_pass)) {exit("Текущий пароль введен неверно!");}
if ($new_pass!=$neww_pass) {exit("Пароли не совпадают!");}
if ($myrow['pas_hash']==$neww_pass) {exit("Новый пароль должен отличаться от текущего!");}

$result2 = $mysqli->query("Update `login`
						   SET `pas_hash` = '".md5($new_pass)."'
						   WHERE `login`.`UserID`=$id");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Пароль успшно изменен </br>";
    }
 else {
    echo "Изменение пароля прошло с ошибкой!</br>";
    }

?>