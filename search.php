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
        <p class = " text-danger text-center">Для пользования поиском необходимо авторизоваться!</p>
        </div>

    <?php endif;?>

<?php
require "footer.php"
?>