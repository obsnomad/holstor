let alertify = require('alertify.js');

let map,
    place;
if($('#map').length > 0) {
    ymaps.ready(function () {
        map = new ymaps.Map('map', {
            center: coords,
            zoom: 16,
            controls: ['zoomControl', 'geolocationControl']
        });
        place = new ymaps.Placemark(coords);
        map.behaviors.disable('scrollZoom');
        map.geoObjects.add(place);
    });
}

$('.styles-item').click(function (e) {
    e.preventDefault();
    let style = $(this).data('style');
    $('#styles-popup > div').hide();
    $('div[data-style=' + style + ']', '#styles-popup').show();
    $.magnificPopup.open({
        items: {
            src: $('#styles-popup'),
            type: 'inline'
        }
    });
});

$('#clients-carousel, #reviews-carousel').each(function () {
    $(this).owlCarousel({
        loop: true,
        items: 4,
        slideBy: 4,
        margin: 20,
        nav: true,
        navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
        dots: false,
        responsive: {
            0: {
                items: 1,
                slideBy: 1
            },
            480: {
                items: 3,
                slideBy: 3
            },
            768: {
                items: 4,
                slideBy: 4
            }
        }
    });
});

$('#work-carousel').owlCarousel({
    loop: true,
    items: 1,
    slideBy: 1,
    margin: 0,
    nav: true,
    navText: ['<span class="fa fa-chevron-left"></span>', '<span class="fa fa-chevron-right"></span>'],
    dots: false,
    autoplay: true
});

$('form').submit(function () {
    $('button[type="submit"]').attr('disabled', true);
    $.post($(this).attr('action'), $(this).serialize(), function () {
        alertify.success('Спасибо, ваш запрос успешно отправлен! Мы позвоним или напишем вам в ближайшее время!');
        $('button[type="submit"]').removeAttr('disabled');
    }).fail(function () {
        alertify.error('Не удалось отправить запрос. Пожалуйста, попробуйте еще раз.');
        $('button[type="submit"]').removeAttr('disabled');
    });
    return false;
});
