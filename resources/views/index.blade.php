@extends('layouts.landing', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('s.title')])

@section('content')
<div class="container" style="height: auto;">
    <section id="blog_posts" class="blog-posts">
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
            <?php $index_post = 0; ?>
            @foreach ($postsData as $post)
                <?php $index_post++ ?>
                @if($index_post==1)
                    <div class="col-lg-8 col-md-12 first-post">
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
                    <div class="col-lg-4 col-md-12 another-posts">
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
    <div class="service-bg"></div>
    <section id="courses" class="courses">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <h3>{{__('s.section_title2')}}</h3>
                <sub class="text-muted">{{__('s.section_desc2')}}</sub>
            </div>
        </div>
        <hr class="pb-3">
        <div class="row">
            @foreach ($coursesData as $course)
                <div class="col-sm-12 col-md-6 col-xl-4 course">
                    <div class="course-inner">
                        <header style="background: url({{ asset('upload/images') }}/{{$course->img_url}}) center no-repeat;">
                            <div class="course-item-sale">
                                <div class="sale-perc-badge"><div class="sale-perc">دانلود </div><div class="sale-badge-text">رایگان</div></div>                                            </div>
                            <a href="">
                                <svg class="venus-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                                    <defs>
                                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                    </defs>
                                    <g class="parallax">
                                        <use xlink:href="#gentle-wave" x="-12" y="11" fill="rgba(255,255,255,0.7"></use>
                                        <use xlink:href="#gentle-wave" x="25" y="13" fill="rgba(255,255,255,0.5)"></use>
                                        <use xlink:href="#gentle-wave" x="100" y="5" fill="rgba(255,255,255,0.3)"></use>
                                        <use xlink:href="#gentle-wave" x="90" y="7" fill="#fff"></use>
                                    </g>
                                </svg>
                            </a>
                        </header>
                        <div class="course-detail">
                            <div class="course-top-content">
                                <a href="" class="title">
                                    <h2>{{$course->title}}</h2>
                                </a>
                                <div class="course-description">توسط:
                                    <br>
                                    {{$course->author_id === 4 ? "صالح کمره ئی" : "میثم افشارزاده"}}
                                </div>
                            </div>
                            <div class="course-information position-relative d-flex">
                                <div class="col p-0 text-right">
                                    <br>
                                    <span class="level-course">0 <i class="fa fa-user"></i></span>
                                </div>
                                <div class="col p-0 text-left">
                                    <span class="level-course">دسته</span>
                                    <span class="name-level-course">
                                    {{$course->category_id === 101 ? "فیلم" : "کتاب"}}
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            </div>
        <div class="row pt-4">
            <div class="col-lg-3 col-md-6 pb-3">
                <a href="#">
                    <div class="catone" style="background-color: rgb(46, 153, 186);">
                        <h3>نمونه سوالات ابتدایی</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
                <a href="#">
                    <div class="catone" style="background-color: rgb(8, 170, 66);">
                        <h3>نمونه سوالات دوره اول متوسه</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
                <a href="#">
                    <div class="catone" style="background-color: rgb(240, 141, 16);">
                        <h3>نمونه سوالات دوره دوم متوسطه</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 pb-3">
                <a href="#">
                    <div class="catone">
                        <h3>وبینار آموزشی</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section id="service" class="service">
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <h3>{{__('s.section_title3')}}</h3>
                <sub class="text-muted">{{__('s.section_desc3')}}</sub>
            </div>
        </div>
        <hr class="pb-3">
        <div class="row">
            @foreach ($servicesData as $service)
                <article class="col-lg-4 col-md-4 col-sm-6 pb-3 service">
                    <div class="service-inner">
                        <div class="header">
                            <a href="">
                                <img src="{{ asset('upload/images') }}/{{$service->img_url}}" alt="{{$service->title}}"/>
                            </a>
                        </div>
                        <div class="service-detail">
                            <div class="service-top-content">
                                <a href="" class="title">
                                    <h3>{{$service->title}}</h3>
                                </a>
                                <div class="service-description">
                                    <li>{{$service->content}}</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    <section id="form-register" class="form-register bg-light p-4" >
        <div class="row">
            <div class="col-lg-5 col-md-8">
                <h3>{{__('s.section_title4')}}</h3>
                <sub class="text-muted">{{__('s.section_desc4')}}</sub>
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
            <button type="submit" class="btn btn-success">ثبت نام</button>
        </div>
    </section>
    <section class="container text-right" id="home-top-content-footer">
        <div class="row">
            <h3>مؤسسه آموزشی ناصران امام مهدی (عج) استان مرکزی</h3>
            <div class="col-md-12 col-xs-12">
                <div class="row" id="line-logo-img-text">
                    <div class="pull-right line-logo-img">
                        <img src="{{ asset('material') }}/img/logo@2x.png" class="litespeed-loaded" width="100"/>
                    </div>
                    <div class="pull-right text">
                        <p>
                مؤسسه کاملا مردمی ، غیر سیاسی و غیر انتفاعی و عام المنفعه بوده و هیچ شخصی اعم از حقوقی و یا حقیقی در آن سهمی نداشته. این مدرسه با اهداف آموزش صحیح و باکیفیت ایجاد شده است. این مؤسسه تنها مؤسسه فعال در استان مرکزی بوده است. این پرتال که توسط تعدادی از نخبگان استانی طراحی شده است دارای امکاناتی چون نمایش اخبار مدارس، دریافت محتواهای آموزشی و علمی که توسط معلمین و مدیران ثبت می گردد، برگزاری کلاس ها و وبینارهای آنلاین و همچنین سیستم مکاتبات اداری الکترونیکی نیز می باشد. از بخش زیر وارد پنل مدیریتی سیستم شوید.
                        </p>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-outline-success" href="{{ route('login') }}">ورود به سامانه هوشمند</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(function() {
        $("#btn-form-register").on('click', function() {
            var position = $("#form-register").offset().top;
            $("HTML, BODY").animate({
                scrollTop: position -60
            }, 1500);
        });
        $(".navbar-nav li a").on('click', function() {
            var position = $("#"+$(this).data('link')).offset().top;
            $("HTML, BODY").animate({
                scrollTop: position -40
            }, 1000);
        });
    });

</script>
@endsection
