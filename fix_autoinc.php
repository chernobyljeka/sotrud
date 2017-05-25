<?php 
	
$i = 1;
include ("db_sittings.php");

session_start();
if ($_SESSION['role']!=1) {exit("Редактирование AUTO INC запрещено!");}

// Fix users ID

$res = $mysqli->query("SELECT * FROM login");
while ($row = $res->fetch_assoc()) 
{

  $id = $row['UserID'];
  $result = $mysqli->query("UPDATE login SET UserID='".$i."' WHERE UserID='".$id."'");
  $i++; 

}

$res = $mysqli->query("ALTER TABLE login AUTO_INCREMENT=$i");

//Fix sotrunic ID

$i=1;

$res = $mysqli->query("SELECT * FROM sotrudniki");
while ($row = $res->fetch_assoc()) 
{

  $id = $row['ID_SOTR'];
  $result = $mysqli->query("UPDATE sotrudniki SET ID_SOTR='".$i."' WHERE ID_SOTR='".$id."'");
  $i++; 

}

$res = $mysqli->query("ALTER TABLE sotrudniki AUTO_INCREMENT=$i");

//Fix conditss ID

$i=1;

$res = $mysqli->query("SELECT * FROM conditats");
while ($row = $res->fetch_assoc()) 
{

  $id = $row['ID_SOTR'];
  $result = $mysqli->query("UPDATE conditats SET ID_SOTR='".$i."' WHERE ID_SOTR='".$id."'");
  $i++; 

}

$res = $mysqli->query("ALTER TABLE conditats AUTO_INCREMENT=$i");

//Fix dim ID

$i=1;

$res = $mysqli->query("SELECT * FROM dismissed");
while ($row = $res->fetch_assoc()) 
{

  $id = $row['ID_SOTR'];
  $result = $mysqli->query("UPDATE dismissed SET ID_SOTR='".$i."' WHERE ID_SOTR='".$id."'");
  $i++; 

}

$res = $mysqli->query("ALTER TABLE dismissed AUTO_INCREMENT=$i");

session_destroy();

exit("База отредактирована!</br> <a href='index.php'>Главная страница</a> </br>");

?>