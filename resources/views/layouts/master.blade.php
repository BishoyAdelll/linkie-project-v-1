<html lang="ru">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="format-detection" content="telephone=no"/>
        <title>Gsap</title>
        <link href="{{asset('assets/css/main.css')}}" rel="stylesheet"/>
        <link rel="shortcut icon" href="{{asset('assets/img/favicon_1.ico')}}" type="image/x-icon"/>
        <style>@keyframes animate-circle { from {  transform: scale(0);  opacity: 1; }  to {  transform: scale(1);  opacity: 0; } } #preloader { width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index: 999; background: #1C1C1C; background: linear-gradient(to right, rgba(36, 31, 31, 1) 0%, rgba(36, 31, 31, 1) 32%, rgba(74, 71, 70, 1) 100%); } .loader { position: fixed; top: 50%; left: 50%; height: 10rem; width: 10rem; transform: translateX(-50%) translateY(-50%); } .loader > .circle { position: absolute; height: inherit; width: inherit; background: #00a0c6; border-radius: 0; animation: animate-circle 2s cubic-bezier(.9, .24, .62, .79) infinite; } .loader > .circle:nth-of-type(1) { animation-delay: 0s; } .loader > .circle:nth-of-type(2) { animation-delay: calc(2s / -3); } .loader > .circle:nth-of-type(3) { animation-delay: calc(2s / -6); }</style>
    </head>
    <body>
        <div id="preloader">
            <div class="loader">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
        <main class="main main--home" style="opacity:0">
            <canvas class="noise" id="noise"></canvas>
            <div class="header">
                <div class="header__left">
                    <div class="header__letter">
                        <img src="{{asset('assets/img/Fav_Linkie.png')}}" alt="" width="50">

                    </div>
                    <div class="header__socials">
                        <a href="" target="_blank"> <svg>
                                <use xlink:href="{{asset('assets/./svg/sprite.svg#fb')}}"></use>
                            </svg></a>
                        <a href="" target="_blank"> <svg>
                                <use xlink:href="{{asset('assets/./svg/sprite.svg#tw')}}"></use>
                            </svg></a>
                        <a href="" target="_blank"> <svg>
                                <use xlink:href="{{asset('assets/./svg/sprite.svg#in')}}"></use>
                            </svg></a>
                    </div>
                </div>
                <div class="header__right">
                    <ul class="header__menu">
                        <li class="active">
                            <a class="js-scroll-link" href="javascript:;" data-link="0">HOME</a>
                        </li>
                        <li>
                            <a class="js-scroll-link" href="javascript:;" data-link="1">Projects</a>
                        </li>
                        <li>
                            <a class="js-scroll-link" href="javascript:;" data-link="2">Clients</a>
                        </li>
                        <li>
                            <a class="js-scroll-link" href="javascript:;" data-link="3">testimonials</a>
                        </li>
                        <li>
                            <a class="js-scroll-link" href="javascript:;" data-link="4">Team</a>
                        </li>
                        <li>
                            <a class="js-scroll-link" href="javascript:;" data-link="5">blog</a>
                        </li>
                        <li>
                            <a class="js-scroll-link" href="javascript:;" data-link="6">CONTACT</a>
                        </li>
                    </ul>
                    <div class="header__phone">
                        <a href="tel:+23155908368">+2(315) 590 83 68</a>
                    </div>
                </div>
            </div>
            <div class="scroll">
                <div class="home-page">
                    <div class="page-title show">
                        <ul>
                            <li>
                                <div class="title"><img src="{{asset('assets/img/logo_wide.png')}}" width="200" alt=""></div>
                                <div class="number">1.0</div>
                            </li>
                            <li>

                                <div class="title"><img src="{{asset('assets/img/logo_wide.png')}}" width="200" alt=""></div>
                                <div class="number">2.0</div>
                            </li>
                            <li>
                                <div class="title"><img src="{{asset('assets/img/logo_wide.png')}}" width="200" alt=""></div>
                                <div class="number">3.0</div>
                            </li>
                            <li>
                                <div class="title"><img src="{{asset('assets/img/logo_wide.png')}}" width="200" alt=""></div>
                                <div class="number">4.0</div>
                            </li>
                            <li>
                                <div class="title"><img src="{{asset('assets/img/logo_wide.png')}}" width="200" alt=""></div>
                                <div class="number">5.0</div>
                            </li>
                            <li>
                                <div class="title"><img src="{{asset('assets/img/logo_wide.png')}}" width="200" alt=""></div>
                                <div class="number">5.0</div>
                            </li>
                            <li>
                                <div class="title"><img src="{{asset('assets/img/logo_wide.png')}}" width="200" alt=""></div>
                                <div class="number">6.0</div>
                            </li>
                        </ul>
                        <canvas class="noise noise--inner" id="noise_menu"></canvas>
                    </div>
                    @yield('content')
                </div>
            </div>
        </main>
       
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>