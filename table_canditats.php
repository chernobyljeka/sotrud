<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Кандидаты</title>
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
        <th style="display:none;">Серия</th>
        <th style="display:none;">Номер</th>
        <th style="display:none;">Дата выдачи</th>
        <th style="display:none;">Кем выдан</th>
        <th>Образование</th>
        <th>Дата рождения</th>
        <th style="display:none;">Отношение</th>
        <th>Должность</th>
        <th>Телефон</th>
        <th>Стаж</th>
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
    $result = $mysqli->query("SELECT * FROM conditats");

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
        <td type="Ser" class="center" style="display:none;">'.htmlspecialchars($row["pas_ser"]).'</td>
        <td type="Num" class="center" style="display:none;">'.htmlspecialchars($row["pas_num"]).'</td>
        <td type="pasvdate" class="center" style="display:none;">'.htmlspecialchars($row["pas_date"]).'</td>
        <td type="ordenvd" class="center" style="display:none;">'.htmlspecialchars($row["pas_orden"]).'</td>
        <td type="obrazov" class="center">'.htmlspecialchars($row["Obrazovan"]).'</td>
        <td type="Rozj" class="center">'.htmlspecialchars($row["Date_rozh"]).'</td>
        <td type="otnosh" class="center" style="display:none;">'.htmlspecialchars($row["Otnoshenye"]).'</td>
        <td type="dolj" class="center">'.htmlspecialchars($row["dolgnost"]).'</td>
        <td type="Phone" class="center">'.htmlspecialchars($row["phone"]).'</td>
        <td type="Stage" class="center">'.htmlspecialchars($row["stage"]).'</td>
        <td class="center">
            <a class="btn btn-primary" id="'.htmlspecialchars($row["ID_SOTR"]).'" href="#modal" title="Редактирование">
                <i class="glyphicon glyphicon-edit icon-white"></i>
            </a>
                <a class="btn btn-info" id="'.htmlspecialchars($row["ID_SOTR"]).'" href="#modal2" title="Удалить">
                <i class="glyphicon glyphicon-trash icon-white"></i>
            </a>
            <a class="btn btn-success" id="'.htmlspecialchars($row["ID_SOTR"]).'" href="#modal5" title="Принять">
                <i class="glyphicon glyphicon-ok icon-white"></i>
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
<div class="remodal" data-remodal-id="modal">
        <h1>Редактирование кандидата</h1>
        <p>
        <form action="data/update_canditat.php" method="post">
        <table>
            <tr><td colspan="2">Общее</td><td colspan="2">Паспорт</td></tr>
            <tr><td><font color="red">Имя</font></td><td><input type="text" class="name" name="name" /></td><td><font color="red">Серия</font></td><td><input type="text" class="Ser" name="Ser" maxlength="2" /></td></tr>
            <tr><td><font color="red">Фамилия</font></td><td><input type="text" class="family" name="family"/></td><td><font color="red">Номер</font></td><td><input type="text" class="Num" name="Num"/></td></tr>
            <tr><td><font color="red">Отчество</font></td><td><input type="text" class="Otv" name="Otv"/></td><td><font color="red">Дата выдачи</font></td><td><input type="date" class="pasvdate" name="pasvdate"/></td></tr>
            <tr><td><font color="red">Год рождения</font></td><td><input type="date" class="Rozj" name="Rozj"/></td><td><font color="red">Кем выдан</font></td><td><input type="text" class="ordenvd" name="ordenvd"/></td></tr>
            <tr><td><font color="red">Должность</font></td><td><input type="text" class="dolj" name="dolj"/></td><td><font color="red">Образование</font></td><td><input type="text" class="obrazov" name="obrazov"/></td></tr>
            <tr><td><font color="red">Телефон</font></td><td><input type="tel" class="Phone" name="Phone"/></td><td><font color="red">Стаж</font></td><td><input type="text" class="Stage" name="Stage"/></td></tr>
            <tr><td colspan="4">Примечание по отношению к работе и качеству работы</td></tr>           
           <tr><td colspan="4"><textarea maxlength="199" class="otnosh" name="otnosh"></textarea></td></tr>
        </table>
        </p>
        <br>
        <input type="hidden" class="ID_SOTR" name="ID_SOTR">
        <a class="remodal-cancel" href="#">Отмена</a>
        <input type="submit" value="ОК" class="remodal-ok">
        </form>
    </div>

    <div class="remodal" data-remodal-id="modal3">
        <h1>Добавление кандидата</h1>
        <p>
        <form action="data/add_canditat.php" method="post">
        <table>
            <tr><td colspan="2">Общее</td><td colspan="2">Паспорт</td></tr>
            <tr><td><font color="red">Имя</font></td><td><input required type="text" class="name" name="name" /></td><td><font color="red">Серия</font></td><td><input type="text" class="Ser" name="Ser" maxlength="2" /></td></tr>
            <tr><td><font color="red">Фамилия</font></td><td><input required type="text" class="family" name="family"/></td><td><font color="red">Номер</font></td><td><input type="text" class="Num" name="Num"/></td></tr>
            <tr><td><font color="red">Отчество</font></td><td><input required type="text" class="Otv" name="Otv"/></td><td><font color="red">Дата выдачи</font></td><td><input type="date" class="pasvdate" name="pasvdate"/></td></tr>
            <tr><td><font color="red">Год рождения</font></td><td><input type="date" class="Rozj" name="Rozj"/></td><td><font color="red">Кем выдан</font></td><td><input type="text" class="ordenvd" name="ordenvd"/></td></tr>
            <tr><td><font color="red">Должность</font></td><td><input type="text" class="dolj" name="dolj"/></td><td><font color="red">Образование</font></td><td><input type="text" class="obrazov" name="obrazov"/></td></tr>
            <tr><td><font color="red">Телефон</font></td><td><input type="tel" class="Phone" name="Phone"/></td><td><font color="red">Стаж</font></td><td><input type="text" class="Stage" name="Stage"/></td></tr>
            <tr><td colspan="4">Примечание по отношению к работе и качеству работы</td></tr>           
            <tr><td colspan="4"><textarea maxlength="199" class="otnosh" name="otnosh"></textarea></td></tr>
        </table>
        </p>
        <br>
        <input type="hidden" class="ID_SOTR" name="ID_SOTR">
        <a class="remodal-cancel" href="#">Отмена</a>
        <input type="submit" value="ОК" class="remodal-ok">
        </form>
    </div>

    <div data-remodal-id="modal2">
        <h1>Подтверждение перевода в уволенные</h1>
        <p>
            Вы действительно хотите удалить кандидата?
            <form action="data/cancel_candidat.php" method="post">
            <input type="hidden" class="ID_SOTR" name="ID_SOTR">
        <br>
         <a class="remodal-cancel" href="#">Отмена</a>
         <input type="submit" value="Удалить" class="remodal-ok">
          </form>
       
    </div>

    <div class="remodal" data-remodal-id="modal5">
        <h1>Подтверждение перевода</h1>
        <p>
            Пожалуйста заполните паспортные данные сотрудника перед его переводом.
            <form action="data/re_candidat.php" method="post">
            <table>
            <tr><td>Необходимые данные</td></tr>
           	<td><font color="red">Серия</font></td><td><input type="text" class="Ser" name="Ser" maxlength="2" /></td></tr>
            <tr><td><font color="red">Номер</font></td><td><input type="text" class="Num" name="Num"/></td></tr>
            <tr><td><font color="red">Дата выдачи</font></td><td><input type="date" class="pasvdate" name="pasvdate"/></td></tr>
            <tr><td><font color="red">Кем выдан</font></td><td><input type="text" class="ordenvd" name="ordenvd"/></td></tr>
            <tr><td colspan="4">Примечание по отношению к работе и качеству работы</td></tr>           
            <tr><td colspan="4"><textarea maxlength="199" class="otnosh" name="otnosh"></textarea></td></tr>
        	</table>
            <input type="hidden" class="ID_SOTR" name="ID_SOTR">
            <input type="hidden" class="name" name="name">
            <input type="hidden" class="family" name="family">
            <input type="hidden" class="Otv" name="Otv">
            <input type="hidden" class="Rozj" name="Rozj">
            <input type="hidden" class="Dolj" name="Dolj">
            <input type="hidden" class="obrazov" name="obrazov">
            <input type="hidden" class="Phone" name="Phone">
        </p>
        <br>
         <a class="remodal-cancel" href="#">Отмена</a>
         <input type="submit" value="Перевести" class="remodal-ok">
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
<script src="js/charisma_01.js"></script>


</body>
</html>