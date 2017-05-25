<div>
  <nav class="navbar navbar-default  navbar-fixed" role="navigation">
      <a class="navbar-brand" href="#">Leger_Invest</a>
        <ul class="nav navbar-nav">
      <!-- <li><a href="#">Пользователи</a></li> -->

      <?php
      if ($_SERVER['REQUEST_URI']=="/menu.php") {header("Location: index.php");}
      if ($_SERVER['REQUEST_URI']!="/index.php") {session_start();}

       if ($_SESSION['role']==1) { echo '  <li><a href="#modal_сpas">Смена пароля</a></li> <li><a href="reg.php">Пользователи</a></li>';}

            if($_SESSION['role']==0) echo '<li><a href="#modal_сpas">Смена пароля</a></li>' ?>
      <li><a href="index.php">Сотрудники</a></li>
      <li><a href="table_canditats.php">Кандидаты</a></li>
      <li><a href="table_dismissed.php">Уволенные</a></li>
      <li><a href="exit.php">Выход</a></li>
      </ul>
      </nav>
</div>

<div class="remodal" data-remodal-id="modal_сpas">
        <h1>Смена пароля</h1>
        <p>
        <form action="data/change_pass.php" method="post">
        <table align="center">
            <tr><td><font color="red">Текущий пароль</font></td><td><input required maxlength="32" type="password" class="cur_pass" name="cur_pass" /></td></tr>
            <tr><td><font color="red">Новый пароль</font></td><td><input required maxlength="32" type="password" class="new_pass" name="new_pass"/></td></tr>
            <tr><td><font color="red">Подтверждение</font></td><td><input required maxlength="32" type="password" class="neww_pass" name="neww_pass"/></td></tr>
        </table>
        </p>
        <br>
        <input type="hidden" class="ID_SOTR" name="ID_SOTR">
        <a class="remodal-cancel" href="#">Отмена</a>
        <input type="submit" value="ОК" class="remodal-ok">
        </form>
    </div>