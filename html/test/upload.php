<html>

<head>

<title> Результат загрузки файла </title>


<META content="text/html; charset=utf-8" http-equiv="Content-Type">

</head>

<body>

<?php

if (copy($_FILES['filename']['tmp_name'],

"temp/".$_FILES['filename']['name']))

{

echo "Файл успешно загружен";

}

else

{

echo "Ошибка загрузки файла";

}

?>

</body>

</html>