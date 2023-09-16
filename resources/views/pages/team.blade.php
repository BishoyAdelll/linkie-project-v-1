@extends('layouts.master')
@section('content')
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
            <div class="content__bg" style="background-image: url(images/exp-bg.jpg);"></div>
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
                    <div class="content__award">
                        <div class="content__award-img">
                            <img src="{{asset('assets/img/soc-fb.svg')}}" alt=""/>
                        </div>
                        <div class="content__award-title">
                            <span class="small">2019-2021</span>
                            <p>facebook</p>
                        </div>
                        <div class="content__award-text small">Assertively exploit wireless initiatives rather than synergistic core competencies.</div>
                    </div>
                    <div class="content__award">
                        <div class="content__award-img">
                            <img src="{{asset('assets/img/soc-be.svg')}}" alt=""/>
                        </div>
                        <div class="content__award-title">
                            <span class="small">2017-2019</span>
                            <p>behance</p>
                        </div>
                        <div class="content__award-text small">im working via developer 9 years and i know all about design</div>
                    </div>
                    <div class="content__award">
                        <div class="content__award-img">
                            <img src="{{asset('assets/img/soc-tw.svg')}}" alt=""/>
                        </div>
                        <div class="content__award-title">
                            <span class="small">2014-2017</span>
                            <p>twitter</p>
                        </div>
                        <div class="content__award-text small">Credibly streamline mission-critical value with multifunctional functionalities. Leading team designers.</div>
                    </div>
                    <div class="content__award">
                        <div class="content__award-img">
                            <img src="{{asset('assets/img/soc-inst.svg')}}" alt=""/>
                        </div>
                        <div class="content__award-title">
                            <span class="small">2012-2014</span>
                            <p>instagramm</p>
                        </div>
                        <div class="content__award-text small">Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</div>
                    </div>
                    <div class="content__award">
                        <div class="content__award-img">
                            <img src="{{asset('assets/img/soc-in.svg')}}" alt=""/>
                        </div>
                        <div class="content__award-title">
                            <span class="small">206-2012</span>
                            <p>linkedin</p>
                        </div>
                        <div class="content__award-text small">Assertively exploit wireless initiatives rather than synergistic core competencies.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection