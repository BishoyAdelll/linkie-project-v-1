@extends('layouts.master')
@section('content')
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
        <div class="content" style="background-image: url(images/testmonials-bg.png); background-size: auto 100%; background-repeat: no-repeat; background-position: center center;">
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
                            <div class="slide">
                                <div class="content__slider-text small">“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</div>
                                <div class="content__slider-name">david & elisa</div>
                                <div class="content__slider-staff small">Apartment view lake at Brooklyn</div>
                            </div>
                            <div class="slide">
                                <div class="content__slider-text small">“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</div>
                                <div class="content__slider-name">elisa</div>
                                <div class="content__slider-staff small">Apartment view lake at Brooklyn</div>
                            </div>
                            <div class="slide">
                                <div class="content__slider-text small">“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</div>
                                <div class="content__slider-name">david & elisa</div>
                                <div class="content__slider-staff small">Apartment view lake at Brooklyn</div>
                            </div>
                            <div class="slide">
                                <div class="content__slider-text small">“ If you are seeking an Interior designer that will understand exactly your needs, and someone who will utilise their creative and technical skills in parity with your taste, then Suzanne at The Bauhaus Studio is perfect.</div>
                                <div class="content__slider-name">david</div>
                                <div class="content__slider-staff small">Apartment view lake at Brooklyn</div>
                            </div>
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
@endsection