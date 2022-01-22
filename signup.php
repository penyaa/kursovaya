<?php
require "header.php";
?>

<?php
$connect = mysqli_connect("std-mysql.ist.mospolytech.ru", "std_1480_db_kursovaya", "12345678", "std_1480_db_kursovaya");

$name = $_POST['name'];
$login = $_POST['login'];
$pass = $_POST['password'];

if (!empty($_POST)){
    if(trim($name) == "" || trim($login) == "" || trim($pass) == ""){
        echo '<script type="text/javascript">alert("Введены не все данные")</script>';}
    else{
    $result = mysqli_query($connect, "SELECT * FROM users WHERE login=\"".$_POST['login']."\"");
    if(mysqli_num_rows($result) == 0){
        mysqli_query($connect, "INSERT INTO users (name, login, password) VALUES (
            \"".$_POST["name"]."\", 
            \"".$_POST["login"]."\",
            \"".md5($_POST["password"])."\"
            )"
        );
    }

    header("Location: registr.php"); 
    } 
}

$title = "Регистрация";
$content = "
<form method=\"POST\">
    <div class='container-fluid w-75 mt-3 text-center'>
        <label class='form-label text-start'>ФИО</label>
        <input class='form-control w-25 container-fluid text-center' type=\"text\" name=\"name\">
    </div>

    <div class='container-fluid w-75 mt-3 text-center'>
        <label>Логин</label>
        <input class='form-control w-25 container-fluid text-center' type=\"text\" name=\"login\">
    </div>

    <div class='container-fluid w-75 mt-3 text-center'>
        <label>Пароль</label>
        <input class='form-control w-25 container-fluid text-center' type=\"password\" name=\"password\">
    </div>

    <div class='container-fluid w-75 mt-3 text-center'>
        <button class='btn btn-lg btn-outline-secondary mt-3' type=\"submit\">Регистрация</button>
    </div>
</form>
";



?>

<div class = "container-fluid">
    <?=$content?>
</div>

<?php
require "footer.php"
?>            