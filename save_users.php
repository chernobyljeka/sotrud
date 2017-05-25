<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['UserName'])) { $UserName=$_POST['UserName']; if ($UserName =='') { unset($UserName);} }
    if (isset($_POST['Role'])) { $Role=$_POST['Role']; if ($Role =='') { unset($Role);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
    $status = 0;
 
    if (empty($login)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {  
        echo 'Не введен логин </br>';
        $status=1;
    }

    if (empty($password))
    {
        echo 'Не введен пароль </br>';
        $status=1;
    }

    if (empty($UserName))
    {
         echo 'Не введено имя пользователя</br>';
         $status=1;
    }

    if (empty($Role))
    {
        echo 'Не выбрана роль</br>';
         $status=1;
    }

    if ($status==1) {exit('Введены не все данные для проверки!');}

    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $UserName = stripslashes($UserName);
    $UserName = htmlspecialchars($UserName);
    $Role = stripslashes($Role);
    $Role = htmlspecialchars($Role);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $UserName = trim($UserName);
    $Role = trim($Role);
    $pas = md5($password);

    $rol = 0;

    if ($Role=="User") {$rol=0;}
    if ($Role=="Admin") {$rol=1;}

 // подключаемся к базе
    include ("db_sittings.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = $mysqli->query("SELECT UserID FROM login WHERE Login='$login'");
    $myrow = $result->fetch_assoc();
    if (!empty($myrow['UserID'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин. </br>");
    }
 // если такого нет, то сохраняем данные
    $result2 = $mysqli->query("INSERT INTO login (Login, pas_hash,UserName,Role) VALUES('$login','$pas','$UserName',".$rol.")");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a> </br>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.</br>";
    }
    ?>