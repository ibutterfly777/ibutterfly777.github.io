<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Данные обрабатываются...</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.arcticmodal.js" type="text/javascript"></script>
  
</head>
<?php
            $name = $_POST['userName'];
            $email = $_POST['email'];

           
            if (($name) and ($email))
            {
            echo "Спасибо за отправку Вашего обращения.";
            } 
 
            $to = "ibutterfly777@gmail.com"; //сам E-mail внутри кавычек
            $headers = "Content-type: text/plain; charset = windows-1251";
            $subject = "Сообщение о желании посетить вебинар";
            $message = "Имя: $name \nЭлектронная почта: $email";
            $send = mail ($to, $subject, $message, $headers);
            if ($send == 'true')
            {
            echo "<a href=/index.html>
            Вернуться на главную страницу
            </a>";
            }
            else // если сервер вернул ошибку, то сказать нам об этом
            {
            echo "<p><b>Ошибка. Сообщение не отправлено!";
            }
        ?>

	</body>
</html>
