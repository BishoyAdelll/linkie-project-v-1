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
{{--    @dd($Blogs)--}}
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
                    <div class="scrollable">
                        <section class="home">
                            <div class="sticky-title">
                                <ul>
                                    <li>
                                        <div>my name is robert</div>
                                        <div>1.0</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="content__left">
                                    <div class="content__title">
                                        <div class="h1">
                                            <strong>We&apos;re the experts&nbsp;</strong>
                                            <strong spellcheck="false" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="9" medium-editor-index="f7ec20ba-88eb-1909-0842-697c867bc0e5" data-placeholder="Type your text" data-medium-focused="true">IN&nbsp;</strong>
                                        </div>
                                        <div class="h1">
                                            <strong>making work</strong>
                                        </div>
                                        <div class="h1">
                                            <strong>EASIER.</strong>
                                        </div>
                                    </div>
                                    <div class="content__description">
                                        <div class="small">
                                            <strong><p><strong>We take care of the work so you can focus on what you do best.</strong></p></strong>
                                        </div>
                                    </div>
                                    <div class="content__btn-block">
                                        <div class="content__btn-label small">Contact us</div>
                                        <a class="content__btn-btn btn btn--arrow js-scroll-link" href="#hireme" data-link="6"> <svg>
                                                <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                                            </svg></a>
                                    </div>
                                    <div class="home__numbers">
                                        <div class="home__number">
                                            <div class="home__number-digital" data-number="3">3</div>
                                            <div class="home__number-text small">Years <br/>experience
                                            </div>
                                        </div>
                                        <div class="home__number">
                                            <div class="home__number-digital" data-number="30">30</div>
                                            <div class="home__number-text small">Satisfied <br/> clients
                                            </div>
                                        </div>
                                        <div class="home__number">
                                            <div class="home__number-digital" data-number="63">63</div>
                                            <div class="home__number-text small">Projects <br/>Done
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content__right">
                                    <div class="home__circles">
                                        <div class="home__circles-lines"></div>
                                        <div class="home__circle home__circle--left">
                                            <img class="home__circle-img" src="{{asset('assets/img/business')}}" alt=""/>
                                        </div>
                                        <div class="home__circle home__circle--right">
                                            <div class="home__circle-text">
                                                <label class="input-file" for="brief">
                                                    <span>Fill out the <br/>brief to find out <br/>the cost</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="scrollable">
                        <section class="projects">
                            <div class="sticky-title">
                                <ul>
                                    <li>
                                        <div>Portfolio</div>
                                        <div>2.0</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="content__left">
                                    <div class="content__title">
                                        <div class="h1">projects</div>
                                    </div>
                                    <ul class="content__menu projects__menu">
                                        @foreach($Projects As $Project)
                                            <li class="active">
                                                <a href="javascript:;">{{$Project->name}}</a>
                                            </li>
                                        @endforeach


                                    </ul>
                                    <div class="content__btn-block">
                                        <div class="content__btn-label small">View all works</div>
                                        <a class="content__btn-btn btn btn--arrow" href="https://www.behance.net/" target="_blank" rel="nofollow"> <svg>
                                                <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="content__right">
                                    <div class="projects__blocks">
                                        @foreach($Projects  as $Project)
                                            <div class="projects__block active">
                                                <a href="#" target="_blank" rel="nofollow"><img src="/storage/{{$Project->image}}" alt=""/></a>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="scrollable">
                        <section class="awards">
                            <div class="sticky-title">
                                <ul>
                                    <li>
                                        <div>my awwards</div>
                                        <div>3.0</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="content__left">
                                    <div class="content__title">
                                        <div class="h1">Explore my</div>
                                        <div class="h1">clients</div>
                                    </div>
                                    <div class="content__description">
                                        <div class="small">Hello, my name is Pavel Suslov and i am UX/UI designer and front-end developer, im working via developer 9 years and i know all about design</div>
                                    </div>
                                    <div class="content__btn-block">
                                        <div class="content__btn-label small">View behance</div>
                                        <a class="content__btn-btn btn btn--arrow" href="#"> <svg>
                                                <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                                            </svg></a>
                                    </div>
                                </div>
                                <div class="content__right">
                                    <div class="content__subtitle">Our&nbsp;<span>Clients</span>
                                    </div>
                                    <div class="content__awards awards__list">
                                        @foreach($Clints as $Clint)
                                        <div class="content__award">
                                            <div class="content__award-img">
                                                <img src="/storage/{{$Clint->image}}" alt=""/>
                                            </div>
                                            <div class="content__award-title">
                                                <p>{{$Clint->name}}</p>
                                            </div>
                                            <div class="content__award-text small">{{$Clint->url}}</div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="scrollable">
                        <section class="testimonials">
                            <div class="sticky-title">
                                <ul>
                                    <li>
                                        <div>testimonials</div>
                                        <div>4.0</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content" style="background-image: url(../../../public/assets/images/testmonials-bg.png); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;">
                                <div class="content__left">
                                    <div class="content__title">
                                        <div class="h1">+250</div>
                                        <div class="h1">happy</div>
                                        <div class="h1">clients</div>
                                        <div class="small">I love my work and every project is my pride</div>
                                    </div>
                                    <div class="testimonials__clients">
                                        <div class="testimonials__client">
                                            <img src="{{asset('assets/img/client-1.png')}}" alt=""/>
                                        </div>
                                        <div class="testimonials__client">
                                            <img src="{{asset('assets/img/client-2.png')}}" alt=""/>
                                        </div>
                                        <div class="testimonials__client">
                                            <img src="{{asset('assets/img/client-3.png')}}" alt=""/>
                                        </div>
                                        <div class="testimonials__client">
                                            <img src="{{asset('assets/img/client-4.png')}}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="content__right">
                                    <div class="content__subtitle">
                                        <span>Creative</span> & dedicated is things that my studio brings for your business
                                    </div>
                                    <div class="content__slider slides testimonials__slider">
                                        <div class="slides__container">
                                            <div class="slides__inner">
                                                @foreach($Testimonials as $Testimonial)
                                                <div class="slide">
                                                    <div class="content__slider-text small">{!! $Testimonial->content !!}</div>
                                                    <div class="content__slider-name">{{$Testimonial->name}}</div>
                                                    <div class="content__slider-staff small">{{$Testimonial->position}}</div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="slides__controls">
                                            <button class="slides__btn slides__btn--prev btn btn--invert btn--arrow" id="prevButton">
                                                <svg>
                                                    <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                                                </svg>
                                            </button>
                                            <button class="slides__btn slides__btn--next btn btn--arrow" id="nextButton">
                                                <svg>
                                                    <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="scrollable">
                        <section class="experience">
                            <div class="sticky-title">
                                <ul>
                                    <li>
                                        <div>working experience</div>
                                        <div>5.0</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="content__bg" style="background-image: url(../../../public/assets/images/exp-bg.jpg);"></div>
                                <div class="content__left">
                                    <div class="content__title">
                                        <div class="h1">Education &</div>
                                        <div class="h1">experience</div>
                                    </div>
                                    <div class="content__description">
                                        <div class="small">I have been developing sites for 8 years and I know for sure the main trends and directions of modern design, you will get a decent result</div>
                                    </div>
                                    <div class="content__btn-block">
                                        <a class="content__btn-btn btn" href="#">resume</a>
                                    </div>
                                </div>
                                <div class="content__right">
                                    <div class="content__awards experience__list">
                                        @foreach($Teams as $Team)
                                        <div class="content__award">
                                            <div class="content__award-img">
                                                <img src="/storage/{{$Team->image}}" alt=""/>
                                            </div>
                                            <div class="content__award-title">
                                                <span class="small">{{$Team->created_at}}</span>
                                                <p>{{$Team->name}}</p>
                                            </div>
                                            <div class="content__award-text small">{{$Team->portfolio}}.</div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="scrollable">
                        <section class="news">
                            <div class="sticky-title">
                                <ul>
                                    <li>
                                        <div>from the blog</div>
                                        <div>5.0</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="content__left">
                                    <div class="content__title">
                                        <div class="h1">latest</div>
                                        <div class="h1">news</div>
                                        <div class="small">I love my work and every project is my pride</div>
                                    </div>
                                    <ul class="content__menu news__menu">
                                        @foreach($Blogs as $Blog)
                                            <li class="active">
                                                <a href="javascript:;">{{$Blog->name}}?</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="content__btn-block">
                                        <div class="content__btn-label small">View all works</div>
                                        <a class="content__btn-btn btn btn--arrow" href="blog.html" target="_blank"> <svg>
                                                <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                                        </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="content__right">
                                    <div class="news__blocks">
                                      @foreach($Blogs as $Blog)
                                            <div class="news__block active">
                                                <div class="news__block-info">
                                                    <div class="news__block-date small">{{$Blog->getFormatedDate()}}</div>
                                                    <div class="news__block-text small">{{$Blog->shortBody()}}</div>
                                                    <div class="news__block-number">({{$loop->index+1}})</div>
                                                </div>
                                                <div class="news__block-image">
                                                    <a href="{{$Blog->id}}" target="_blank"><img src="/storage/{{$Blog->image}}" alt=""/></a>
                                                </div>
                                            </div>
                                      @endforeach

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="scrollable" id="hireme">
                        <section class="contacts">
                            <div class="sticky-title">
                                <ul>
                                    <li>
                                        <div>contact</div>
                                        <div>6.0</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <div class="content__left">
                                    <div class="content__title">
                                        <div class="h1">Hire me</div>
                                        <div class="small">Enjoy coffe with me</div>
                                    </div>
                                    <ul class="content__menu contacts__menu">
                                        <li class="active">
                                            <a class="noicon" href="javascript:;" onclick="window.open('mailto:robert@info.com')">mail: robert@info.com</a>
                                        </li>
                                        <li class="active">
                                            <a class="noicon" href="javascript:;" onclick="window.open('skype:robert')">skype: robert</a>
                                        </li>
                                        <li class="active">
                                            <a href="https://behance.net/Paulggooo" target="_blank">www.behance.net/Paulggooo</a>
                                        </li>
                                        <li class="active">
                                            <a class="noicon" href="https://t.me/robert_inc" target="_blank">telegram: robert_inc</a>
                                        </li>
                                    </ul>
                                    <div class="contacts__copyright small">© Pattison 2021.  All Rights Resevered</div>
                                </div>
                                <div class="content__right">
                                    <div class="content__subtitle">Let's grab a coffee and jump on <span>conversation</span> chat with me.
                                    </div>

                                    <livewire:create-message/>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>

        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
