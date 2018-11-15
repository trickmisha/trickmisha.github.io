<!DOCTYPE html>
<html lang="ru">

<!-- Mirrored from alandr-remont.ru/quiz/ok.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Oct 2018 12:25:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width">
	<title>Alandr</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/site.css">	
	<link rel="stylesheet" href="js/arcticmodal/jquery.arcticmodal-0.3.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/special.css">
	<link rel="stylesheet" href="css/media.css">


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39344350 = new Ya.Metrika({
                    id:39344350,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "../../mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39344350" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



</head>
<body>

<div class="wrap">
	

<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-6 col-xl-5">
				<a href="index-2.html" class="header__logo"><img src="images/logo.png" alt=""></a>
				<div class="header__info">Ремонт коммерческих помещений <i class="mob_hide"><br></i>под ключ в Москве и области</div>
			</div>
			<div class="col-6 col-xl-4 header__features">
				<div class="header__feat header__feat-wallet">Поэтапная <br>оплата</div>
				<div class="header__feat header__feat-hand">Работаем <br>без аванса</div>
			</div>
			<div class="col-12 col-xl-3">
				<div class="header__soc">
					<a  title="WhatsApp" href="whatsapp://send?phone=74951090290" class="header__soc__wat mob_show"><img src="images/hde-watsup.svg" alt=""></a>
					<a title="Viber" href="viber://add?number=74951090290" class="header__soc__vib mob_show"><img src="images/hde-viber.svg" alt=""></a>
					<a href="http://telegram.me/dmitrybelokrylov" class="header__soc__tel"><img src="images/hde-telegram.svg" alt=""></a>
				</div>
				<div class="header__contacts">
					<a href="tel:+74951090290" class="header__contacts__tel roistat-phone">+7 (495) 109-02-90</a>
					<div class="header__contacts__link modal-id-open" data-modal-id="call-modal"><span>перезвоните мне</span></div>
				</div>
			</div>
		</div>
	</div><!-- /header -->
</header>

<main>

<?
if((isset($_POST['phone'])&&$_POST['phone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'blogger@seokos.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Заказ на услугу'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Номер телефона: <strong>'.$_POST['phone'].'</strong></p>
                        <p>Email адрес: <strong>'.$_POST['email'].'</strong></p></br>	
                        <p>Год выпуска автомобиля: <strong>'.$_POST['quest1'].'</strong></p>                        
                        <p>Расстояние: <strong>'.$_POST['quest2'].'</strong></p>                        
                        <p>Когда требуется установка: <strong>'.$_POST['quest3'].'</strong></p>                        
                        <p>Тип охранного комплекта: <strong>'.$_POST['quest4'].'</strong></p></br>                        
                        <p>Подарок за прохождение теста: <strong>'.$_POST['quest5'].'</strong></p>                        					
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <blogger@seokos.ru>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>

	<div class="result thanks container">
		<div class="result__title">Спасибо за вашу активность</div>
		<div class="result__h3">Менеджер уже приступил к обработке вашей заявки</div>
		<div class="result__line"></div>
		<div class="thanks__h3">Время работы нашего офиса ПН — ПТ, с 9.00 до 19.00<br> Если у вас срочный вопрос, звоните по номеру <a href="tel:+74951090290" class="result__telnum">+7 (495) 109-02-90</a></div>

		<div class="icons-wrap">
			<div class="row">
				<div class="col-12 col-xl-4">
					<div class="icons-block">
						<div class="icons-block__img"><img src="images/last/wallet.svg" alt=""></div>
						<div class="icons-block__title">Мы не берем аванс за нашу работу</div>
						<div class="icons-block__txt">Коммерческое предложение в формате PDF со стоимостью ремонтных работ и материалов </div>
					</div>
				</div>
				<div class="col-12 col-xl-4">
					<div class="icons-block">
						<div class="icons-block__img"><img src="images/last/clock.svg" alt=""></div>
						<div class="icons-block__title">Сроки работ фиксируем в договоре</div>
						<div class="icons-block__txt">Даже в случае задержки на 1 день мы несем перед вами материальную ответственность</div>
					</div>
				</div>
				<div class="col-12 col-xl-4">
					<div class="icons-block">
						<div class="icons-block__img"><img src="images/last/hand.svg" alt=""></div>
						<div class="icons-block__title">Стоимость работ не изменяется</div>
						<div class="icons-block__txt">Все условия доступно изложены в договоре: нет никаких скрытых расчетов и платежей</div>
					</div>
				</div>
			</div>
		</div>
		

	</div><!-- /result -->


</main>



</div>

<div class="footer">
	<footer class="container">
		<div class="row footer__row">
			<div class="footer__left col-12 col-xl-3">© 2018 Аландр Групп</div>
			<div class="footer__center col-12 col-xl-6">
				<a href="#" id="js-conf-link">Политика конфидециальности</a>
			</div>
			<div class="col-12 col-xl-3">
				<div class="footer__right">
					г. Москва, ул. Сосинская, д.43<br>
					Пн-пт, с 9.00 до 18.00
				</div>
			</div>
		</div>
	</footer>
</div>




<div style="display: none;">
	<div class="box-modal" id="call-modal">
		<div class="box-modal_close arcticmodal-close"></div>
		<div class="modal-title">Заказать обратный звонок</div>
		<div class="modal-txt">Оставьте свой номер — и специалист компании свяжется с вами в течение 10 минут</div>
		<form action="#" class="modal-form ajaxmail">
			<input type="tel" value="" name="recall-tlf"  placeholder="Введите Ваш телефон" required>
			<input type="hidden" value="Заказ обратного звонка" name="asktype">
			<input type="submit" value="Заказать обратный звонок" class="button">
			<div class="form-error"></div>
		</form>
	</div>
</div>



	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
	<script src="js/jquery.inputmask.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/main.js"></script>

<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '3623f793df326d1e0402607ef7d7d13a');
</script>



</body>

<!-- Mirrored from alandr-remont.ru/quiz/ok.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Oct 2018 12:25:12 GMT -->
</html>