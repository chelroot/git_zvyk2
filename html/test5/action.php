<META content="text/html; charset=utf-8" http-equiv="Content-Type">

 <?php
//Принимаем постовые данные
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];

//вывод на экран
echo $name.''.$surname.' ваш номер телефона '.$phone;

//обращаемся к глобальной переменной SERVER
$ip=$_SERVER['REMOTE_ADDR'];
 
//формируем строку для записи
$str=$name.' '.$surname.', '.$phone.', '.$ip.'\r\n';
 
//открываем файл для записи.Если файл не существует-он будет создан
$fopen  =  fopen('my_form_reports.txt', 'a+');
//записываем строку
fputs ($fopen, $str);
//закрываем файл
fclose ($fopen);


?>
