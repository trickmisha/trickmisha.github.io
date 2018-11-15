<!DOCTYPE html>
<html lang="ru"><head>
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
<!-- <script charset="UTF-8" async="" src="http://cloud.roistat.com/dist/module.js"></script><script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script><script type="text/javascript">
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
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39344350" style="position:absolute; left:-9999px;" alt="" /></div></noscript> -->
<!-- /Yandex.Metrika counter -->
</head>
<body cz-shortcut-listen="true">

<div class="wrap">

<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-6 col-lg-4 col-xl-5">
				<a href="index.html" class="header__logo"><img src="images/logo3.svg" alt="" width="200px"></a>
				<div class="header__info">Профессиональная защита <i class="mob_hide"><br></i>от угона в Липецке</div>
			</div>
			<div class="col-6 col-lg-4 col-xl-4 header__features">
				<div class="header__feat header__feat-wallet">Без скрытых <br>наценок</div>
				<div class="header__feat header__feat-hand">Бессрочная <br>гарантия работ</div>
			</div>
			<div class="col-12 col-lg-4 col-xl-3 header__socwrap">
				<div class="header__soc">
					<a  title="WhatsApp" href="whatsapp://send?phone=79513006134" class="header__soc__wat"><img src="images/hde-watsup.svg" alt=""></a>
					<a title="Viber" href="viber://add?number=79513006134" class="header__soc__vib"><img src="images/hde-viber.svg" alt=""></a>
					<a href="http://telegram.me/nikolayvertiy" class="header__soc__tel" target="_blank"><img src="images/hde-telegram.svg" alt=""></a>
				</div>
				<div class="header__contacts">
					<a href="tel:+79513006134" class="header__contacts__tel">+7 (951) 300-61-34</a>
					<div class="header__contacts__time"><p>с 9:00 до 21:00 без выходных</p></div>
					<div class="header__contacts__link modal-id-open" data-modal-id="call-modal"><span>перезвоните мне</span></div>
				</div>
			</div>
		</div>
	</div><!-- /header -->
</header>

<main>
	<div class="result container">
		<div class="result__title">Благодарим за ответы</div>
		<div class="result__h2">Менеджер уже начал расчет стоимости ремонтных работ</div>
		<div class="result__line"></div>
		<div class="result__h3">Ваши индивидуальные скидки и бонусные материалы вы получите по почте</div>
		<div class="row">
			<div class="col-12 col-lg-4">
				<div class="result__feat">
					<div class="result__feat__img"><img src="images/1/paper1.png" alt=""></div>
					<div class="result__feat__txt">Коммерческое предложение в формате PDF со стоимостью ремонтных работ и материалов </div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="result__feat">
					<div class="result__feat__img"><img src="images/1/paper2.png" alt=""></div>
					<div class="result__feat__txt">Три дизайн-концепции вашего проекта для скромного, умеренного и неограниченного бюджета <span>Регулярная стоимость такой концепции - 500 руб. / м²</span></div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="result__feat result__feat-last">
					<div class="result__feat__img"><img src="images/1/bonus.png" alt=""></div>
					<div class="result__feat__txt">Скидка до 15% от стоимости работ и экономия до 30% от сметной стоимости материалов без потери качества <span>Благодаря более точному расчету материалов и оптимизации рабочей силы</span></div>
				</div>
			</div>
		</div>
	</div><!-- /result -->

