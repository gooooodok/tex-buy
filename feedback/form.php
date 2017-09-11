<?php

if (empty($_POST['texnika'])) {
    // echo "Ви не вказали вид техніки";
    return false;
}

elseif (empty($_POST['brand'])) {
    // echo "Ви не вказали бренд";
    return false;
}

elseif (empty($_POST['model'])) {
    // echo "Ви не вказали модель";
    return false;
}

elseif (empty($_POST['email'])) {
    // echo "Вкажіть ваш email";
    return false;
}

else {
        $email = $_POST['email'];
        $validation = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($validation){

        }
        else {
            echo "Не вірно вказаний email";
            return false;
        }

        $to = "zagraychuk@gmail.com";
        $subject = "Skypka.com.ua";

        $message =  "Вид техніки: <b>" . $_POST['texnika'] . 
                    "</b>; <br>Бренд: <b>" . $_POST['brand'] .
                    "</b>; <br>Модель: <b>" . $_POST['model'] .
                    "</b>; <br>E-mail: <b>" . $_POST['email'] .  
                    "</b>; <br>Им'я: <b>" . $_POST['name'] . 
                    "</b>; <br>Телефон: <b>" . $_POST['telephone'] . 
                    "</b>; <br>Додатковий опис: <b>" . $_POST['message'] . "</b>.";

        $from = strip_tags($_POST['email']);
        $headers = "Content-type: text/html; charset=UTF-8 \r\n";
        $headers .= "From: " . strip_tags($from) . "\r\n";
        $result = mail($to, $subject, $message, $headers);
     
        if ($result) {
            echo "Заявка відправлена. Ми зв'яжимось з вами найближчим часом.";
        }
    }

?>