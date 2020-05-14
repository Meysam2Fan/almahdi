@extends('layouts.landing', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('s.title')])

@section('content')

    <header class="header">
        <div class="header-bg"></div>
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 pt-lg-5">
                        <h3 >{{ __('s.text_header1') }}</h3>
                        <h1 >{{ __('s.text_header2') }}</h1>
                        <h6 >{{ __('s.text_header3') }}</h6>
                        <a class="btn btn-success text-white" id="btn-form-register">{{ __('s.pre_register') }}</a>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <img class="img-fluid" src="{{ asset('material') }}/img/hero-bg.png">
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="container" style="height: auto;">
    <section class="blog-posts">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <h3>{{__('s.section_title1')}}</h3>
                <sub class="text-muted">{{__('s.section_desc1')}}</sub>
            </div>
            <div class="col-lg-7 col-md-8">
{{--                <ul class="nav nav-tabs  mt-4">--}}
{{--                    <li class="nav-item p-2 active">--}}
{{--                        <a href="#" class="btn btn-outline">{{__('s.arak')}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item p-2">--}}
{{--                        <a href="#" class="btn btn-outline">{{__('s.khomein')}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item p-2">--}}
{{--                        <a href="#" class="btn btn-outline">{{__('s.saave')}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item p-2">--}}
{{--                        <a href="#" class="btn btn-outline">{{__('s.mahalat')}}</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item p-2">--}}
{{--                        <a href="#" class="btn btn-outline">{{__('s.mohajeran')}}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
            </div>
        </div>
        <hr class="pb-3">
        <div class="row">
            <div class="blog-posts-bg2"></div>
            <?php $index_post = 0; ?>
            @foreach ($postsData as $post)
                <?php $index_post++ ?>
                @if($index_post==1)
                    <div class="col-lg-8 col-md-9 col-sm-12 col-xs-7 first-post">
                        <a href="">
                            <figure>
                                <img src="{{ asset('upload') }}{{$post->img_url}}" class="attachment-home-blog-first-post size-home-blog-first-post wp-post-image litespeed-loaded" alt="{{$post->title}}" width="720" height="508">
                            </figure>
                            <div class="blog-posts-inner">
                                <div class="category">
                                    <ul>
                                        <li>{{$post->author_id === 1 ? "ادمین" : "کاربر"}}</li>
                                        <li>{{$post->category_id === 1 ? "خبر" : "خبر2"}}</li>
                                    </ul>
                                </div>
                                <h2>{{$post->title}}</h2>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-3 col-sm-12 col-xs-5 another-posts">
                @else
                    <a href="">
                        <figure>
                            <img src="{{ asset('upload') }}{{$post->img_url}}" class="attachment-home-blog-another-post size-home-blog-another-post wp-post-image litespeed-loaded" alt="{{$post->title}}" width="360" height="239">
                        </figure>
                        <div class="blog-posts-inner">
                            <div class="category">
                                <ul>
                                    <li>{{$post->author_id === 2 ? "اراک" : "خمین"}}</li>
                                    <li>{{$post->category_id === 2 ? "دوره اول متوسطه دخترانه" : "دبستان دخترانه"}}</li>
                                </ul>
                            </div>
                            <h2>{{$post->title}}</h2>
                        </div>
                    </a>
                @endif
            @endforeach
                    </div>
        </div>
    </section>
    <section class="courses">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <h3>{{__('s.section_title1')}}</h3>
                <sub class="text-muted">{{__('s.section_desc1')}}</sub>
            </div>
            <div class="col-lg-7 col-md-8">
                {{--                <ul class="nav nav-tabs  mt-4">--}}
                {{--                    <li class="nav-item p-2 active">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.arak')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.khomein')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.saave')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.mahalat')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.mohajeran')}}</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
        </div>
        <hr class="pb-3">
        <div class="row">
            <article class="col-md-4 col-sm-6 col-xs-12 course"><div class="course-inner"><div class="header">
                        <a href="https://hamyar.co/course/smartwebmasters/"><figure>
                                <img data-lazyloaded="1" src="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png" data-src="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png" class="attachment-home-product size-home-product litespeed-loaded" alt="وبمستران هوشمند" data-srcset="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png 360w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-300x188.png 300w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-400x250.png 400w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-350x220.png 350w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-600x375.png 600w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-200x125.png 200w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo.png 720w" data-sizes="(max-width: 360px) 100vw, 360px" sizes="(max-width: 360px) 100vw, 360px" srcset="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png 360w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-300x188.png 300w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-400x250.png 400w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-350x220.png 350w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-600x375.png 600w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-200x125.png 200w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo.png 720w" data-was-processed="true" width="360" height="225"><noscript><img width="360" height="225" src="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png" class="attachment-home-product size-home-product" alt="وبمستران هوشمند" srcset="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png 360w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-300x188.png 300w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-400x250.png 400w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-350x220.png 350w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-600x375.png 600w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-200x125.png 200w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo.png 720w" sizes="(max-width: 360px) 100vw, 360px" /></noscript></figure></a></div><div class="course-detail"><div class="course-top-content">
                            <a href="https://hamyar.co/course/smartwebmasters/" class="title"><h2>۰ تا ۱۰۰ آموزش کسب و کار اینترنتی ، دوره جامع وبمستران هوشمند 17</h2></a><div class="course-description">
                                آموزش جامع ۰ تا ۱۰۰ ساخت و مدیریت کسب و کار اینترنتی، اصول بازاریابی و رساندن سایت و کسب و کار شما به درآمد میلیونی. با تدریس مدیران برتر کسب و کار آنلاین و دیجیتال مارکتنیگ در ایران</div></div></div></div></article><article class="col-md-4 col-sm-6 col-xs-12 course"><div class="course-inner"><div class="header">
                        <a href="https://hamyar.co/course/webdesign/"><figure>
                                <img data-lazyloaded="1" src="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png" data-src="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png" class="attachment-home-product size-home-product litespeed-loaded" alt="" data-srcset="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/09/shop-1.png 720w" data-sizes="(max-width: 360px) 100vw, 360px" sizes="(max-width: 360px) 100vw, 360px" srcset="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/09/shop-1.png 720w" data-was-processed="true" width="360" height="225"><noscript><img width="360" height="225" src="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png" class="attachment-home-product size-home-product" alt="" srcset="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/09/shop-1.png 720w" sizes="(max-width: 360px) 100vw, 360px" /></noscript></figure></a></div><div class="course-detail"><div class="course-top-content">
                            <a href="https://hamyar.co/course/webdesign/" class="title"><h2>دوره ۰ تا ۱۰۰ آموزش طراحی سایت و فروشگاه اینترنتی</h2></a><div class="course-description">
                                آموزش ایجاد طرح گرافیکی (ui) سایت در فتوشاپ، تبدیل طرح گرافیکی به قالب وردپرسی و ووکامرسی</div></div></div></div></article><article class="col-md-4 col-sm-6 col-xs-12 course"><div class="course-inner"><div class="header">
                        <a href="https://hamyar.co/course/instagram/"><figure>
                                <img data-lazyloaded="1" src="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png" data-src="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png" class="attachment-home-product size-home-product litespeed-loaded" alt="" data-srcset="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/06/insta-1.png 720w" data-sizes="(max-width: 360px) 100vw, 360px" sizes="(max-width: 360px) 100vw, 360px" srcset="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/06/insta-1.png 720w" data-was-processed="true" width="360" height="225"><noscript><img width="360" height="225" src="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png" class="attachment-home-product size-home-product" alt="" srcset="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/06/insta-1.png 720w" sizes="(max-width: 360px) 100vw, 360px" /></noscript></figure></a></div><div class="course-detail"><div class="course-top-content">
                            <a href="https://hamyar.co/course/instagram/" class="title"><h2>دوره‌ی آموزش اینستاگرام | کسب درآمد از اینستاگرام</h2></a><div class="course-description">
                                تجریبات ساخت اکانت‌های بالاتر از 100k و درآمدزایی میلیونی از اینستاگرام توسط استاد حاجی محمدی در دوره آموزش Instagram و کسب درآمد از آن</div></div></div></div></article>
            </div>
        <div class="row pt-4">
            <div class="col-lg-3">
                <a href="#">
                    <div class="catone" style="background-color: rgb(46, 153, 186);">
                        <h3>آموزش های ایرانی</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="catone" style="background-color: rgb(8, 170, 66);">
                        <h3>آموزش های ایرانی</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="catone" style="background-color: rgb(240, 141, 16);">
                        <h3>آموزش های ایرانی</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#">
                    <div class="catone">
                        <h3>آموزش های ایرانی</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="courses">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <h3>{{__('s.section_title1')}}</h3>
                <sub class="text-muted">{{__('s.section_desc1')}}</sub>
            </div>
            <div class="col-lg-7 col-md-8">
                {{--                <ul class="nav nav-tabs  mt-4">--}}
                {{--                    <li class="nav-item p-2 active">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.arak')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.khomein')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.saave')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.mahalat')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.mohajeran')}}</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
        </div>
        <hr class="pb-3">
        <div class="row">
            <article class="col-md-4 col-sm-6 col-xs-12 course"><div class="course-inner"><div class="header">
                        <a href="https://hamyar.co/course/smartwebmasters/"><figure>
                                <img data-lazyloaded="1" src="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png" data-src="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png" class="attachment-home-product size-home-product litespeed-loaded" alt="وبمستران هوشمند" data-srcset="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png 360w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-300x188.png 300w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-400x250.png 400w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-350x220.png 350w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-600x375.png 600w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-200x125.png 200w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo.png 720w" data-sizes="(max-width: 360px) 100vw, 360px" sizes="(max-width: 360px) 100vw, 360px" srcset="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png 360w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-300x188.png 300w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-400x250.png 400w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-350x220.png 350w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-600x375.png 600w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-200x125.png 200w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo.png 720w" data-was-processed="true" width="360" height="225"><noscript><img width="360" height="225" src="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png" class="attachment-home-product size-home-product" alt="وبمستران هوشمند" srcset="https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-360x225.png 360w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-300x188.png 300w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-400x250.png 400w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-350x220.png 350w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-600x375.png 600w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo-200x125.png 200w, https://hamyar.co/wp-content/uploads/2018/09/Smartwebmasters_logo.png 720w" sizes="(max-width: 360px) 100vw, 360px" /></noscript></figure></a></div><div class="course-detail"><div class="course-top-content">
                            <a href="https://hamyar.co/course/smartwebmasters/" class="title"><h2>۰ تا ۱۰۰ آموزش کسب و کار اینترنتی ، دوره جامع وبمستران هوشمند 17</h2></a><div class="course-description">
                                آموزش جامع ۰ تا ۱۰۰ ساخت و مدیریت کسب و کار اینترنتی، اصول بازاریابی و رساندن سایت و کسب و کار شما به درآمد میلیونی. با تدریس مدیران برتر کسب و کار آنلاین و دیجیتال مارکتنیگ در ایران</div></div></div></div></article><article class="col-md-4 col-sm-6 col-xs-12 course"><div class="course-inner"><div class="header">
                        <a href="https://hamyar.co/course/webdesign/"><figure>
                                <img data-lazyloaded="1" src="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png" data-src="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png" class="attachment-home-product size-home-product litespeed-loaded" alt="" data-srcset="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/09/shop-1.png 720w" data-sizes="(max-width: 360px) 100vw, 360px" sizes="(max-width: 360px) 100vw, 360px" srcset="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/09/shop-1.png 720w" data-was-processed="true" width="360" height="225"><noscript><img width="360" height="225" src="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png" class="attachment-home-product size-home-product" alt="" srcset="https://hamyar.co/wp-content/uploads/2017/09/shop-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/09/shop-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/09/shop-1.png 720w" sizes="(max-width: 360px) 100vw, 360px" /></noscript></figure></a></div><div class="course-detail"><div class="course-top-content">
                            <a href="https://hamyar.co/course/webdesign/" class="title"><h2>دوره ۰ تا ۱۰۰ آموزش طراحی سایت و فروشگاه اینترنتی</h2></a><div class="course-description">
                                آموزش ایجاد طرح گرافیکی (ui) سایت در فتوشاپ، تبدیل طرح گرافیکی به قالب وردپرسی و ووکامرسی</div></div></div></div></article><article class="col-md-4 col-sm-6 col-xs-12 course"><div class="course-inner"><div class="header">
                        <a href="https://hamyar.co/course/instagram/"><figure>
                                <img data-lazyloaded="1" src="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png" data-src="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png" class="attachment-home-product size-home-product litespeed-loaded" alt="" data-srcset="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/06/insta-1.png 720w" data-sizes="(max-width: 360px) 100vw, 360px" sizes="(max-width: 360px) 100vw, 360px" srcset="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/06/insta-1.png 720w" data-was-processed="true" width="360" height="225"><noscript><img width="360" height="225" src="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png" class="attachment-home-product size-home-product" alt="" srcset="https://hamyar.co/wp-content/uploads/2017/06/insta-1-360x225.png 360w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-300x188.png 300w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-400x250.png 400w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-350x220.png 350w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-600x375.png 600w, https://hamyar.co/wp-content/uploads/2017/06/insta-1-200x125.png 200w, https://hamyar.co/wp-content/uploads/2017/06/insta-1.png 720w" sizes="(max-width: 360px) 100vw, 360px" /></noscript></figure></a></div><div class="course-detail"><div class="course-top-content">
                            <a href="https://hamyar.co/course/instagram/" class="title"><h2>دوره‌ی آموزش اینستاگرام | کسب درآمد از اینستاگرام</h2></a><div class="course-description">
                                تجریبات ساخت اکانت‌های بالاتر از 100k و درآمدزایی میلیونی از اینستاگرام توسط استاد حاجی محمدی در دوره آموزش Instagram و کسب درآمد از آن</div></div></div></div></article>
        </div>
    </section>
    <section class="form-register bg-light p-4" id="form-register">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <h3>{{__('s.section_title1')}}</h3>
                <sub class="text-muted">{{__('s.section_desc1')}}</sub>
            </div>
            <div class="col-lg-7 col-md-8">
                {{--                <ul class="nav nav-tabs  mt-4">--}}
                {{--                    <li class="nav-item p-2 active">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.arak')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.khomein')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.saave')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.mahalat')}}</a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item p-2">--}}
                {{--                        <a href="#" class="btn btn-outline">{{__('s.mohajeran')}}</a>--}}
                {{--                    </li>--}}
                {{--                </ul>--}}
            </div>
        </div>
        <hr class="pb-3">
        <div class="row p-4">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group bmd-form-group">
                    <input class="form-control" name="name" id="name" type="text" placeholder="نام شما" value="" required="true" aria-required="true">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group bmd-form-group">
                    <input class="form-control" name="lastname" id="lastname" type="text" placeholder="نام خانوادگی" value="" required="true" aria-required="true">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group bmd-form-group">
                    <input class="form-control" name="nationalcode" id="nationalcode" type="text" placeholder="کد ملی" value="" required="true" aria-required="true">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group bmd-form-group">
                    <input class="form-control" name="city" id="city" type="text" placeholder="شهر" value="" required="true" aria-required="true">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group bmd-form-group">
                    <input class="form-control" name="eduction" id="eduction" type="text" placeholder="مقطع تحصیلی" value="" required="true" aria-required="true">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="form-group bmd-form-group">
                    <input class="form-control" name="mobile" id="mobile" type="text" placeholder="شماره همراه" value="" required="true" aria-required="true">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="form-group bmd-form-group">
                    <textarea class="form-control" name="description" id="description" placeholder="توضیحات بیشتر" required="false" aria-required="false"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">ثبت نام</button>
        </div>
    </section>
    <section class="container text-right" id="home-top-content-footer">
        <div class="row"><h3>
                همیار‌آکادمی، کارخانه‌ی تبدیل علاقه‌مند به متخصص</h3><div class="col-md-10 col-xs-12"><div class="row" id="line-logo-img-text"><div class="pull-right line-logo-img">
                        <img data-lazyloaded="1" src="https://hamyar.co/wp-content/themes/Hamyar/assets/public/img/method-draw-image.svg" data-src="https://hamyar.co/wp-content/themes/Hamyar/assets/public/img/method-draw-image.svg" alt="" class="litespeed-loaded" data-was-processed="true" width="120"><noscript><img width="120"  src="https://hamyar.co/wp-content/themes/Hamyar/assets/public/img/method-draw-image.svg" alt=""></noscript></div><div class="pull-right text"><p>موسسه‌ی آموزشی همیار آکادمی از سال ۱۳۹۰ فعالیت خود را در زمینه‌ی آموزش تخصصی راه‌اندازی کسب‌و‌کار اینترنتی و علوم مدرن مانندزبان‌های برنامه‌نویسی تحت وب و تخصص‌هایی همچون گرافیک و وردپرس، با هدف تبدیل علاقه‌مندان به متخصصین آماده ورود به بازار کار به در قالب کارآفرین (دارای کسب‌وکار شخصی) یا فردی که میتواند موثرتر در تیمی یا شرکتی فعالیت نماید، آغاز کرد. اگر علاقه‌مند به حوزه‌ای هستید یا حس میکنید در حوزه‌ای استعداد دارید با یادگیری‌های اصولی باید آن علاقه را به تخصص تبدیل نمائید. دانشجویان همیارآکادمی، باتوجه به علاقه‌ی خود، و سرمایه‌گذاری برروی خودشان، متخصص شده‌اند و توانسته‌اند از آن حوزه، با کمک اینترنت کسب درآمد کنند، به همین دلیل همیارآکادمی به “کارخانه تبدیل علاقه‌مند به متخصص” نام گرفت.</p></div></div></div><div class="col-md-2 col-xs-12" id="enemad">
                <img data-lazyloaded="1" src="https://hamyar.co/wp-content/uploads/2020/04/enamad.png" style="cursor:pointer" class="litespeed-loaded" >
                <img src="https://hamyar.co/wp-content/uploads/2020/04/samandehi.png" style="cursor:pointer" class="litespeed-loading" ></div></div>
    </section>
</div>
<script>
    $(function() {
        $("#btn-form-register").on('click', function() {
            var position = $("#form-register").offset().top;
            $("HTML, BODY").animate({
                scrollTop: position -60
            }, 2000);
        });
    });
</script>
@endsection