<?php
$quest1 = "Ничего не введено";
$quest2 = "Ничего не введено";
$quest3 = "Ничего не введено";
$quest4 = "Ничего не введено";
$quest5 = "Ничего не введено";
if (isset($_POST['quest1'])) $quest1 = $_POST['quest1'];
if (isset($_POST['quest2'])) $quest2 = $_POST['quest2'];
if (isset($_POST['quest3'])) $quest3 = $_POST['quest3'];
if (isset($_POST['quest4'])) $quest4 = $_POST['quest4'];
if (isset($_POST['quest5'])) $quest5 = $_POST['quest5'];
?>

	<div class="endform container">
		<div class="endform__title">Если при расчете стоимости у менеджера возникнут вопросы, он вам презвонит по указанному номеру</div>
		<form action="ok.php" class="endform__form" method="post">
			<div class="endform__line">
				<input type="tel" name="phone" value="" placeholder="Введите ваш телефон" required="">
				<span class="endform__tip">Все скидки и бонусы закрепляются за указанным номером телефона</span>
			</div>
			<div class="endform__line">
				<input type="email" name="email" value="" placeholder="Введите ваш E-mail" required="">
				<span class="endform__tip">На указанный эл.адрес придут все бонусные материалы</span>
			</div>
			<div class="endform__line endform__submit">
				<input type="hidden" name="quest1" value="<?php echo $quest1 ?>">
				<input type="hidden" name="quest2" value="<?php echo $quest2 ?>">
				<input type="hidden" name="quest3" value="<?php echo $quest3 ?>">
				<input type="hidden" name="quest4" value="<?php echo $quest4 ?>">
				<input type="hidden" name="quest5" value="<?php echo $quest5 ?>">
				<input type="submit" value="Получить материалы" class="button endform-button">
				<label for="endform__access">
					<input id="endform__access" checked="" required="" type="checkbox" name="endform-access" value="yes">
					<span>Я принимаю условия передачи информации</span>
				</label>
			</div>
		</form>
	</div><!-- /endform -->

</main>

</div>

<div class="footer">
    <footer class="container">
        <div class="row footer__row">
            <div class="footer__left col-12 col-lg-3">© 2018 Аландр Групп</div>
            <div class="footer__center col-12 col-lg-6">
                <a href="#" id="js-conf-link">Политика конфидециальности</a>
            </div>
            <div class="col-12 col-lg-3">
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
		<form action="ok.php" class="modal-form ajaxmail" method="post">
			<input type="tel" value="" name="recall-tlf" placeholder="Введите Ваш телефон" required="">
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


<div class="roistat-lh-hidden"></div><div class="roistat-lh-hidden" style="left:20px; top: 0px; "><div><div class="roistat-lh-head"><a class="roistat-lh-close" id="roistat-lh-close">×</a><div class="roistat-lh-head-text" id="roistat-lh-head"><div class="roistat-lh-title roistat-lh-text">У вас есть вопросы? Мы можем позвонить вам абсолютно бесплатно!</div><div class="roistat-lh-sub-title roistat-lh-text">Мы свяжемся с вами и ответим на любые возникшие вопросы!</div></div><span class="roistat-lh-clear"></span></div><div class="roistat-lh-form" id="roistat-lh-form"><div><table class="roistat-lh-table"><tbody><tr class="roistat-lh-mobile"><td class="roistat-lh-mobile"><table class="roistat-lh-inner-table"><tbody><tr><td><label for="roistat-lh-phone-input" class="roistat-lh-text-label roistat-lh-text-label-contact">Ваш телефон</label></td></tr><tr><td><input type="text" id="roistat-lh-phone-input" class="roistat-lh-phone-input roistat-lh-input" autofocus="" onkeypress="window.roistatRenderPhoneMask(this, '');" onkeyup="window.roistatRenderPhoneMask(this, '');" onchange="window.roistatRenderPhoneMask(this, '');" onfocus="window.roistatRenderPhoneMask(this, '');"></td></tr></tbody></table></td><td class="roistat-lh-mobile roistat-lh-submit-container"><table class="roistat-lh-inner-table"><tbody><tr><td><label class="roistat-lh-text roistat-lh-btn-fix">.</label></td></tr><tr><td><input type="submit" id="roistat-lh-submit" class="roistat-lh-submit" value="Позвоните мне →"></td></tr></tbody></table></td></tr></tbody></table></div></div><div id="roistat-lh-thank-you" class="roistat-lh-thank-you roistat-lh-hidden">
            Спасибо! Мы свяжемся с вами через некоторое время        </div><div class="roistat-lh-copyright">
        Powered by <a href="http://roistat.com/features/lead-hunter?rs=leadhunter_unknown_3623f793df326d1e0402607ef7d7d13a" target="_blank">roistat.com</a></div></div></div></body></html>
</html>