@extends('layouts.master')
@section('content')
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
                    <div class="content__award">
                        <div class="content__award-img">
                            <img src="{{asset('assets/img/award-1.png')}}" alt=""/>
                        </div>
                        <div class="content__award-title">
                            <p>1ST WINNER CREATIVE DESIGN CHAMPIONSHIP</p>
                        </div>
                        <div class="content__award-text small">For most favorited design voted by NY City Style customers</div>
                    </div>
                    <div class="content__award">
                        <div class="content__award-img">
                            <img src="{{asset('assets/img/award-2.png')}}" alt=""/>
                        </div>
                        <div class="content__award-title">
                            <p>BEST 5 BRANDING PROJECT OF NOMINATIONS</p>
                        </div>
                        <div class="content__award-text small">For best creative & usable health care mobile app design</div>
                    </div>
                    <div class="content__award">
                        <div class="content__award-img">
                            <img src="{{asset('assets/img/award-3.png')}}" alt=""/>
                        </div>
                        <div class="content__award-title">
                            <p>8 Years of Membership</p>
                        </div>
                        <div class="content__award-text small">Has been part of the Envato Community for over 8 years</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection