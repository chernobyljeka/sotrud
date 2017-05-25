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
    $dolj = trim($_POST['dolj']);
    $Phone = trim($_POST['Phone']);
    $Stage = trim($_POST['Stage']);


function ProverkaFormataDati($date)
{ 
return strtotime($date)===false ? false : true;
}
$result;
if (ProverkaFormataDati($Rozj) and ProverkaFormataDati($pasvdate))
{
   $result = $mysqli->query("Insert into `conditats` 
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
                                  `phone`,
                                  `stage`)
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
                                        '$Phone',
                                        '$Stage');");
}
else
{
  if (ProverkaFormataDati($Rozj) and !ProverkaFormataDati($pasvdate))
  $result = $mysqli->query("Insert into `conditats` 
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
                                  `phone`,
                                  `stage`)
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
                                        '$Phone',
                                        '$Stage');");
else
{
  $result = $mysqli->query("Insert into `conditats` 
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
                                  `phone`,
                                  `stage`)
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
                                        '$Phone',
                                        '$Stage');");
}
}

    if ($result != 0) { header('Location: ../table_canditats.php');}
    else
    {
        echo 'Не удалось внести изменения!</br>';
        echo '<a href="../table_canditats.php"> Назад </a>';
    }
}

?>