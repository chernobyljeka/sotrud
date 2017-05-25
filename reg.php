<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Бывшие сотруднкии</title>
    <link rel="stylesheet" href="css/jquery.remodal.css">
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <script type="text/javascript">
   

        $(document).ready(function () {
            
            $('#maintable tr').click(function() {
                // this -  элемент строки
                // проходим по всем td в строке
                $(this).find('td').each(function () {
                    // тут this - ячейка
                    // получаем содержимое ячейки
                    var value = $(this).html();
                    // и её тип
                    var type = $(this).attr('type');

                    // кладём значение в инпут попапа с классом равным типу
                    $('.remodal .' + type).val(value);
                });
            });
           
        });


    </script>

</head>

<body>
<?php include("menu.php");?>
<div class="contable">
<div class="ch-container" style="margin: 0;">
    <div class="row">
        
        <div id="content" class="col-lg-16 col-sm-16">
            <!-- content starts -->
    <div class="row">
    <div class="box col-md-16">
    
    <div class="box-inner">
    <div class="box-content">   

    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" id="maintable">
    <thead>
    <tr>
    <th>№</th>
        <th>Имя</th>
        <th>Роль</th>
        <th>Логин</th>
        <th>Действие</th>
    </tr>
    </thead>
    <tbody>
    
<?php 
if (empty($_SESSION['login']) or empty($_SESSION['id']) or $_SESSION['role']!=1) {header('Location: index.php');}
include("db_sittings.php");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $result = $mysqli->query("SELECT * FROM login");

    if (Count($result->fetch_assoc())==0)
    {
        echo "Список пользователей пустой";
    }
    else
    {
    $result->data_seek(0);
    $role;
    while ($row = $result->fetch_assoc()) {
    	if ($row["Role"]==0) {$role = "Пользователь";}
    	if ($row["Role"]==1) {$role = "Администратор";}
        echo '
    <tr>
    <td type="UserID">'.htmlspecialchars($row["UserID"]).'</td>
        <td type="UserName">'.htmlspecialchars($row["UserName"]).'</td>
        <td type="Role" class="center">'.htmlspecialchars($role).'</td>
        <td type="Login" class="center">'.htmlspecialchars($row["Login"]).'</td>
          <td class="center" style="width: 50px; text-align: center;">
                <a class="btn btn-info" id="'.htmlspecialchars($row["UserID"]).'" href="#modal2" title="Удалить">
                <i class="glyphicon glyphicon-trash icon-white"></i>
            </a>
        </td>
    </tr>';
    }
}
?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->

    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->

    <!-- Ad ends -->

    <hr>

</div><!--/.fluid-container-->

    <div class="remodal" data-remodal-id="modal3">
        <h1>Регистрация нового пользователя</h1>
        <p>
        <form action="save_users.php" method="post" class="adminka">
        <table>
            <tr><td colspan="2">Дополнительное</td><td colspan="2">Основа</td></tr>
            <tr><td><font color="red">Имя</font></td><td><input type="text" class="UserName" name="UserName" /></td><td><font color="red">Логин</font></td><td><input type="text" class="login" name="login"/></td></tr>
            <tr><td><font color="red">Роль</font></td><td><select class="Role" name="Role"><option value="Admin">Администратор</option><option value="User">Пользователь</option></select></td><td><font color="red">Пароль</font></td><td><input type="Password" class="password" name="password"/></td></tr>
            </table>
        </p>
        <br>
        <a class="remodal-cancel" href="#">Отмена</a>
        <input type="submit" value="ОК" class="remodal-ok">
        </form>
    </div>
    </div>

     <div data-remodal-id="modal2">
        <h1>Удаление пользователя</h1>
        <p>
            Вы действительно хотите удалить пользователя?
            <form action="data/delete_user.php" method="post">
            <input type="hidden" class="UserID" name="UserID">
        <br>
         <a class="remodal-cancel" href="#">Отмена</a>
         <input type="submit" value="Удалить" class="remodal-ok">
          </form>
       
    </div>

    
<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/jquery.remodal.js"></script>
<script>
    $(document).on('open', '.remodal', function () {
        console.log('open');
    });

    $(document).on('opened', '.remodal', function () {
        console.log('opened');
    });

    $(document).on('close', '.remodal', function () {
        console.log('close');
    });

    $(document).on('closed', '.remodal', function () {
        console.log('closed');
    });

    $(document).on('confirm', '.remodal', function () {
        console.log('confirm');
    });

    $(document).on('cancel', '.remodal', function () {
        console.log('cancel');
    });

    var inst = $('[data-remodal-id=modal2]').remodal();
</script>
<!-- external javascript -->

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Работа с куки, используется для сортировок и прочего -->
<script src="js/jquery.cookie.js"></script>

<!-- data table plugin -->
<script src='js/jquery.dataTables.min.js'></script>

<!-- Фикс всех селектов и дроплистов -->
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- star rating plugin -->
<script src="js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="js/charisma_02.js"></script>


</body>
</html>