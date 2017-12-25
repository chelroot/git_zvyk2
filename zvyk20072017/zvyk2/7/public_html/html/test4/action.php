<META content="text/html; charset=utf-8" http-equiv="Content-Type">

 <?php
//Принимаем постовые данные
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];

//вывод на экран
echo $name.''.$surname.' ваш номер телефона '.$phone;


?>
