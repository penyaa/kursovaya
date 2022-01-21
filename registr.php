<?php
require "header.php";
require "session.php";
?>

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