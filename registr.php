<?php
require "header.php";
require "session.php";
?>

<!-- <?php

// $connect = mysqli_connect("std-mysql", "std_1480_autho", "12345678", "std_1480_autho");

// if (!empty($_POST)){
//     $result = mysqli_query($connect, "SELECT * FROM users WHERE login=\"".$_POST['login']."\"");
//     //echo mysqli_num_rows($result);
//     if(mysqli_num_rows($result) == 0){
//         mysqli_query($connect, "INSERT INTO users (name, surname, email, password) VALUES (
//             \"".$_POST["name"]."\", 
//             \"".$_POST["surname"]."\",
//             \"".$_POST["email"]."\",
//             \"".md5($_POST["password"])."\"
//             )"
//         );
//     } 
// }
?>

<div class="container-fluid">
 <div class="row">
  <div class="col-lg-8 col-lg-offset-2">
    <h1 class="text-center">Регистрация</h1>
    <form id="autho" method="post" action="dbconnection.php" role="form">
     <div class="messages"></div>
      <div class="controls">

       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <label for="form_name">Имя</label>
          <input id="form_name" type="text" name="name" class="form-control" placeholder="Введите свое Имя." required="required" data-error="Введите Имя.">
          <div class="help-block with-errors"></div>
         </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
          <label for="form_lastname">Фамилия</label>
          <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Введите свою Фамилию." required="required" data-error="Введите Фамилию.">
          <div class="help-block with-errors"></div>
         </div>
        </div>
       </div>

       <div class="row">
        <div class="col-md-6">
         <div class="form-group">
          <label for="form_email">Email</label>
          <input id="form_email" type="email" name="email" class="form-control" placeholder="Введите свой email." required="required" data-error="Введите email.">
          <div class="help-block with-errors"></div>
         </div>
        </div>

        <div class="col-md-6">
         <div class="form-group">
          <label for="form_phone">Пароль</label>
          <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Введите пароль.">
         <div class="help-block with-errors"></div>
        </div>
       </div>
      </div>

        <div class="col-md-12 mt-2">
         <input type="submit" class="btn btn-success btn-send" value="Зарегистрироваться">
        </div>

     </div>
    </div>
   </form>
  </div>
 </div> 
</div>  -->
<div class="container-fluid w-75 mt-3 text-center">
  <?php if(isset($session_user) && $session_user != ""):?>
                    <label>
                      <h3>Авторизация</h3>
                    </label><br>
                  
                    <a href="logout.php">Выйти</a>
                    <?php else:?>
                <form method="POST" action = "auth.php">
                    <label class="form-label text-start">Логин</label>
                    <input class="form-control w-25 container-fluid text-center" type="text" name="login" />
                    <label class="form-label text-start mt-2">Пароль</label>
                    <input class="form-control w-25 container-fluid text-center" type="password" name="password" />
                    <label></label>
                    <button class="btn btn-lg btn-outline-secondary mt-3" type="submit">Войти</button>  <a href="signup.php">Регистрация</a>
                </form>
                <?php endif;?>
</div>


<?php
require "footer.php"
?>