<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Холстор - печать фото на холсте')</title>
    <meta name="description" content="@yield('description', 'Холстор - печать фото на холсте. Более 12 различных стилей оформления. Быстрое изготовление и доставка.')">
    <meta name="keywords"
          content="@yield('keywords', 'Холстор, печать на холсте, фото, печать фото, фото на холсте, печать на кружках, печать на футболках')">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Styles -->
    <link href="{{ asset('css/app.css?v=2') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.min.css') }}" rel="stylesheet">
@stack('css')

<!-- Scripts -->
    <script>
        window.Laravel = @json([
            'csrfToken' => csrf_token(),
        ]);
    </script>
</head>
<body>

@php
    /** @var \App\Services\Location $location */
    /** @var \Illuminate\Support\Collection|\App\Services\Location[] $locations */
@endphp

<header>
    <section id="main" class="header-additional">
        <div class="container">
            <div class="navbar-right">
                <div>
                    <a href="#" class="location-link">{{ $location->name ?: 'Выбрать город' }}</a>
                </div>
                @if($location->vk)
                    <div>
                        <a href="https://vk.com/{{ $location->vk }}" target="_blank" class="fab fa-vk"></a>
                    </div>
                @endif
                @if($location->instagram)
                    <div>
                        <a href="https://instagram.com/{{ $location->instagram }}" target="_blank"
                           class="fab fa-instagram"></a>
                    </div>
                @endif
                @if($location->phone)
                    <div>
                        <span class="fa fa-phone"></span> {{ $location->phone }}
                    </div>
                @endif
            </div>
        </div>
    </section>

    <div class="navbar navbar-default" data-fixable>
        <div class="container">
            <nav>
                <a href="{{ route('index') }}">
                    <img src="images/logo.svg" alt="Квест-проект «Темная комната»" class="logo"/>
                </a>
                {!! $menuIcon->asUl(['class' => 'navbar-right']) !!}
                {!! $menuMain->asUl(['id' => 'navbar-navigation-menu', 'class' => 'navbar-navigation-menu']) !!}
            </nav>
        </div>
    </div>
</header>

<div class="body-container">
    @yield('content')
</div>

<footer>
    <div class="container">
        &copy; 2018 {{ ($date = date('Y')) > 2018 ? "- $date" : '' }} Холстор - ИП Дудина Анна Сергеевна
    </div>
</footer>

<div id="location-popup" class="popup mfp-hide">
    <ul>
        @foreach($locations as $loc)
            <li>
                <a href="{{ $loc->url }}" data-location="{{ $loc->code }}">{{ $loc->name }}</a>
            </li>
        @endforeach
        <li>
            <a href="{{ \Request::fullUrl() }}">Другой город</a>
        </li>
    </ul>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    var domain = '{{ '.' . env('APP_DOMAIN') }}';
</script>
@stack('js')
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47928425 = new Ya.Metrika({
                    id:47928425,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
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
<noscript><div><img src="https://mc.yandex.ru/watch/47928425" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
