(function ($){

    function okmodal(){
        $('<div class="box-modal" id="ok-modal"><div class="box-modal_close arcticmodal-close"></div><div class="modal-title">Заявка отправлена</div><div class="modal-txt">Специалист компании свяжется с вами в течение 10 минут</div>').arcticmodal();
    }
    $(document).ready(function(e) {
        $('#js-conf-link').on('click', function(e) {
            e.preventDefault();
            $.arcticmodal({
                type: 'ajax',
                url: 'js/confidtxt.html',
            });
        });
        // Маска ввода номера телефона и карты
        $("input[type=tel]").inputmask("+7(999)999-99-99");



        // модальные окна открываемые по ID
        $('.modal-id-open').on('click', function(e) {
            e.preventDefault();
            $.arcticmodal('close');
            var modalId = '#' + $(this).data('modal-id');
            $(modalId).arcticmodal();
        });

    });


    //Форма всплывающего окна
    $(".ajaxmail").on("submit", function(e){
        e.preventDefault();
        $('.form-error').html("");
        var form_data = $(this).serialize(); //собераем все данные из формы
        $.ajax({
            type: "POST", //Метод отправки
            url: "mail.php", //путь до php фаила отправителя
            data: form_data,
            beforeSend: function(){
                $('.form-error').html('<img id="imgcode" src="images/loader.gif">');
            },
            success: function(data) {
                //код в этом блоке выполняется при успешной отправке сообщения
                if(data){
                    $('.form-error').html("").html(data);
                }
                else{
                    window.location.replace('ok.html');
                }
            },
        });
    });

    //Форма в сайдбаре
    $("#js-sidebarForm").on("submit", function(e){
        e.preventDefault();
        $('.form-error').html("");

        //Проверка галочки
        $('.accepter', this).css({ "color": "#d8d8d8" });
        if( !( $('.accepter input').is(":checked") ) ){
            $('.accepter', this).css({ "color": "red" });
        }
        else{
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
                type: "POST", //Метод отправки
                url: "mail.php", //путь до php фаила отправителя
                data: form_data,
                beforeSend: function(){
                    $('.form-error').html('<img id="imgcode" src="images/loader.gif">');
                },
                success: function(data) {
                    //код в этом блоке выполняется при успешной отправке сообщения
                    if(data){
                        $('.form-error').html("").html(data);
                    }
                    else{
                        window.location.replace('ok.html');
                    }
                },
            });
        } // else
    });




})(jQuery);