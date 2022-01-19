<?php
require "header.php"
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
</div> 

<?php
require "footer.php"
?>