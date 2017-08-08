<?php

if($_POST)
    {
        $to = "zagraychuk@gmail.com"; //куда отправлять письмо
        $subject = "Заявка на оцінку техніки"; //тема

        $message =  "Вид техніки: <b>" . $_POST['texnika'] . 
                    "</b>; <br>Бренд: <b>" . $_POST['brand'] .
                    "</b>; <br>Модель: <b>" . $_POST['model'] . 
                    "</b>; <br>Им'я: <b>" . $_POST['name'] . 
                    "</b>; <br>Телефон: <b>" . $_POST['telephone'] . 
                    "</b>; <br>E-mail: <b>" . $_POST['email'] . 
                    "</b>; <br>Додатковий опис: <b>" . $_POST['message'] . "</b>.";

        $from = strip_tags($_POST['email']); // от кого
        $headers = "Content-type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: " . strip_tags($from) . "\r\n";
        $result = mail($to, $subject, $message, $headers);
     
        if ($result) {
            echo "Заявка успішно відправлена. Наші спеціалісти звяжутся з вами найближчим часом.";
        }
    }

?>