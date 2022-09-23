@extends('layouts.app')
@section('content')
  <!-- @include('partials.page-header') -->
  
  <div class="breadcrumb relative bg-cover h-screen w-full bg-no-repeat bg-center flex flex-col justify-end items-center z-0 pb-40 mdscreen2:pb-80 mdscreen2:max-h-[600px] smscreen2:max-h-[400px] " style="background-image: url('http://192.168.5.101/fanvestor-wp/wp-content/uploads/2022/09/breadcrumb-bg.png');">
    <div class="text-transparent">
                 <h2 class="text-center font-Roc stroke-[#243c5a] fill-transparent text-331 leading-[0.75em]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">404</h2>
             <h2 class="text-center font-Roc stroke-[#243c5a] fill-transparent text-331 leading-[0.75em]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">404</h2>
             <h2 class="text-center font-Roc stroke-[#243c5a] fill-transparent text-331 leading-[0.75em]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">404</h2>
             <h2 class="text-center font-Roc stroke-[#243c5a] fill-transparent text-331 leading-[0.75em]" style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">404</h2>
                </div>
        <div class="title mb-[-40px]">
        <h1 class="font-Roc text-headwhite text-center font-bold text-331 aos-init aos-animate" data-aos="fade-up">404</h1>
    </div>
    </div>



  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif
@endsection
