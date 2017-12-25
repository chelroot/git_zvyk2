<META content="text/html; charset=utf-8" http-equiv="Content-Type">

 <?php
//Принимаем постовые данные
$name = $_POST['name'];


//вывод на экран
echo $name;

//обращаемся к глобальной переменной SERVER
$ip=$_SERVER['REMOTE_ADDR'];
 
//формируем строку для записи
$str=$name;

unlink('f8.txt');

//открываем файл для записи.Если файл не существует-он будет создан
$fopen  =  fopen('f8.txt', 'a+');
//записываем строку
fputs ($fopen, $str);
//закрываем файл
fclose ($fopen);


?>
<p><a href="/~vova/server/name/index.php">Вернуться</a></p>
