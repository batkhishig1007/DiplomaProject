<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords"
        content="Мэдээ, Сүүлийн мэдээ мэдээлэл, Хэсгийн ахлагчид, Холбоо барих, ​© 2021 ЗОХИОГЧИЙН ЭРХ ХУУЛИАР ХАМГААЛАГДСАН. САЙТЫН БҮХ ЭРХИЙГ ХАН-УУЛ ДҮҮРЭГ 2-Р ХОРОО&nbsp;ЭЗЭМШИНЭ.">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Хорооны систем</title>
    <link rel="stylesheet" href="/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="/css/customer.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="/js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">





    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/khan-uula.png"
    }
    </script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Үндсэн">
    <meta property="og:type" content="website">
</head>

<body class="u-body">
    <header class="u-clearfix u-header u-sticky u-sticky-3306" id="sec-2f2a">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="/" class="u-image u-logo u-image-1" data-image-width="300" data-image-height="284">
                <img src="images/khan-uula.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                <div class="menu-collapse"
                    style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
                    <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                        href="#">
                        <svg>
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                        </svg>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                    <rect y="1" width="16" height="2"></rect>
                                    <rect y="7" width="16" height="2"></rect>
                                    <rect y="13" width="16" height="2"></rect>
                                </symbol>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                href="{{ route('news_categories.index') }}"> Мэдээлэл</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                    <!-- <li class="u-nav-item"><a class="u-button-style u-nav-link">Мэдээ Мэдээлэл</a>
                                    </li> -->
                                    @foreach ($menu_categories as $row)
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link"
                                            href="{{ route('news_categories.show',$row->id) }}">
                                            {{$row->category_name}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                href="{{route('taniltsuulga')}}" style="padding: 10px 36px;">Танилцуулга</a>
                        </li>
                        <li class="u-nav-item">
                            <a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                data-page-id="703620300" style="padding: 10px 36px;" href="/application">Санал,
                                гомдол</a>

                        </li>
                        <li class="u-nav-item"><a
                                class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                href="{{route('heltes')}}" style="padding: 10px 36px;">Хэлтэс</a>
                        </li>

                        <li class="u-nav-item">
                            <a class="u-border-2 u-border-active-grey-90 u-border-hover-grey-50 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90"
                                style="padding: 10px 36px;" @guest href="{{route('login') }}" @else href="/admin/posts"
                                @endguest>
                                @guest
                                Нэвтрэх
                                @else
                                Админ
                                @endguest
                            </a>
                        </li>


                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/{{route('home')}}"
                                        style="padding: 10px 36px;">Үндсэн</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{route('taniltsuulga')}}" style="padding: 10px 36px;">Танилцуулга</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/#carousel_bc4d"
                                        data-page-id="703620300" style="padding: 10px 36px;"
                                        href="{{ route('news_categories.index') }}"> Мэдээлэл</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                            @foreach ($menu_categories as $row)
                                            <li class="u-nav-item">
                                                <a class="u-button-style u-nav-link"
                                                    href="{{ route('news_categories.show',$row->id) }}">
                                                    {{$row->category_name}}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('heltes')}}"
                                        style="padding: 10px 36px;">Хэлтэс</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/application"
                                        style="padding: 10px 36px;">Санал,
                                        гомдол</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>


    @yield('content')


    <footer class="u-align-center u-clearfix u-footer u-white u-footer" id="sec-722b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1">Холбоо барих<br>
            </h1>
            <div class="u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <p class="u-text u-text-default u-text-2">Бидний хаяг</p>
                            <p class="u-text u-text-3"> Монгол улс, Улаанбаатар хот, Хан-Уул дүүрэг, 2-р хороо</p>
                            <a href="https://nicepage.com/static-site-generator"
                                class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-btn-1"><span
                                    class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 405.333 405.333"
                                        x="0px" y="0px">
                                        <path
                                            d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z">
                                        </path>
                                    </svg><img></span> &nbsp;+976 7011-7485
                            </a>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <p class="u-text u-text-default u-text-4">Бидэнтэй харилцах</p>
                            <p class="u-text u-text-5">
                                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                                    href="https://www.facebook.com/profile.php?id=100064750566804"><span
                                        class="u-icon u-icon-2"><svg class="u-svg-content" viewBox="0 0 32 32"
                                            style="width: 1em; height: 1em;">
                                            <g>
                                                <path
                                                    d="M32,30c0,1.104-0.896,2-2,2H2c-1.104,0-2-0.896-2-2V2c0-1.104,0.896-2,2-2h28c1.104,0,2,0.896,2,2V30z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M22,32V20h4l1-5h-5v-2c0-2,1.002-3,3-3h2V5c-1,0-2.24,0-4,0c-3.675,0-6,2.881-6,7v3h-4v5h4v12H22z"
                                                    fill="#FFFFFF" id="f"></path>
                                            </g>
                                        </svg><img></span>&nbsp;​Хан-Уул дүүргийн 2-р Хороо
                                </a>
                            </p>
                            <a href="https://nicepage.com/static-site-generator"
                                class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-btn-3"><span
                                    class="u-icon u-icon-3"><svg class="u-svg-content" viewBox="0 0 405.333 405.333"
                                        x="0px" y="0px" style="width: 1em; height: 1em;">
                                        <path
                                            d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z">
                                        </path>
                                    </svg><img></span>&nbsp;+976 7011-7485
                            </a>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <p class="u-text u-text-default u-text-6">Хандалтын тоо</p>
                            <p class="u-text u-text-7">Нийт:&nbsp;<br>Сар:<br>7 хоног:<br>Өнөөдөр:
                            </p>
                            <a href="https://nicepage.com/static-site-generator"
                                class="u-active-none u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-btn-4"><span
                                    class="u-icon u-icon-4"><svg class="u-svg-content" viewBox="0 0 405.333 405.333"
                                        x="0px" y="0px">
                                        <path
                                            d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z">
                                        </path>
                                    </svg><img></span> &nbsp;+976 7011-7485
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="u-text u-text-default u-text-8"> © 2021 ЗОХИОГЧИЙН ЭРХ ХУУЛИАР ХАМГААЛАГДСАН. САЙТЫН БҮХ ЭРХИЙГ
                ХАН-УУЛ ДҮҮРЭГ 2-Р ХОРОО&nbsp;ЭЗЭМШИНЭ.</h2>
        </div>
    </footer>
</body>

</html>