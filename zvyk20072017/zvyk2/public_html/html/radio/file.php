<META content="text/html; charset=utf-8" http-equiv="Content-Type">

 <?php
#  if (!empty($_POST['mycolor']))
#   echo $_POST['mycolor']; // Если выбран хоть 1 элемент
  
  


$str = nl2br ( $_POST['mycolor']);

unlink('my_form_reports.txt');

$fopen  =  fopen('my_form_reports.txt', 'a+');

fputs ($fopen, $str);

fclose ($fopen);

  if (!empty($_POST['mycolor']))
   echo $_POST['mycolor']; // Если выбран хоть 1 элемент

#   echo $_POST['mycolor']; // Если выбран хоть 1 элемент
  
    
  
  
  

  else echo "Выберите радиостанцию";
?>