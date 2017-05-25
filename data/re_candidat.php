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

    $result = $mysqli->query("Insert into `sotrudniki` 
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
                                        '$Phone');");
    if ($result != 0) {}
    else
    {
        echo 'Не удалось внести изменения!</br>';
        echo '<a href="../index.php"> Назад </a>';
        exit();
    }
    
    $ID_SOTR = trim($_POST['ID_SOTR']);

    $result = $mysqli->query("Delete From `conditats` WHERE `conditats`.`ID_SOTR` = '$ID_SOTR'");
    if ($result != 0) { header('Location: ../table_canditats.php');}
    else
    {
        echo 'Не удалось внести изменения!';
        echo '<a href="../table_canditats.php"> Назад </a>';
    }
}

?>