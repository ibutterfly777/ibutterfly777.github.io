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
$address = "lianaliana@mail.ru, skinuves@gmail.com, ibutterfly777@gmail.com";
$sub = "Заказ обратного звонка";
$mes = "".$text_message."\nТелефон: ".$number."";

/* Отправка сообщения */
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom: maltaenglishparty.com");
      if ($verify == 'true')
	  
     {
     	 echo '<table width="100%" id="tabl" align="center" class="blue">
<tr>
<td>
<div align="center" class="tit" style="padding-top:15%">Спасибо, Ваш запрос успешно отправлен!</div><br><br>
<script type="text/javascript">
function timer(){
var obj=document.getElementById("timer_inp");
obj.innerHTML--;
if(obj.innerHTML==0){history.go(-1);setTimeout(function(){},1000);}
else{setTimeout(timer,1000);}
}
setTimeout(timer,1000);
</script>
<div align="center" class="tit">Через <span id="timer_inp">3</span> секунды Вы будете перенаправлены обратно</div>
</td>
</tr>
</table>';

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