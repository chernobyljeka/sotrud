<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Таблица</title>
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
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Серия</th>
        <th>Номер</th>
        <th>Дата выдачи</th>
        <th>Кем выдан</th>
        <th>Образование</th>
        <th>Дата рождения</th>
        <th>Отношение</th>
        <th>Должность</th>
        <th>Телефон</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
   
<?php 

if (empty($_SESSION['login']) or empty($_SESSION['id'])) {header('Location: index.php');}
include("db_sittings.php");
    if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $result = $mysqli->query("SELECT * FROM dismissed");

    if (Count($result->fetch_assoc())==0)
    {
    }
    else
    {
    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
        echo '
    <tr>
    <td type="ID_SOTR">'.htmlspecialchars($row["ID_SOTR"]).'</td>
        <td type="name">'.htmlspecialchars($row["Name"]).'</td>
        <td type="family" class="center">'.htmlspecialchars($row["Famaly"]).'</td>
        <td type="Otv" class="center">'.htmlspecialchars($row["Othestvo"]).'</td>
        <td type="Ser" class="center">'.htmlspecialchars($row["pas_ser"]).'</td>
        <td type="Num" class="center">'.htmlspecialchars($row["pas_num"]).'</td>
        <td type="pasvdate" class="center">'.htmlspecialchars($row["pas_date"]).'</td>
        <td type="ordenvd" class="center">'.htmlspecialchars($row["pas_orden"]).'</td>
        <td type="obrazov" class="center">'.htmlspecialchars($row["Obrazovan"]).'</td>
        <td type="Rozj" class="center">'.htmlspecialchars($row["Date_rozh"]).'</td>
        <td type="otnosh" class="center">'.htmlspecialchars($row["Otnoshenye"]).'</td>
        <td type="dolj" class="center">'.htmlspecialchars($row["dolgnost"]).'</td>
        <td type="phone" class="center">'.htmlspecialchars($row["phone"]).'</td>
        <td class="center">
                <a class="btn btn-info" id="'.htmlspecialchars($row["ID_SOTR"]).'" href="#modal2" title="Удалить">
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
    <div data-remodal-id="modal2">
        <h1>Подтверждение удаления</h1>
        <p>
            Вы действительно хотите безвозвратно удалить из архива данного сотрудника?
            <form action="data/del.php" method="post">
             <input type="hidden" class="ID_SOTR" name="ID_SOTR">
        </p>
        <br>
         <a class="remodal-cancel" href="#">Отмена</a>
         <input type="submit" value="Удалить" class="remodal-ok">
          </form>
       
    </div>

        <div class="remodal" data-remodal-id="modal3">
        <h1>Очистка</h1>
        <p>
            Вы действительно хотите очистить всю таблицу?
            <form action="data/clear.php" method="post">
        </p>
        <br>
         <a class="remodal-cancel" href="#">Отмена</a>
         <input type="submit" value="Очистить" class="remodal-ok">
          </form>
       
    </div>
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
<script src="js/charisma_clear.js"></script>


</body>
</html>