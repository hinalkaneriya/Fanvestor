@if(isset($content->hide_section) && $content->hide_section == 'no')
  @if($content->section_style == 'style_two')
    <div class="section home-banner mb-[-10px] relative min-h-900 desktop2:min-h-800 laptop:min-h-[630px] h-screen w-full z-5 {{ $content->extra_class}}">
      <div class="my-[-10px] embed-container h-screen w-full absolute top-0 left-0 w-full h-full -z-1 overflow-hidden min-h-900 desktop2:min-h-800  laptop:min-h-[630px]">
        @if(isset($content->video_url) && $content->video_url)
          <iframe class=" w-[100vw] h-[56.25vw] min-h-[100vh] min-w-[177.77vh] absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] -z-1" src="{!! $content->video_url !!}" frameborder="0" allowfullscreen allow="autoplay" frameborder="0"></iframe>
        @endif
        @if(isset($content->backgound_image) && $content->backgound_image)
          <img src="{!! $content->backgound_image['url'] !!}" class="object-cover h-full w-full z-0 absolute left-0 top-0" alt="">
        @endif
      </div>
      <div class="banner-content relative h-full w-full pt-130 pb-70 max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
        <div class="phone absolute right-[2%] bottom-[-270px] desktop:right-0 desktop:bottom-[-180px] mdscreen:bottom-[-130px]">
          @if(isset($content->second_image) && $content->second_image)
            <img src="{!! $content->second_image['url'] !!}" alt="" class="w-[580px] desktop2:w-[520px] desktop:w-[440px]  laptop:w-[410px] lgscreen:w-[400px] mdscreen2:w-[270px] phone-img rellax" data-rellax-speed="7">
          @endif
        </div>
        @if(isset($content->heading) && $content->heading)
          <div class="top-right top-0 right-0 text-right">
          <h1 class="text-grey" data-aos="fade-up">{!! $content->heading !!}</h1> 
          </div>
        @endif
        @if(isset($content->pre_heading) && $content->pre_heading)
          <div class="bottom-left absolute md:bottom-[100px] mdscreen:pt-[40px]">
          <h1 class="text-grey" data-aos="fade-up">{!! $content->pre_heading !!}</h1>
          <h4 class="pt-35 font-light font-Gravitica text-grey" data-aos="fade-up" data-aos-duration="10000" >{!! $content->short_description !!}</h4> 
          </div>
        @endif
      </div>
    </div>
  @else

  @endif
@endif