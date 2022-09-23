@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="section-black relative bg-[#171717] rounded-b-[50px] pt-[230px] mdscreen:pt-[150px] pb-150 mdscreen:pb-90 mb-[-50px] z-3 mdscreen:pt-[210px] {{ $content->extra_class}}">
  <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
    <div class="white-text"  data-aos="fade-up">
      @if(isset($content->first_title))
        <h2 class="py-[25px] px-[80px] border-lightgreen border-5 rounded-[100px] text-white inline-block mdscreen2:py-[15px] mdscreen2:px-[40px] laptop:text-80">{!! $content->first_title !!}</h2>
      @endif
    </div>
    <div class="green-text pt-[50px] pb-[40px] px-[80px] border-5 rounded-[100px] text-lightgreen my-70  mdscreen2:pt-[30px] mdscreen2:pb-[20px] mdscreen:pt-[20px] mdscreen:pb-[15px] mdscreen2:px-[40px] mdscreen:my-40"  data-aos="fade-up">             
      <div class="ticker-wrap">
        <div class="ticker">
          <div class="ticker__item"><h3 class="ticker-title font-bold">{!! $content->first_slider !!} </h3></div>
          <div class="ticker__item"><h3 class="ticker-title font-bold">{!! $content->first_slider !!} </h3></div>
          <div class="ticker__item"><h3 class="ticker-title font-bold">{!! $content->first_slider !!} </h3></div>
          <div class="ticker__item"><h3 class="ticker-title font-bold">{!! $content->first_slider !!} </h3></div>
        </div>
      </div>
    </div>
    <div class="white-text"  data-aos="fade-up">
      @if(isset($content->second_title))
        <h2 class="break-all py-[25px] px-[80px] border-lightgreen border-5 rounded-[100px] text-white inline-block mdscreen2:py-[15px] mdscreen2:px-[40px] laptop:text-80">{!! $content->second_title !!}</h2>
      @endif
    </div>
  </div>
</div>
@endif
