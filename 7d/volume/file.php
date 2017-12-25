<META content="text/html; charset=utf-8" http-equiv="Content-Type">

 <?php


$str = nl2br ( $_POST['mycolor']);

unlink('yroven.txt');

$fopen  =  fopen('yroven.txt', 'a+');

fputs ($fopen, $str);

fclose ($fopen);

  if (!empty($_POST['mycolor']))
   echo $_POST['mycolor']; // Если выбран хоть 1 элемент

#   echo $_POST['mycolor']; // Если выбран хоть 1 элемент


  else echo "Выберите уровень громкости радиостанции";
?>
