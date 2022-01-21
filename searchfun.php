<?php
require "header.php";
?>

<div class="table fix-footer">
<?php

    $connect = mysqli_connect("std-mysql.ist.mospolytech.ru", "std_1480_db_kursovaya", "12345678", "std_1480_db_kursovaya");

    if(mysqli_connect_errno()){
        echo 'Ошибка в подкючении к базе данных ('.mysqli_connect_errno().'): '. mysqli_connect_error();
        exit();
        }

    if(empty($_POST['search']))
        echo "Строка пуста!";
    else{
    $search = $_POST['search'];
    $query = mysqli_query($connect, "SELECT * FROM velostation WHERE Location LIKE '%$search%' OR District LIKE '%$search%'");
    while($row = mysqli_fetch_assoc($query))  echo "Пункт: ". $row['Name'] ."<br>
                Количество мест: ". $row['StationCapacity'] ."<br>
                Административный округ: ". $row['AdmArea'] ."<br>
                Район: ". $row['District'] ."<br>
                Адрес: ". $row['Location'] ."<hr>";
    if (!$query || mysqli_num_rows($query) == 0)
        echo "<h1>данных нет</h1>";
    }
?>

<?php
require "footer.php";
?>