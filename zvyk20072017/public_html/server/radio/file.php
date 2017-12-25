<META content="text/html; charset=utf-8" http-equiv="Content-Type">

 <?php


$str = nl2br ( $_POST['mycolor']);

unlink('radio.txt');

$fopen  =  fopen('radio.txt', 'a+');

fputs ($fopen, $str);

fclose ($fopen);

  if (!empty($_POST['mycolor']))
   echo $_POST['mycolor']; // Если выбран хоть 1 элемент


  else echo "Вы не выбрали радиостанцию, вернитесь и нажмите галочку";
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>Ссылки на странице</title>
 </head>
 <body>
  <p><a href="/~vova/server/radio/index.html">Вернуться к выбору радиостанции</a></p>
  <p><a href="/~vova/server/">Вернуться на начало</a></p>
 </body>
</html>