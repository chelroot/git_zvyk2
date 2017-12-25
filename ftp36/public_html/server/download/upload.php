<META content="text/html; charset=utf-8" http-equiv="Content-Type">



<html>
<big> <big>  <big>
<head>
  <title>Результат загрузки файла</title>
</head>
<body>
<?php
   if($_FILES["filename"]["size"] > 1024*3*1024)
   {
     echo ("Размер файла превышает три мегабайта");
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES["filename"]["tmp_name"], "temp/".$_FILES["filename"]["name"]);


echo  "Файл";
echo nl2br("\n");
echo nl2br("\n");
echo  nl2br($_FILES["filename"]["name"]);
echo nl2br("\n");

echo nl2br("\n");
echo "успешно загружен" ;


   } else {
      echo("Ошибка загрузки файла");
   }
?>
</body>
</big> </big> </big>

<p><a href="/~vova/server/">Вернуться на начало</a></p>
</html>


