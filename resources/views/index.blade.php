@php
    /** @var \App\Services\Location $location */
@endphp

@extends('layouts.app')

@section('content')

    <section class="main-slider">
        <div class="container">
            <div class="col-lg-4 col-lg-offset-7 col-md-5 col-md-offset-6 col-xs-12">
                <div class="overlay">
                    <h1>Холстор — мастерская фото на холсте</h1>
                    <p>В нашей мастерской вы можете заказать печать фотографий на холсте в уникальном стиле и другие
                        сувениры для близких и друзей!</p>
                    <a href="/#contacts" class="btn btn-lg btn-primary">Получить макет</a>
                </div>
            </div>
        </div>
    </section>

    <section class="features container pad">
        <div class="col-md-4 col-xs-12 features-item">
            <div class="features-item-icon">
                <img src="/images/features/edit-tools.svg" alt="Стили">
            </div>
            <div class="features-item-text">
                <h3>
                    Более 12 стилей обработки фото
                </h3>
                <p>
                    Вы можете как заказать печать оригинала фотографии, так и выбрать один из
                    вариантов стилей из каталога.
                </p>
                <a href="/#prices" class="btn btn-primary">
                    Выбрать стиль
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 features-item">
            <div class="features-item-icon">
                <img src="/images/features/happy.svg" alt="Отзывы">
            </div>
            <div class="features-item-text">
                <h3>
                    Более 1000 довольных клиентов
                </h3>
                <p>
                    Множество людей доверяют нам и заказывают печать фото на холсте всегда у нас.
                </p>
                <a href="/#reviews" class="btn btn-primary">
                    Посмотреть отзывы
                </a>
            </div>
        </div>
        <div class="col-md-4 col-xs-12 features-item">
            <div class="features-item-icon">
                <img src="/images/features/fast-delivery.svg" alt="Стили">
            </div>
            <div class="features-item-text">
                <h3>
                    Изготовление картины на следующий день
                </h3>
                <p>
                    Если вам нужно сделать подарок, а времени на выбор уже не осталось, то мы можем
                    оперативно и качественно изготовить картину для вас.
                </p>
                <a href="/#contacts" class="btn btn-primary">
                    Оставить заявку
                </a>
            </div>
        </div>
    </section>

    <section class="block-green before-after pad">
        <div class="container">
            <div class="col-sm-5 col-xs-12">
                <span>Фотография</span>
                <img src="/images/beforeafter/before.jpg" alt="">
            </div>
            <div class="col-sm-2 hidden-xs">
                <div class="fa fa-arrow-right"></div>
            </div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                <div class="fa fa-arrow-down"></div>
            </div>
            <div class="col-sm-5 col-xs-12">
                <span>Картина</span>
                <img src="/images/beforeafter/after.jpg" alt="">
            </div>
            <div class="before-after-promo">
                <h2>
                    Подарите эмоции
                </h2>
                <div>
                    с помощью оригинального подарка — портрета на холсте по фотографии.
                </div>
                <a href="/#contacts" class="btn btn-lg btn-primary">Получить макет</a>
            </div>
        </div>
    </section>

    <section id="prices" class="pad-top">
        <div class="container">
            <h2 class="text-center">Популярные размеры</h2>
            <div class="popular">
                {!! $popular !!}
            </div>
        </div>
    </section>

    <section class="block-green prices pad">
        <div class="container">
            <h2 class="text-center">Размеры и цены</h2>
            <div class="clearfix">
                @foreach($location->prices as $type => $prices)
                    <div class="col-md-4 col-xs-12">
                        <table class="table table-bordered">
                            <tr>
                                <td colspan="2">
                                    <h3>{{ $prices->name }}</h3>
                                    <div class="price-frame price-frame-{{ $type }}"></div>
                                </td>
                            </tr>
                            @foreach($prices->items as $price)
                                <tr>
                                    <td>
                                        {{ $price->size }}
                                        @if($price->hit)
                                            <div class="badge">Хит!</div>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $price->price }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endforeach
            </div>
            <div class="col-md-8 col-md-offset-2 col-xs-12 prices-description text-center">
                По вашему желанию мы можем сделать любой размер картины!<br/>
                Также <u>дополнительно</u> вы можете заказать индивидуальное оформление в стиле из каталога,
                покрытие лаком и багетную раму.
            </div>
            <div class="col-xs-12 text-center">
                <h3>При онлайн заказе скидка 100 рублей!</h3>
                <a href="/#contacts" class="btn btn-lg btn-primary">Заказать картину</a>
            </div>
        </div>
    </section>

    <section class="styles pad">
        <div class="container">
            <h2 class="text-center">Стили обработки фото</h2>
            <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                Вы можете выбрать один из вариантов оформления в дополнение к печати.<br/>
                Нажмите на картинку, чтобы узнать о стиле подробнее.
            </div>
            <div class="clearfix"></div>
            <div class="styles-items clearfix">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="styles-item" data-style="1">
                        <div>
                            <span>Комикс</span>
                            <img src="/images/styles/1.jpg" alt="Комикс">
                            <span>Подробнее</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="styles-item" data-style="2">
                        <div>
                            <span>Гранж</span>
                            <img src="/images/styles/2.jpg" alt="Гранж">
                            <span>Подробнее</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="styles-item" data-style="3">
                        <div>
                            <span>Полиарт</span>
                            <img src="/images/styles/3.jpg" alt="Полиарт">
                            <span>Подробнее</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="styles-item" data-style="4">
                        <div>
                            <span>Дрим-арт</span>
                            <img src="/images/styles/4.jpg" alt="Дрим арт">
                            <span>Подробнее</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="styles-item" data-style="5">
                        <div>
                            <span>Поп-арт</span>
                            <img src="/images/styles/5.jpg" alt="Поп арт">
                            <span>Подробнее</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="styles-item" data-style="6">
                        <div>
                            <span>Масло</span>
                            <img src="/images/styles/6.jpg" alt="Масло">
                            <span>Подробнее</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="styles-item" data-style="7">
                        <div>
                            <span>Смена образа</span>
                            <img src="/images/styles/7.jpg" alt="Смена образа">
                            <span>Подробнее</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="styles-item" data-style="8">
                        <div>
                            <span>Акварель</span>
                            <img src="/images/styles/8.jpg" alt="Акварель">
                            <span>Подробнее</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="styles-popup" class="popup mfp-hide">
        <div data-style="1">
            <h3>Комикс <span>600 руб.</span></h3>
            <div class="styles-examples">
                <div>
                    <img src="/images/styles/1.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/1.2.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/1.1.jpg" alt="">
                </div>
            </div>
            <p>
                Мы вручную прорисуем ваше фото и подберем крутейший фон в стиле комиксов.<br/>
                Это решение отлично подойдет, если фото низкого разрешения.
            </p>
        </div>
        <div data-style="2">
            <h3>Гранж-арт <span>500 руб.</span></h3>
            <div class="styles-examples">
                <div>
                    <img src="/images/styles/2.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/2.1.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/2.2.jpg" alt="">
                </div>
            </div>
            <p>
                Яркие, сочные цвета стиля гранж-арт украсят любой, даже самый простой, интерьер.
            </p>
        </div>
        <div data-style="3">
            <h3>Полиарт <span>500 руб.</span></h3>
            <div class="styles-examples">
                <div>
                    <img src="/images/styles/3.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/3.1.jpg" alt="">
                </div>
            </div>
            <p>
                Полигональные иллюстрации — это картинки состоящие из геометрических фигур, а именно из треугольников и
                кубов.
                Смотрится интересно и необычно. Хорошо привлекает внимание.
            </p>
        </div>
        <div data-style="4">
            <h3>Дрим-арт <span>500 руб.</span></h3>
            <div class="styles-examples">
                <div>
                    <img src="/images/styles/4.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/4.1.jpg" alt="">
                </div>
            </div>
            <p>
                Лёгкий, романтичный стиль отлично подойдет для портретов юных девушек, детей и молодых семей.
                Однако и люди более старшего возраста также найдут его привлекательным: картины, выполненные в стиле
                дрим-арт, выглядят по-настоящему уютно.
            </p>
        </div>
        <div data-style="5">
            <h3>Поп-арт <span>600 руб.</span></h3>
            <div class="styles-examples">
                <div>
                    <img src="/images/styles/5.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/5.1.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/5.2.jpg" alt="">
                </div>
            </div>
            <p>
                Поп-арт - дословно «популярно исскуство».
                Действительно популярное уже более 5 лет, никак не потерявшее свою актуальность
                и самый востребованный вариант оформления, уже превращающийся в классику.
            </p>
        </div>
        <div data-style="6">
            <h3>Масло <span>500 руб.</span></h3>
            <div class="styles-examples">
                <div>
                    <img src="/images/styles/6.jpg" alt="">
                </div>
            </div>
            <p>
                Крупные и сочные мазки - главная отличительная черта картин маслом.
                Такой стиль оформления приблизит вашу фотографию к работам великих мастеров Возрождения.
            </p>
        </div>
        <div data-style="7">
            <h3>Смена образа <span>500 руб.</span></h3>
            <div class="styles-examples">
                <div>
                    <img src="/images/styles/7.jpg" alt="">
                </div>
                <div>
                    <img src="/images/styles/7.1.jpg" alt="">
                </div>
            </div>
            <p>
                Вы давно мечтали почувствовать себя в роли короля?
                Или решили хорошенько удивить ваших друзей крутым подарком?
                Возможна любая смена вашего образа – от президента и короля до футболистов и балерин.
                Мы подберем вам несколько вариантов. Вы точно останетесь довольны исполнением!
            </p>
        </div>
        <div data-style="8">
            <h3>Акварель <span>500 руб.</span></h3>
            <div class="styles-examples">
                <div>
                    <img src="/images/styles/8.jpg" alt="">
                </div>
            </div>
            <p>
                Прозрачные, воздушные и безумно красивые портреты, выполненные в технике
                акварели не оставят равнодушными ни одного гостя в доме, где висит такая картина.
            </p>
        </div>
        <a href="/#contacts" class="btn btn-lg btn-primary">Перейти к оформлению</a>
    </div>

    <section class="steps pad">
        <div class="container">
            <h2 class="text-center">Как мы делаем картины</h2>
            <div class="steps-items clearfix">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="/images/steps/n1.png" alt="">
                    Вы присылаете фото
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="/images/steps/n2.png" alt="">
                    Подготавливаем фото к печати
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="/images/steps/n3.png" alt="">
                    Печатаем картину на натуральном хлопковом холсте
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="/images/steps/n4.png" alt="">
                    Аккуратно натягиваем картину на сосновый подрамник
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="/images/steps/n5.png" alt="">
                    Устанавливаем крепление
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="/images/steps/n6.png" alt="">
                    Тщательно упаковываем
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <img src="/images/steps/n7.png" alt="">
                    Отдаем вам готовую картину
                </div>
            </div>
        </div>
    </section>

    <section class="work">
        <div class="container-fluid">
            <h2 class="text-center">Наши магазины и производство</h2>
        </div>
        <div id="work-carousel" class="owl-carousel owl-theme">
            @foreach($work as $path)
                <div class="work-carousel-item" style="background-image: url('{{ $path }}');"></div>
            @endforeach
        </div>
    </section>

    <section id="reviews" class="block-green pad">
        <div class="container">
            <h2 class="text-center">
                Более 1000 довольных клиентов
            </h2>
            <div id="clients-carousel" class="owl-carousel owl-theme">
                @foreach($clients as $path)
                    <div class="clients-carousel-item" style="background-image: url('{{ $path }}');"></div>
                @endforeach
            </div>
            <div id="reviews-carousel" class="owl-carousel owl-theme">
                @foreach($reviews as $path)
                    <img src="{{ $path }}" alt="">
                @endforeach
            </div>
        </div>
    </section>

    <section id="contacts">
        <div class="form pad">
            <div class="container">
                <h2 class="text-center">
                    Удивите себя и своих близких!
                </h2>
                <p>
                    Фото на холсте это стильно, модно и оригинально.<br/>
                    Заполните форму и получите макет вашей будущей картины!<br/>
                    При онлайн заявке скидка на изготовление 100 рублей!
                </p>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
                    <form action="{{ route('order') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Ваше имя</label>
                            <input type="text" class="form-control" id="name" name="name"/>
                        </div>
                        <div class="form-group">
                            <label for="phone">Ваш телефон <span>*</span></label>
                            <input type="text" class="form-control input-phone" id="phone" name="phone" required/>
                        </div>
                        <div class="form-group">
                            <label for="email">Ваш Email</label>
                            <input type="email" class="form-control" id="email" name="email"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Получить макет</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if($location->coords)
        <section class="map">
            <div class="map-content">
                <div class="container">
                    <div class="col-sm-4">
                        <h2>Холстор {{ $location->nameForm ? "в {$location->nameForm}" : '' }}</h2>
                        @if($location->address)
                            <p>
                                {{ $location->address }}
                            </p>
                        @endif
                        @if($location->phone)
                            <p>
                                <b>Телефон:</b> <span class="text-nowrap">{{ $location->phone }}</span>
                            </p>
                        @endif
                        @if($location->schedule)
                            <p>
                                <b>Режиме работы:</b> {{ $location->schedule }}
                            </p>
                        @endif
                        <div>
                            @if($location->vk)
                                <a href="https://vk.com/{{ $location->vk }}" target="_blank" class="fab fa-vk"></a>
                            @endif
                            @if($location->instagram)
                                <a href="https://instagram.com/{{ $location->instagram }}" target="_blank"
                                   class="fab fa-instagram"></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>
        </section>
    @endif

    @if(!$location->id)
        <section id="franch" class="franch pad">
            <div class="container">
                <h2 class="text-center">Откройте свой «Холстор»!</h2>
                <p class="text-center">
                    Если в вашем городе еще не открылся «Холстор», то вы можете сделать это сами!<br/>
                    Для этого достаточно заполнить форму, и мы вышлем вам презентацию.
                </p>
                <div class="clearfix pad-top">
                    <div class="hidden-xs col-sm-6 col-md-4 col-md-offset-2">
                        <img src="/images/franch.jpg" alt="">
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <form action="{{ route('franch') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="franch-name">Ваше имя <span>*</span></label>
                                <input type="text" class="form-control" id="franch-name" name="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="franch-city">Ваш город <span>*</span></label>
                                <input type="text" class="form-control" id="franch-city" name="city" required/>
                            </div>
                            <div class="form-group">
                                <label for="franch-email">Ваш Email <span>*</span></label>
                                <input type="email" class="form-control" id="franch-email" name="email" required/>
                            </div>
                            <div class="form-group">
                                <label for="franch-phone">Ваш телефон <span>*</span></label>
                                <input type="text" class="form-control input-phone" id="franch-phone" name="phone"
                                       required/>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Получить макет</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($location->seo)
        <section class="block-gray pad">
            <div class="container">
                {!! $location->seo !!}
            </div>
        </section>
    @endif
@endsection

@push('js')
    <script>
        var coords = @json($location->coords);
    </script>
    <script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script src="{{ asset('js/index.js') }}"></script>
@endpush