<?php
if($_POST)
    {
    $to = "zagraychuk@gmail.com"; //куда отправлять письмо
    $from = 'Testing'; // от кого
    $subject = "Проверка почты"; //тема
    $message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['telephone'].';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <viktor_88@ukr.net>\r\n";
    $result = mail($to, $subject, $message, $headers);
 
    if ($result){
        echo "Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
    }
    }
?>