<META content="text/html; charset=utf-8" http-equiv="Content-Type">

 <?php
$str = nl2br ( $_POST['mycolor']);

unlink('ard.txt');

$fopen  =  fopen('ard.txt', 'a+');


fputs ($fopen, $str);

fclose ($fopen);

   if (!empty($_POST['mycolor']))
//  echo $_POST['mycolor']; // Если выбран хоть 1 элемент


 ?>

<p><a href="/~vova/ard/">Вернуться к управлению каналом</a></p>


<p>Не забудьте обновить страницу для получения достоверной информации</p>