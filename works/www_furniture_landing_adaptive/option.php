<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Данные обрабатываются...</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.arcticmodal.js" type="text/javascript"></script>
  
</head>

<?php
/* Проверяем существуют ли переменные, которые передала форма обратной связи. 
   Если не существуют, то мы их создаем.
   Если форма передала пустые значения мы их удаляем */       
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['vopros'])) {$vopros = $_POST['vopros']; if ($vopros == '') {unset($vopros);}}
if (isset($_POST['number'])) {$number = $_POST['number']; if ($number == '') {unset($number);}}


/* Убираем все лишние пробелы, а также преобразуем все теги HTML в символы*/
$name = htmlspecialchars(trim($name));
$vopros = htmlspecialchars(trim($vopros));
$number = htmlspecialchars(trim($number));


$headers = 'Content-type: text/html; charset=UTF-8' . "\r\n";  

/* Формируем сообщение */
$address = "zapros@u-cargo.ru, 670205@mail.ru";
$sub = "Скинуть все заботы по доставке";
$mes = "".$text_message."\nТелефон: ".$number."";

/* Отправка сообщения */
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom: international-cargo-company.com");
      if ($verify == 'true')
	  
     {
     	 header ('Location: thanks.html');  // перенаправление на нужную страницу
   exit(); 

            }
            else 
            { 
echo "<p><b>Сообщение не отправлено. Приносим свои извинения."; 
echo "<p><b>Попробуйте повторить отправку позже."; 
echo "<a href=index.html>Вернуться к заполнению формы</a>"; 
} 	
    ?>	
	
	</body>
</html>