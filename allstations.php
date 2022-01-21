<?php
require "header.php"
?>

<div class="container-fluid w-75">
    <div class="text-center">
        <h1 class="display-4">Все станции велопроката Москвы</h1>
    </div>
</div>

<div class="table fix-footer">
    <?php
    $connect = mysqli_connect("std-mysql.ist.mospolytech.ru", "std_1480_db_kursovaya", "12345678", "std_1480_db_kursovaya");

    if(mysqli_connect_errno()){
        echo 'Ошибка в подкючении к базе данных ('.mysqli_connect_errno().'): '. mysqli_connect_error();
        exit();
        }

    $sql = "SELECT Name, StationCapacity, District, AdmArea, Location FROM velostation;";
    if($result = $connect->query($sql)){
    echo "<table><tr><th>Пункт проката</th><th>Количество мест</th><th>Административный округ</th><th>Район</th><th>Адрес</th></tr>";
    foreach($result as $row){
    echo "<tr>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["StationCapacity"] . "</td>";
    echo "<td>" . $row["District"] . "</td>";
    echo "<td>" . $row["AdmArea"] . "</td>";
    echo "<td>" . $row["Location"] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
    $result->free();
    } else{
    echo "Ошибка: " . $connect->error;
    }
    $connect->close();
    ?>
</div>


<?php
require "footer.php"
?>