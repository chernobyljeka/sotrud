 <?php 

include("../db_sittings.php");

if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    else
    {
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
    $dolj = trim($_POST['Dolj']);
    $Date_work = trim($_POST['Date_work']);
    $Prikaz = trim($_POST['Prikaz']);
    $Phone = trim($_POST['Phone']);


function ProverkaFormataDati($date)
{ 
return strtotime($date)===false ? false : true;
}

$result;

if (ProverkaFormataDati($Rozj) and ProverkaFormataDati($pasvdate))
{
   $result = $mysqli->query("Insert into `dismissed` 
                                  (`Name`,
                                  `Famaly`, 
                                  `Othestvo`, 
                                  `pas_ser`, 
                                  `pas_num`, 
                                  `pas_date`, 
                                  `pas_orden`, 
                                  `Obrazovan`,
                                  `Date_rozh`,
                                  `Otnoshenye`, 
                                  `dolgnost`,
                                  `Date_work`, 
                                  `Prikaz`,
                                  `phone`)
                                values ('$Name',
                                        '$Fam',
                                        '$Otv',
                                        '$Ser',
                                        '$Num',
                                        '$pasvdate',
                                        '$ordenvd',
                                        '$obrazov',
                                        '$Rozj',
                                        '$otnosh',
                                        '$dolj',
                                        '$Date_work', 
                                        '$Prikaz',
                                        '$Phone');");
}
if (ProverkaFormataDati($Rozj) and !ProverkaFormataDati($pasvdate)){
  $result = $mysqli->query("Insert into `dismissed` 
                                  (`Name`,
                                  `Famaly`, 
                                  `Othestvo`, 
                                  `pas_ser`, 
                                  `pas_num`, 
                                  `pas_date`, 
                                  `pas_orden`, 
                                  `Obrazovan`,
                                  `Date_rozh`,
                                  `Otnoshenye`, 
                                  `dolgnost`,
                                  `Date_work`, 
                                  `Prikaz`,
                                  `phone`)
                                values ('$Name',
                                        '$Fam',
                                        '$Otv',
                                        '$Ser',
                                        '$Num',
                                         null,
                                        '$ordenvd',
                                        '$obrazov',
                                         '$Rozj',
                                        '$otnosh',
                                        '$dolj',
                                        '$Date_work', 
                                        '$Prikaz',
                                        '$Phone');");
}

  if (!ProverkaFormataDati($Rozj) && ProverkaFormataDati($pasvdate)){
  $result = $mysqli->query("Insert into `dismissed` 
                                  (`Name`,
                                  `Famaly`, 
                                  `Othestvo`, 
                                  `pas_ser`, 
                                  `pas_num`, 
                                  `pas_date`, 
                                  `pas_orden`, 
                                  `Obrazovan`,
                                  `Date_rozh`,
                                  `Otnoshenye`, 
                                  `dolgnost`,
                                  `Date_work`, 
                                  `Prikaz`,
                                  `phone`)
                                values ('$Name',
                                        '$Fam',
                                        '$Otv',
                                        '$Ser',
                                        '$Num',
                                        '$pasvdate',
                                        '$ordenvd',
                                        '$obrazov',
                                         null,
                                        '$otnosh',
                                        '$dolj',
                                        '$Date_work', 
                                        '$Prikaz',
                                        '$Phone');");
}
  if (!ProverkaFormataDati($Rozj) && !ProverkaFormataDati($pasvdate))    {
  $result = $mysqli->query("Insert into `dismissed` 
                                  (`Name`,
                                  `Famaly`, 
                                  `Othestvo`, 
                                  `pas_ser`, 
                                  `pas_num`, 
                                  `pas_date`, 
                                  `pas_orden`, 
                                  `Obrazovan`,
                                  `Date_rozh`,
                                  `Otnoshenye`, 
                                  `dolgnost`,
                                  `Date_work`, 
                                  `Prikaz`,
                                  `phone`)
                                values ('$Name',
                                        '$Fam',
                                        '$Otv',
                                        '$Ser',
                                        '$Num',
                                         null,
                                        '$ordenvd',
                                        '$obrazov',
                                         null,
                                        '$otnosh',
                                        '$dolj',
                                        '$Date_work', 
                                        '$Prikaz',
                                        '$Phone');");
}

    if ($result != 0) {  header('Location: ../index.php');}
    else
    {
        echo 'Не удалось внести изменения!</br>';
        echo '<a href="../index.php"> Назад </a>';
        exit();
    }

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