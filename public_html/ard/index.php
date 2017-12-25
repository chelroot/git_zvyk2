<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>font-size</title>
  <style>
   h1 {
    font-family: 'Times New Roman', Times, serif; /* Гарнитура текста */
    font-size: 100%; /* Размер шрифта в процентах */
   }
   p {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 11pt; /* Размер шрифта в пунктах */
   }
  </style>
 </head>
 <body>
<big> <big>  <h1>Управление каналом номер 2 </h1> </big> </big>
   </body>
   <p>Не забудьте обновить страницу для получения достоверной информации</p>
</html>
Состояние канала :<big><big>"<?php
    $f = fopen("sost.txt", "r");
    echo fgets($f);
    fclose($f);
?>
"</big></big>
<br /> <br />

Дата последней проверки:<big><big>"<?php
    $f = fopen("date.txt", "r");
    echo fgets($f);
    fclose($f);
?>
"</big></big>
 <br /> <br />
 нажмите чтобы:

<META content="text/html; charset=utf-8" http-equiv="Content-Type">


<big>

 <FORM ACTION="file.php" METHOD=POST>
<br /> <input name="mycolor" type="radio" value="Q"> Включить
<br /> <input name="mycolor" type="radio" value="A"> Выключить
<br /> <input name="mycolor" type="radio" value="q"checked> Проверить состояние

<br /> <br /> <br /> <input name="Submit" type=submit value="Внести изменения">
</big>

</FORM>

<p><a href="/~vova/server/">Вернуться на начало</a></p>



