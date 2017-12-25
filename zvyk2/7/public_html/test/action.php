<META content="text/html; charset=utf-8" http-equiv="Content-Type">


<?php
echo '<pre>';

// Выводит весь результат шелл-команды "ls", и возвращает 
// последнюю строку вывода в переменной $last_line. Сохраняет код возврата
// шелл-команды в $retval.
$last_line = system('ls', $retval);

?>