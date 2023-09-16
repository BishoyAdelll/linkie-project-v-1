@extends('layouts.master')
@section('content')
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
@endsection