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
  <h1>Уровень громкости для радиостанции </h1>
   </body>
</html>
Сейчас установлен уровень громкости радиостанции <br /> <br />
<?php
    $f = fopen("volume.txt", "r");
    echo fgets($f);
    fclose($f);
?>
<br /> <br /> нажмите обновить чтобы убедиться

<META content="text/html; charset=utf-8" http-equiv="Content-Type">
<big>

 <FORM ACTION="file.php" METHOD=POST>
<br /> <input name="mycolor" type="checkbox" value="3"> 3
<br /> <input name="mycolor" type="checkbox" value="5"> 5
<br /> <input name="mycolor" type="checkbox" value="7"> 7
<br /> <input name="mycolor" type="checkbox" value="9"> 9
<br /> <input name="mycolor" type="checkbox" value="11"> 11
<br /> <input name="mycolor" type="checkbox" value="13"> 13
<br /> <input name="mycolor" type="checkbox" value="15"> 15
<br /> <input name="mycolor" type="checkbox" value="17"> 17
<br /> <input name="mycolor" type="checkbox" value="19"> 19
<br /> <input name="mycolor" type="checkbox" value="21"> 21
<br /> <input name="mycolor" type="checkbox" value="23"> 23


<br />
<br /> <br /> <br /> <input name="Submit" type=submit value="Выбрать уровень громкости радиостанции">
</big>

</FORM>

<p><a href="/~vova/server/">Вернуться на начало</a></p>
