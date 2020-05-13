@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'title' => __('s.title')])

@section('content')
<div class="container pt-4" style="height: auto;">
  <div class="row ">
      <div class="col-lg-6 col-md-8">
          <h3 class="text-dark text-right">{{ __('s.text_header1') }}</h3>
          <h1 class="text-dark text-right">{{ __('s.text_header2') }}</h1>
          <h6 class="text-dark text-right">{{ __('s.text_header3') }}</h6>
          <a class="btn btn-success" href="#">{{ __('s.pre_register') }}</a>
      </div>
      <div class="col-lg-6 col-md-8">
          <img class="img-fluid" src="{{ asset('material') }}/img/ipad.png">
      </div>
  </div>
    <div class="row text-dark pt-4">
        <div class="col-lg-5 col-md-8">
            <h3>{{__('s.section_title1')}}</h3>
            <h6 class="text-muted">{{__('s.section_desc1')}}</h6>
        </div>
        <div class="col-lg-7 col-md-8">
            <ul class="navbar-nav flex-lg-row mt-4">
                <li class="nav-item p-2">
                    <a href="#" class="btn btn-outline">{{__('s.arak')}}</a>
                </li>
                <li class="nav-item p-2">
                    <a href="#" class="btn btn-outline">{{__('s.khomein')}}</a>
                </li>
                <li class="nav-item p-2">
                    <a href="#" class="btn btn-outline">{{__('s.saave')}}</a>
                </li>
                <li class="nav-item p-2">
                    <a href="#" class="btn btn-outline">{{__('s.mahalat')}}</a>
                </li>
                <li class="nav-item p-2">
                    <a href="#" class="btn btn-outline">{{__('s.mohajeran')}}</a>
                </li>
            </ul>
        </div>
    </div>
    <hr>

</div>
@endsection
