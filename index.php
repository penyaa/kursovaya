<?php
require "header.php"
?>

<div class="container-fluid w-75 fix-footer" style="background-color: #e6e6fa;">
  
      <div class="text-center mt-4">
        <h1 class="display-4">Как пользоваться прокатом</h1>
      </div>

      <div class="row align-items-start">
        <div class="col mt-4">
          <img src="pic/us1.png" class="img-fluid" alt="...">
          <h5 class="mt-3">Зарегистрируйтесь и оплатите доступ</h5>
          <p class="fs-6 lh-sm">Нужны телефон и банковская карта. При регистрации мы пришлём Вам в СМС логин и PIN для доступа к прокату. Чтобы начать пользоваться прокатом, оплатите доступ в мобильном приложении или на сайте.</p>
        </div>
        <div class="col mt-4">
          <img src="pic/us2.png" class="img-fluid" alt="...">
          <h5 class="mt-3">Возьмите велосипед на станции</h5>
          <p class="fs-6 lh-sm">Введите логин и PIN на руле велосипеда. Дождитесь надписи «Удачной поездки» («НАЧАЛО» для электровелосипеда) и вытащите велосипед.</p>
        </div>
        <div class="col mt-4">
          <img src="pic/us3.png" class="img-fluid" alt="..."> 
          <h5 class="mt-3">Катайтесь</h5>
          <p class="fs-6 lh-sm">Поездки до 30 минут включены в стоимость доступа. За поездки дольше 30 минут берётся дополнительная плата. Вернуть велосипед можно на любую станцию.</p>
        </div>
        <div class="col mt-4">
          <img src="pic/us4.png" class="img-fluid" alt="...">
          <h5 class="mt-3">Верните велосипед</h5>
          <p class="fs-6 lh-sm">Верните велосипед в любой свободный порт прокатной станции, дождитесь надписи «Возврат ОК» («КОНЕЦ» для электровелосипеда) на руле и push-уведомления о завершении проката.</p>
        </div>
      </div>
      
      <div class="text-center mt-4">
        <form action="signup.php">
          <button class="btn btn-primary btn-lg" type="submit">Регистрация</button>
        </form>
      </div>
      
      <div class="text-center mt-4">
        <h1 class="display-4">Активная прогулка на велосипеде</h1>
      </div>

      <div class="row align-items-start">
        <div class="col-5 mt-4">
          <h5 class="mt-3 text-end">Найдите ближайшую к Вам станцию</h5>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <form action="search.php">
              <button type="submit" class="btn btn-secondary btn-lg mt-3 ">Перейти к поиску</button>
            </form>
          </div>
        </div>
        <div class="col-7 mt-4">
          <img src="pic/map2.png" class="img-fluid"  alt="...">
        </div>
      </div>  

      <div class="row align-items-start">
        <div class="col-5 mt-4">
          <h5 class="mt-3 text-center">Контакты и помощь</h5>
          <h6 class="mt-3 text-center">Служба поддержки</h6>
          <h6 class="mt-3 text-center text-primary">+7 495 999 99 99</h6>
          <h6 class="mt-3 text-center text-primary">disa1144@gmail.com</h6>
          <h6 class="mt-3 text-center fw-bolder">в будни с 10:00 до 18:00</h6>
        </div>
        <div class="col-7 mt-4">
          <h5 class="mt-3 text-center">Обратная связь</h5>
          <div>
            <form method="post" action="mail.php">
              <label class="form-label text-start" for="name">Имя</label>
              <input class="form-control" type="text" id="name" placeholder="Введите имя">
              <label class="form-label" for="email">Электронная почта</label>
              <input class="form-control" type="email" id="email" placeholder="Введите email">
              <div class="form-text">Мы не передаем персональные данные третьим лицам</div> 
              <label class="form-label" for="message">Сообщение</label> 
              <textarea class="form-control" id="message" cols="30" rows="7" placeholder="Введите сообщение"></textarea>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-lg btn-outline-secondary mt-3">Отправить</button>
              </div>
            </form>
          </div>
        </div>
      </div>  
</div>

<?php
require "footer.php"
?>