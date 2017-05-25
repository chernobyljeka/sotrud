<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Система учёта персонала</title>   
</head>
<body>
	
	<?php  session_start();?>

	<?php if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
     	include('login.php');
    }
    else
    {
    include("menu.php");
    include('table.php');
    }
    ?>

   


</body>
</html>