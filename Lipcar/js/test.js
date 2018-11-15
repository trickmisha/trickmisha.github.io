(function ($){
    $(document).ready(function(e) {
        //Слайдер вопросов и ответов
        var testSwiper = new Swiper('#jsMainslider', {
            // Navigation arrows
            navigation: {
              nextEl: '.quest__next a',
            },
            hashNavigation: {
               watchState: true,
            },
            spaceBetween: 0,
            loop: false,
            speed: 0,
            freeModeMomentum: false,
            simulateTouch: false,
            shortSwipes:false,
            longSwipes:false,
            followFinger:false,
            allowSwipeToPrev:false,
            allowSwipeToNext:true,
            hashnav:true,
            autoHeight:true,
        });

        // Простановка значений при переключении
        testSwiper.on('slideChangeTransitionEnd', function () {
            $('.js-questnum').text(testSwiper.activeIndex + 1);
            //$('html, body').animate({ scrollTop: $('.questnum').offset().top }, 100);
        });

// Переключение слайдов по кликам
$('.questnum__visual span').on('click', function(e) {

if( $(this).is('.js-pass') ){
            var clickNum = $(this).index();
            testSwiper.slideTo(clickNum);
}

});

        // Появление кнопки далее
        $('.quest__block input[type=radio]').on('change', function(e) {
            $(this).closest('.quest').find('.quest__next').css({ "visibility": "visible" });
            $('.js-counter').text(testSwiper.activeIndex + 1);
            $('.questnum__visual span').eq(testSwiper.activeIndex).addClass('js-pass');
            $('.sidebar__varible').slideDown(100);
            $(".sidebar__bonus").hide();
            $(".sidebar__bonus" + testSwiper.activeIndex ).show();

            //Анимация увеличения (отключено)
            let discuontTrigg = false;
            if(discuontTrigg){
                $('.sidebar__counter').animate({
                    'font-size': "17px",
                    'color': "#000",
                }, 100, function(){
                    $('.sidebar__counter').animate({'font-size': "15px"}, 100);
                });
                discuontTrigg = true;
            }
        });
    });
})(jQuery);