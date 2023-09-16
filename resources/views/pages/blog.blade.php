@extends('layouts.master')
@section('content')
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
                    <li class="active">
                        <a href="javascript:;">How to design well?</a>
                    </li>
                    <li>
                        <a href="javascript:;">Lemon Illustration design</a>
                    </li>
                    <li>
                        <a href="javascript:;">Paul theme Branding</a>
                    </li>
                    <li>
                        <a href="javascript:;">Best typography 2020</a>
                    </li>
                    <li>
                        <a href="javascript:;">my name is pattison</a>
                    </li>
                </ul>
                <div class="content__btn-block">
                    <div class="content__btn-label small">View all works</div>
                    <a class="content__btn-btn btn btn--arrow" href="blog.html" target="_blank"> <svg>
                            <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                        </svg></a>
                </div>
            </div>
            <div class="content__right">
                <div class="news__blocks">
                    <div class="news__block active">
                        <div class="news__block-info">
                            <div class="news__block-date small">3th January, 2020</div>
                            <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                            <div class="news__block-number">(01)</div>
                        </div>
                        <div class="news__block-image">
                            <a href="blog.html" target="_blank"><img src="{{asset('assets/img/news-1.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="news__block active">
                        <div class="news__block-info">
                            <div class="news__block-date small">3th January, 2020</div>
                            <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                            <div class="news__block-number">(02)</div>
                        </div>
                        <div class="news__block-image">
                            <a href="blog.html" target="_blank"><img src="{{asset('assets/img/news-2.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="news__block active">
                        <div class="news__block-info">
                            <div class="news__block-date small">3th January, 2020</div>
                            <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                            <div class="news__block-number">(03)</div>
                        </div>
                        <div class="news__block-image">
                            <a href="blog.html" target="_blank"><img src="{{asset('assets/img/news-3.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="news__block active">
                        <div class="news__block-info">
                            <div class="news__block-date small">3th January, 2020</div>
                            <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                            <div class="news__block-number">(04)</div>
                        </div>
                        <div class="news__block-image">
                            <a href="blog.html" target="_blank"><img src="{{asset('assets/img/news-4.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="news__block active">
                        <div class="news__block-info">
                            <div class="news__block-date small">3th January, 2020</div>
                            <div class="news__block-text small">Berling ® —  minimalism photography agency website. with the help of a  minimalistic design, the site turned out to be very  user-friendly  and responsive, and the brand became more.</div>
                            <div class="news__block-number">(05)</div>
                        </div>
                        <div class="news__block-image">
                            <a href="blog.html" target="_blank"><img src="{{asset('assets/img/news-5.jpg')}}" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection