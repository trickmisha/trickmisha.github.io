<?
if((isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'trickmisha@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заказ на услугу'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Размер авто: '.$_POST['step1'].'</p>                        
                        <p>Год авто: '.$_POST['step2'].'</p>                        
                        <p>Основные элементы: '.$_POST['step3'].'</p>                        
                        <p>Доп. Элементы: '.$_POST['step4'].'</p>                        
                        <p>Качество пленки: '.$_POST['step4'].'</p>                        
                        <p>Телефон: '.$_POST['phone'].'</p>                                             
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>