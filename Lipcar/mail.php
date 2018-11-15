<?


if((isset($_POST['recall-tlf'])&&$_POST['recall-tlf']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'blogger@seokos.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = ''.$_POST['asktype'].''; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Номер телефона: <strong>'.$_POST['recall-tlf'].'</strong></p>                        					
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <blogger@seokos.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}


?>