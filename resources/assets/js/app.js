require('./bootstrap');
require('owl.carousel2');
require('magnific-popup');
require('./jquery.maskedinput');
require('./menu');
require('jquery.scrollto');
import Cookies from 'js-cookie';

$.extend(true, $.magnificPopup.defaults, {
    tClose: 'Закрыть (Esc)',
    tLoading: 'Загрузка...',
    gallery: {
        tPrev: 'Предыдущая (стрелка влево)',
        tNext: 'Следующая (стрелка вправо)',
        tCounter: '%curr% из %total%'
    },
    image: {
        tError: '<a href="%url%">Изображение</a> не может быть загружено.'
    },
    ajax: {
        tError: '<a href="%url%">Содержимое</a> не может быть загружено.'
    },
    mainClass: 'mfp-fade'
});

$('.location-link').click(function () {
    $.magnificPopup.open({
        items: {
            src: $('#location-popup'),
            type: 'inline'
        }
    });
});

$('a', '#location-popup').click(function (e) {
    e.preventDefault();
    let location = $(this).data('location');
    if (location !== 'undefined') {
        Cookies.set('location', location, {domain: domain});
    }
    else {
        Cookies.remove('location');
    }
    window.location.reload();
});

$('a[href*="/#"]').click(function (e) {
    e.preventDefault();
    let href = $(this).attr('href');
    href = href.slice(href.indexOf('#'));
    $.scrollTo($(href).offset().top - 52, 500);
});

let pos = {};

$(window).on('load resize', function () {
    pos = {};
    $('section[id]').each(function () {
        pos[$(this).attr('id')] = $(this).offset().top;
    });
});

$(window).on('load resize scroll', function () {
    let offset = $(window).scrollTop();
    let closest = 100000000;
    let id = 'main';
    for(let i in pos) {
        let close = Math.abs(offset - pos[i]);
        if(close < closest) {
            closest = close;
            id = i;
        }
    }
    $('li', '#navbar-navigation-menu').removeClass('active');
    $('a[href$=' + id + ']').parent().addClass('active');
});

$('#phone').mask('+7 (999) 999-99-99');