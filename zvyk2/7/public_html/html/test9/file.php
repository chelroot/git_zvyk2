<META content="text/html; charset=utf-8" http-equiv="Content-Type">

 <?php
  if (!empty($_POST['mycolor'])) echo $_POST['mycolor']; // Если выбран хоть 1 элемент
  else echo "Выберите значение";
?>