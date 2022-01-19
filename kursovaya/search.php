<?php
require "header.php"
?>

<div class="container-fluid w-75 text-center mt-4">
    <form>
      <input class="form-control w-50 container-fluid text-center" type="search" placeholder="Поиск по району или номеру станции" aria-label="Поиск">
      <button class="btn btn-outline-success mt-2" type="submit">Поиск</button>
    </form>
</div>

<?php
$connect = mysqli_connect("std-mysql", "std_1480_db_kursovaya", "12345678", "std_1480_db_kursovaya");

// Получаем запрос
$inputSearch = $_REQUEST['search']; 
 
// Создаём SQL запрос
$sql = "SELECT Name, StationCapacity, AdmArea, District, Location, OperOrgWebsite FROM velostation WHERE `Name` = '$name' || `StationCapacity` = '$statCap' || `AdmArea` = '$admArea' || `District` = '$district' || `Location` = '$loc' || `OperOrgWebsite` = '$web'";
 
// Отправляем SQL запрос
$result = $mysqli -> query($sql);

function doesItExist(array $arr) {
  // Создаём новый массив
  $data = array(
      'name' => $arr['name'] != false ? $arr['name'] : 'Нет данных',
      'statCap' => $arr['statCap'] != false ? $arr['statCap'] : 'Нет данных',
      'admArea' => $arr['admArea'] != false ? $arr['admArea'] : 'Нет данных',
      'district' => $arr['district'] != false ? $arr['district'] : 'Нет данных',
      'loc' => $arr['loc'] != false ? $arr['loc'] : 'Нет данных',
      'web' => $arr['web'] != false ? $arr['web'] : 'Нет данных'
  );
  return $data; // Возвращаем этот массив
}

function veloResult($result) { 
  // Проверка на то, что строк больше нуля
  if ($result -> num_rows > 0) {
      // Цикл для вывода данных
      while ($row = $result -> fetch_assoc()) {
          // Получаем массив с строками которые нужно выводить
          $arr = doesItExist($row);
          // Вывод данных
          echo "Пункт: ". $row['name'] ."<br>
                Количество мест: ". $row['statCap'] ."<br>
                Административный округ: ". $row['admArea'] ."<br>
                Район: ". $row['district'] ."<br>
                Адрес: ". $arr['loc'] ."<br>
                Сайт: ". $arr['web'] ."<br>";
      }
  // Если данных нет
  } else {
      echo "Не кто не найден";
  }
}
?>

<?php
require "footer.php"
?>