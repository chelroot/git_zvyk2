<META content="text/html; charset=utf-8" http-equiv="Content-Type">




<html>


<big> <big>
<head>
  <title>Загрузка файлов на сервер</title>
</head>

<body>
     <p>1 минута </p>
Действующее имя файла

<?php

    $f = fopen("file.txt", "r");


    echo fgets($f);

    fclose($f);
?>


  <form action="action.php" method="post" enctype="multipart/form-data">
     Изенить на новое имя файла: <input type="text" name="name" />
     <input type="submit" value="Отправить форму" />
      </form>

</body>

</big> <big>
</html>

<p><a href="/~vova/server/index.html">Вернуться на начало</a></p>