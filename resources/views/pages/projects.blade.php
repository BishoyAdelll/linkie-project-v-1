@extends('layouts.master')
@section('content')
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
                    <li class="active">
                        <a href="javascript:;">BERLING agency website</a>
                    </li>
                    <li>
                        <a href="javascript:;">Prettylittlething american shop</a>
                    </li>
                    <li>
                        <a href="javascript:;">Benhome - Architecture theme</a>
                    </li>
                    <li>
                        <a href="javascript:;">Gilhouse - architecture website</a>
                    </li>
                    <li>
                        <a href="javascript:;">gilber - personal website</a>
                    </li>
                    <li>
                        <a href="javascript:;">jonny - personal website</a>
                    </li>
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
                    <div class="projects__block active">
                        <a href="#" target="_blank" rel="nofollow"><img src="{{asset('assets/img/project-1.jpg')}}" alt=""/></a>
                    </div>
                    <div class="projects__block active">
                        <a href="#" target="_blank" rel="nofollow"><img src="{{asset('assets/img/project-2.jpg')}}" alt=""/></a>
                    </div>
                    <div class="projects__block active">
                        <a href="#" target="_blank" rel="nofollow"><img src="{{asset('assets/img/project-3.jpg')}}" alt=""/></a>
                    </div>
                    <div class="projects__block active">
                        <a href="#" target="_blank" rel="nofollow"><img src="{{asset('assets/img/project-4.jpg')}}" alt=""/></a>
                    </div>
                    <div class="projects__block active">
                        <a href="#" target="_blank" rel="nofollow"><img src="{{asset('assets/img/project-5.jpg')}}" alt=""/></a>
                    </div>
                    <div class="projects__block active">
                        <a href="#" target="_blank" rel="nofollow"><img src="{{asset('assets/img/project-6.jpg')}}" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection