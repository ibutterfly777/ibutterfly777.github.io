<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Данные обрабатываются...</title>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.arcticmodal.js" type="text/javascript"></script>
  
</head>
<?php
            $userSum = $_POST['userSum'];
            $debt = $_POST['radio'];
            $surname = $_POST['userSurame'];
            $name = $_POST['userName'];
            $aftername = $_POST['userAfterName'];
            $birthday = $_POST['birthday'];
            $employment = $_POST['employment'];
            $city = $_POST['userTown'];
            $phone = $_POST['userPhone'];
            $mail = $_POST['mail'];
            $stationalPhone = $_POST['stational'];
            $workPhone = $_POST['workPhone'];

           
            if (($userSum) and ($debt) and ($surname) and ($name) and ($aftername) and ($birthday) and ($employment) and ($city) and ($phone) and ($mail) and ($stationalPhone) and ($workPhone))
            {
            echo "Спасибо за отправку Вашего обращения.";
            } 
 
            $to = "ibutterfly777@gmail.com"; //сам E-mail внутри кавычек
            $headers = "Content-type: text/plain; charset = windows-1251"; //кодировка в кирилицу
            $subject = "Сообщение о заявке на займ"; //в теме письма будет указано с какого сайта пришло письмо
            $message = "Желаемая сумма займа: $userSum \nТекущая просроченная задолженность: $debt \nФамилия: $surname \nИмя: $name \nОтчество: $aftername \nДата рождения: $birthday \Тип занятости: $employment \nНаселенный пункт ЧР: $city \nМобильный телефон: $phone \nЭлектронная почта: $mail \nСтационарный телефон: $stationalPhone \nТелефон отдела кадров: $workPhone"; //соответственно текст из всех полей
            $send = mail ($to, $subject, $message, $headers);
            if ($send == 'true') //если сообщение отправлено и сервер не вернул ошибку, то вывести благодарность и ссылку на главную страницу сайта
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
