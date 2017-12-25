<META content="text/html; charset=utf-8" http-equiv="Content-Type">



<html>
<big> <big> <big>
<head>
  <title>Результат загрузки файла</title>
</head>
<body>
<?php

echo '<pre>';

// Выводит весь результат шелл-команды "ls", и возвращает.
// последнюю строку вывода в переменной $last_line. Сохраняет код возврата
// шелл-команды в $retval.
$last_line = system('ls /home/vova/public_html/server/download/temp| sort', $retval);



?>
</body>
</big> </big> </big>
</html>


