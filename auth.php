<?php
$connect = mysqli_connect("std-mysql.ist.mospolytech.ru", "std_1480_db_kursovaya", "12345678", "std_1480_db_kursovaya");

$result = mysqli_query($connect, "SELECT * FROM users WHERE
    login='".$_POST["login"]."' AND
    password='".md5($_POST["password"])."'
");


//echo $_POST["login"];
//echo md5($_POST["password"]);

if(!$result || mysqli_num_rows($result) == 0){
    echo "Такой пользователь не существует.";
    exit;
}

session_start();
$_SESSION["user"] = mysqli_fetch_assoc($result);

header("Location: index.php");

?>