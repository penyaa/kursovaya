<?php
require "header.php"
?>

<div class="container-fluid w-75">
    <div class="text-center">
        <h1 class="display-4">Все станции велопроката Москвы</h1>
    </div>
</div>

<table>
    <tr>
        <th>Пункт</th>
        <th>Количество мест</th>
        <th>Административный округ</th>
        <th>Район</th>
        <th>Адрес</th>
        <th>Сайт</th>
    </tr>

<?php 
    $connect = mysqli_connect("std-mysql", "std_1480_db_kursovaya", "12345678", "std_1480_db_kursovaya");
 
    if(!empty($_POST)) {
        $name = $_POST['Name'];
        $statCap = $_POST['StationCapacity'];
        $admArea=$_POST['AdmArea'];
        $district=$_POST['District'];
        $loc=$_POST['Location'];
        $web=$_POST['OperOrgWebsite'];
            $query="INSERT INTO table SET name='$name', statCap='$statCap', admArea='$admArea', district='$district', loc='$loc', web='$web' ";
                mysqli_query($connect,$query) or die(mysqli_error($connect)); 
    }

    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    for($data=[];$row=mysqli_fetch_assoc($result);$data[]=$row) ;
    $result='';
    foreach($data as $elem) {
        $result.='<tr>';

        $result.='<td>'.$elem['name'].'</td>';
        $result.='<td>'.$elem['statCap'].'</td>';
        $result.='<td>'.$elem['admArea'].'</td>';
        $result.='<td>'.$elem['district'].'</td>';
        $result.='<td>'.$elem['loc'].'</td>';
        $result.='<td>'.$elem['web'].'</td>';

        $result.='</tr>';
    }
    echo $result;
?>
</table>

<?php
require "footer.php"
?>