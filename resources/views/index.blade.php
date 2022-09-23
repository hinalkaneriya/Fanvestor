@extends('layouts.app')
@section('content')
@if(isset($post_breadcrumb_image))
<div class="breadcrumb relative bg-cover h-screen w-full bg-no-repeat bg-center flex flex-col justify-end items-center z-0 pb-40 mdscreen2:pb-80 mdscreen2:max-h-[600px] smscreen2:max-h-[400px]" style="background-image: url('{!! $post_breadcrumb_image !!}');">
    <div class="text-transparent">
      @if(isset($post_breadcrumb_image))
        <h2 class="text-center stroke-[#243c5a] fill-transparent text-331 font-Roc leading-[0.75em] tracking-[0.5rem]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">{!! $post_page_heading !!}</h2>
        <h2 class="text-center stroke-[#243c5a] fill-transparent text-331 font-Roc leading-[0.75em] tracking-[0.5rem]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">{!! $post_page_heading !!}</h2>
        <h2 class="text-center stroke-[#243c5a] fill-transparent text-331 font-Roc leading-[0.75em] tracking-[0.5rem]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">{!! $post_page_heading !!}</h2>
        <h2 class="text-center stroke-[#243c5a] fill-transparent text-331 font-Roc leading-[0.75em] tracking-[0.5rem]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">{!! $post_page_heading !!}</h2>
        <h2 class="text-center stroke-[#243c5a] fill-transparent text-331 font-Roc leading-[0.75em] tracking-[0.5rem]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">{!! $post_page_heading !!}</h2>
        <h2 class="text-center stroke-[#243c5a] fill-transparent text-331 font-Roc leading-[0.75em] tracking-[0.5rem]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">{!! $post_page_heading !!}</h2>
        <h2 class="text-center stroke-[#243c5a] fill-transparent text-331 font-Roc leading-[0.75em] tracking-[0.5rem]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">{!! $post_page_heading !!}</h2>
      @endif
    </div>
    <div class="title mb-[-40px]">
        <h1 class="font-Roc text-white text-center font-bold text-331 tracking-[0.5rem]" data-aos="fade-up">{!! $post_page_heading !!}</h1>
    </div>
</div>
@endif
@if(isset($postList))
<div class="press-content relative z-2 drop-shadow-lightShadow">
    <div class="h-full w-full bg-grey bg-cover bg-center bg-no-repeat z-1 rounded-[50px] my-[-50px]" style="background-image: url('{!! $press_section_bg_image !!}');">
        <div class="press-sec pt-35">
            <div class="icon-scroll remove-scroll relative w-[50px] h-[90px] mx-auto mb-60 border-1 border-downgray rounded-[25px] pb-[65px] mdscreen2:mb-[40px]"></div>
            @php $i = 1; @endphp
            @foreach($postList as $post)
              <div class="text @if($i == 1) @else pt-[175px] mdscreen2:pt-[80px] @endif relative border-b-4 border-black max-w-calc_100_110 m-auto xlscreen:max-w-calc_100_40">
                  @if($post['title'])
                    <h2 class="!leading-[0.95em] normal-case max-w-[1100px] ellipsis-press " data-aos="fade-up">
                        {!! $post['title'] !!}
                    </h2>
                  @endif
                  @if($post['url'])
                    <h4 class="font-Grantha font-normal text-38 pt-[40px] max-w-[850px] ellipsis-press" data-aos="fade-up">
                        {!! $post['content'] !!}
                    </h4>
                  @endif
                  @if($post['read_more'])
                    @if($i == 1)
                        <a href="{!! $post['read_more']['url'] !!}" class="btn-lightgreen mt-70 mb-75 mdscreen2:my-30" target="_blank" data-aos="fade-up">read more</a>
                    @else
                        <a href="{!! $post['read_more']['url'] !!}" class="btn-white mt-70 mb-75 mdscreen2:my-30" target="_blank" data-aos="fade-up">read more</a>
                    @endif
                  @endif
                  @if($i == 1)
                  @else
                    <div class="web-logo  absolute right-0 top-[45px] mdscreen2:top-[25px] mdscreen2:max-w-[50px]">
                        <img src="@asset('images/post-favicon.png')" alt="">
                    </div>
                  @endif
                  @if($post['business_logo'])
                    <div class="brand-logo absolute right-0 bottom-[75px] mdscreen2:relative mdscreen2:bottom-0 mdscreen2:mb-[30px]" data-aos="fade-up">
                        @if(isset($post['logo_link']))
                            <a href="{!! $post['logo_link'] !!}" target="_blank">
                                <img src="{!! $post['business_logo'] !!}" alt="" class="mdscreen2:max-h-[80px] xsscreen2:max-h-[40px] xsscreen2:max-w-[210px]" />
                            </a>
                        @else
                            <img src="{!! $post['business_logo'] !!}" alt="" class="mdscreen2:max-h-[80px]  xsscreen2:max-h-[40px] xsscreen2:max-w-[210px]" />
                        @endif
                    </div>
                  @endif
              </div>
            @php $i++; @endphp
            @endforeach
        </div>
        <div class="text-img pt-[120px] relative max-w-calc_100_110 m-auto xlscreen:max-w-calc_100_40 bottom-[-72px] mt-[-72px] mdscreen2:pt-[70px]">
            <div class="web-logo absolute right-0 top-[45px] mdscreen2:top-[25px] mdscreen2:max-w-[50px]">
                <img src="@asset('images/post-favicon.png')" alt="" />
            </div>
            @if($press_section_logo)
              <div class="press-img">
                  <img src="{!! $press_section_logo !!}'" alt="" class="max-w-[80%] relative m-auto mdscreen2:max-w-per100" />
              </div>
            @endif
        </div>
    </div>
</div>
@endif
@if(isset($news_heading))
<div class="connect relative bg-lightgreen rounded-b-[50px] z-1 mb-[-50px]">
    <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
        <div class="pb-[200px] pt-[150px] mdscreen:pb-150">
            @if(isset($news_heading))
              <div class="flex justify-between mdscreen2:flex-col-reverse">
                <h2 class="font-135" data-aos="fade-up">{!! $news_heading !!}</h2>
                <img src="@asset('images/mail_icon.png')" alt="" class="h-275 w-275 mdscreen2:mb-20" />
              </div>
            @endif
            @if(isset($news_short_desctiption))
              <div class="text pt-30 pb-45 max-w-[70%] mdscreen2:block mdscreen:max-w-full">
                  <h4 class="font-Grantha font-light" data-aos="fade-up">{!! $news_short_desctiption !!}</h4>
              </div>
            @endif
            <div class="fields w-70_per flex mdscreen2:block mdscreen2:w-full">
                <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>               
                <script>
                        hbspt.forms.create({
                        portalId: "9159320",
                        formId: "6f943661-5348-467b-bada-2b8f80aa4676",
                        cssClass: "class-applied-to-form",
                        submitButtonClass: "class-applied-to-submit-button",
                        onFormSubmit: function($form) {
                            // YOUR SCRIPT HERE
                        } 
                    });
                </script>
            </div>
        </div>
    </div>
    <div class="absolute right-40 bottom-40">
        <img src="@asset('images/post-favicon.png')" alt="" class="w-70 h-70 object-contain" />
    </div>
</div>
@endif
@endsection