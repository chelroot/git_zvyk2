<META content="text/html; charset=utf-8" http-equiv="Content-Type">



<html>
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
     move_uploaded_file($_FILES["filename"]["tmp_name"], "/home/vova/public_html/test/".$_FILES["filename"]["name"]);

echo '<pre>';

// Выводит весь результат шелл-команды "ls", и возвращает.
// последнюю строку вывода в переменной $last_line. Сохраняет код возврата
// шелл-команды в $retval.
$last_line = system('ls', $retval);



echo  "Файл";
echo nl2br("\n");
echo  nl2br($_FILES["filename"]["name"]);
echo nl2br("\n");

echo nl2br("\n");
echo "успешно загружен";


   } else {
      echo("Ошибка загрузки файла");
   }
?>
</body>
</html>


