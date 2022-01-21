<?php
require "header.php";
require("session.php");
?>

<?php if(isset($session_user) && $session_user != ""):?>

<div class="container-fluid w-75 text-center mt-4">
    <form action="searchfun.php" method="POST">
      <input class="form-control w-50 container-fluid text-center" type="text" id="search"name="search" placeholder="Поиск по району или улице" aria-label="Поиск">
      <button class="btn btn-outline-success mt-2" type="submit">Поиск</button>
    </form>
</div>

<?php else:?>

    <div class="container-fluid w-75 text-center mt-4">
    <input class="form-control w-50 container-fluid text-center" type="text" id="search"name="search" placeholder="Поиск по району или улице" aria-label="Поиск">
        <p class = " text-danger text-center">Чтобы воспользоваться поиском, авторизуйтесь!</p>
        </div>

    <?php endif;?>

<!-- <div class = "text-center container-fluid">
            <h1>Поиск по району или номеру станции</h1>
            <form action="searchfun.php" method = "POST">
                <input type="text" id="search" name = "search" placeholder = "Введите ваш район" class = "form-control w-50 p-3 container-fluid text-center mt-3"><br>
                <input type="submit" value = "Отправить" class = "btn btn-success">
            </form>
        </div> -->

<?php
require "footer.php"
?>