@extends('layouts.master')
@section('content')
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
                <form class="content__contacts contacts__form js-contact-form" method="post">
                    <div class="content__brief">
                        <div class="content__brief-title">
                            <label class="input-file">
                                <input type="file" name="file" id="brief"/>
                                <span>send a brief</span>
                            </label>
                        </div>
                        <div class="content__brief-text small">I recommend filling out a brief to assess the cost of the project. 
                            <label for="brief">Brief</label>
                        </div>
                    </div>
                    <div class="content__form">
                        <label class="content__form-input">
                            <input type="text" name="name"/>
                            <span class="content__form-placeholder">name</span>
                        </label>
                        <label class="content__form-input">
                            <input type="email" name="emal" required=""/>
                            <span class="content__form-placeholder">EMAIL *</span>
                        </label>
                        <label class="content__form-input">
                            <input type="text" name="msg" required="" minlength="10"/>
                            <span class="content__form-placeholder">MESSAGE *</span>
                        </label>
                        <div class="content__form-btn">
                            <button class="btn btn--arrow" type="submit">
                                <svg>
                                    <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection