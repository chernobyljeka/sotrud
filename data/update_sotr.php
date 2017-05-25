<?php 

include("../db_sittings.php");

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else
    {
    $ID_SOTR = trim($_POST['ID_SOTR']);
    $Name = trim($_POST['name']);
    $Fam = trim($_POST['family']);
    $Otv = trim($_POST['Otv']);
    $Ser = trim($_POST['Ser']);
    $Num = trim($_POST['Num']);
    $pasvdate = trim($_POST['pasvdate']);
    $ordenvd = trim($_POST['ordenvd']);
    $obrazov = trim($_POST['obrazov']);
    $Rozj = trim($_POST['Rozj']);
    $otnosh = trim($_POST['otnosh']);
    $dolj = trim($_POST['dolj']);
    $Date_work = trim($_POST['Date_work']);
    $Prikaz = trim($_POST['Prikaz']);
    $Phone = trim($_POST['Phone']);


function ProverkaFormataDati($date)
{ 
return strtotime($date)===false ? false : true;
}

if (!ProverkaFormataDati($Date_work)) 
{
    echo "Не удалось внести изменения, т.к. Дата приема на работу не введена или введена не коректно</br>";
    echo '<a href="../index.php"> Назад </a>';
    exit();
}

$result;

if (ProverkaFormataDati($Rozj) and ProverkaFormataDati($pasvdate))
{
  $result = $mysqli->query("UPDATE `sotrudniki` 
                              SET `Name` = '$Name',
                                  `Famaly` = '$Fam', 
                                  `Othestvo` = '$Otv', 
                                  `pas_ser` = '$Ser', 
                                  `pas_num` = '$Num', 
                                  `pas_date` = '$pasvdate', 
                                  `pas_orden` = '$ordenvd', 
                                  `Obrazovan` = '$obrazov',
                                  `Date_rozh` = '$Rozj',
                                  `Otnoshenye` = '$otnosh', 
                                  `dolgnost` = '$dolj',
                                  `Date_work` = '$Date_work',
                                  `Prikaz` = '$Prikaz',
                                  `phone` = '$Phone' 
                              WHERE `sotrudniki`.`ID_SOTR` = '$ID_SOTR'");
}
if (ProverkaFormataDati($Rozj) and !ProverkaFormataDati($pasvdate)){
   $result = $mysqli->query("UPDATE `sotrudniki` 
                              SET `Name` = '$Name',
                                  `Famaly` = '$Fam', 
                                  `Othestvo` = '$Otv', 
                                  `pas_ser` = '$Ser', 
                                  `pas_num` = '$Num', 
                                  `pas_date` = null, 
                                  `pas_orden` = '$ordenvd', 
                                  `Obrazovan` = '$obrazov',
                                  `Date_rozh` = '$Rozj',
                                  `Otnoshenye` = '$otnosh', 
                                  `dolgnost` = '$dolj',
                                  `Date_work` = '$Date_work',
                                  `Prikaz` = '$Prikaz',
                                  `phone` = '$Phone' 
                              WHERE `sotrudniki`.`ID_SOTR` = '$ID_SOTR'");
}

  if (!ProverkaFormataDati($Rozj) && ProverkaFormataDati($pasvdate)){
   $result = $mysqli->query("UPDATE `sotrudniki` 
                              SET `Name` = '$Name',
                                  `Famaly` = '$Fam', 
                                  `Othestvo` = '$Otv', 
                                  `pas_ser` = '$Ser', 
                                  `pas_num` = '$Num', 
                                  `pas_date` = '$pasvdate', 
                                  `pas_orden` = '$ordenvd', 
                                  `Obrazovan` = '$obrazov',
                                  `Date_rozh` = null,
                                  `Otnoshenye` = '$otnosh', 
                                  `dolgnost` = '$dolj',
                                  `Date_work` = '$Date_work',
                                  `Prikaz` = '$Prikaz',
                                  `phone` = '$Phone' 
                              WHERE `sotrudniki`.`ID_SOTR` = '$ID_SOTR'");
}
  if (!ProverkaFormataDati($Rozj) && !ProverkaFormataDati($pasvdate))    {
   $result = $mysqli->query("UPDATE `sotrudniki` 
                              SET `Name` = '$Name',
                                  `Famaly` = '$Fam', 
                                  `Othestvo` = '$Otv', 
                                  `pas_ser` = '$Ser', 
                                  `pas_num` = '$Num', 
                                  `pas_date` = null, 
                                  `pas_orden` = '$ordenvd', 
                                  `Obrazovan` = '$obrazov',
                                  `Date_rozh` = null,
                                  `Otnoshenye` = '$otnosh', 
                                  `dolgnost` = '$dolj',
                                  `Date_work` = '$Date_work',
                                  `Prikaz` = '$Prikaz',
                                  `phone` = '$Phone' 
                              WHERE `sotrudniki`.`ID_SOTR` = '$ID_SOTR'");
}


 

    if ($result != 0) { header('Location: ../index.php');}
    else
    {
    	echo 'Не удалось внести изменения!';
    	echo '<a href="../index.php"> Назад </a>';
    }
}

?>