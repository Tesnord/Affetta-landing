'use strict';

$(function () {
    var $container = $('.technology__item');
    var $drone = $('.technology__hov span');
    var droneCenter = {
        x: $drone.width() / 2,
        y: $drone.height() / 2
    };

    $container.on('mousemove', function (event) {
        $drone.css('transform', 'translate3d(' + (event.offsetX - droneCenter.x) + 'px, ' + (event.offsetY - droneCenter.y) + 'px, 0)');
    });

    $($container).hover(function () {
        $($container).removeClass('hov');
        $(this).addClass('hov');
    });

    var data = Array.from(document.querySelectorAll('.case .container .case__item')),
        step = 4,
        item = 0;

    data.slice(step).forEach(function (e) {
        return e.style.display = 'none';
    });
    item += step;

    document.querySelector('.case__btn').addEventListener('click', function (e) {
        var tmp = data.slice(item, item + step);
        tmp.forEach(function (e) {
            return e.style.display = 'block';
        });
        item += step;

        if (tmp.length < 4) this.remove();
    });

    $('.header__toggler').click(function () {
        $('.header').toggleClass('open');
        $('body').toggleClass('overfl');
    });
    $('.brands__btn').click(function () {
        $(this).parent().toggleClass('open');
    });

    $(".bg").paroller({factor: 0.4, type: 'foreground', direction: 'vertical'});

    if ($(window).width() > 991) {
        $(".brands__paroller").paroller({
            factor: 0.05,
            type: 'foreground',
            direction: 'horizontal',
            transition: 'transform .2s linear'
        });
    }

    $(".header__menu ul li a, .footer__menu ul li a").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 800);
        return false;
    });

    if ($(window).width() > 991) {
        $('.header__menu ul li a').click(function () {
            $('.header').removeClass('open');
            $('body').removeClass('overfl');
        });
    }

//# sourceMappingURL=app.js.map

    $('form').submit(function (e) {
        e.preventDefault()
        var _form = $(this);
        var _data = _form.serialize();
        $.ajax({
            method: 'POST',
            url: './mail.php',
            data: _data,
            beforeSend: function beforeSend() {
                _form.find('.mbtn').text('Отправка...');
            },
            success: function success(d) {
                _form.find('[type="text"]').val('');
                _form.find('[type="tel"]').val('');
                _form.find('[type="email"]').val('');
                _form.find('textarea').val('');
                _form.find('.mbtn').text('Отправить');
                $('.modal').modal('hide');
                setTimeout(function () {
                    $('#modalThank').modal('show');
                }, 200);
            }
        });
    });
    //# form handler
});





