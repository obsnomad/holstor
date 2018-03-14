/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 42);
/******/ })
/************************************************************************/
/******/ ({

/***/ 42:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(43);


/***/ }),

/***/ 43:
/***/ (function(module, exports) {

var map = void 0,
    place = void 0,
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
    var style = $(this).data('style');
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

/***/ })

/******/ });