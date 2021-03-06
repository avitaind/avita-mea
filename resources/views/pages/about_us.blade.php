@extends('layouts.app')

@section('title')
    @lang('title.about_us')
@stop
  
@php
        $page = 'aboutus';
    @endphp
    
@section('content')
    
<main>

    <section class="aboutus-panel top-nav-padding">
        <div class="aboutus-info pb-3">
            <div class="container">
                <div class="row mt-0 mt-lg-5">
                    <div class="col-12 col-lg-6 ls-0 pt-lg-5">
                        <div class="aboutus-info-mob-img">
                            <img class="hidden-lg-up " src="images/background/aboutus-min.png"/>
                        </div>
                        <h1 class="text-left mt-4 mb-3 font-weight-light">@lang('site.aboutus_about')</h1>
                        {{--  @foreach (data_get(__('site'), 'aboutus_content', []) as $content)
                            <p>{!! $content !!}</p>
                        @endforeach  --}}
                        <p>@lang('site.aboutus_content_1')</p>
                        <p>@lang('site.aboutus_content_2')</p>
                        <p>@lang('site.aboutus_content_3')</p>
                        <p>@lang('site.aboutus_content_4')</p>
                        <p>@lang('site.aboutus_content_5')</p>
                        <img src="@lang('site.img_2')" style="width: 120px; margin-right: 25px;">
                        <img src="@lang('site.img_1')" style="width: 180px; margin-right: 25px;">
                        <br><br>
                        <p>@lang('site.aboutus_content_6')</p>

                    </div>
                </div>
            </div>
            <div class="hidden-md-down aboutus-image">
                <img src="images/background/aboutus-min.png"/>
            </div>
        </div>
    </section>

    <div class="gotop-wrap">
        <button class="btn-gotop"><span class="sr-only">Back to Top</span></button>
    </div>

</main>

@endsection
