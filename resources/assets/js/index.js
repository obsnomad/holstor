let map,
    place,
    activeLocation = $('li.active', '.locations').first(),
    coords = [activeLocation.data('lat'), activeLocation.data('lon')];
if (activeLocation.length === 1) {
    ymaps.ready(function () {
        map = new ymaps.Map('map', {
            center: coords,
            zoom: 17,
            controls: ['zoomControl', 'geolocationControl']
        });
        place = new ymaps.Placemark(coords, {
            hintContent: activeLocation.data('text')
        }, {
            preset: 'islands#redIcon'
        });
        map.behaviors.disable('scrollZoom');
        map.geoObjects.add(place);
    });
}

$('li', '.locations').click(function (e) {
    e.preventDefault();
    map.setCenter([$(this).data('lat'), $(this).data('lon')]);
    place.geometry.setCoordinates([$(this).data('lat'), $(this).data('lon')]);
    $('li.active', '.locations').removeClass('active');
    $(this).addClass('active');
});

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

$('form', '.form').submit(function () {
    $.post($(this).attr('action'), $(this).serialize(), function (result) {
        console.log(result);
    }).fail(function () {
        alert('Не удалось отправить запрос. Пожалуйста, попробуйте еще раз.');
    });
    return false;
});