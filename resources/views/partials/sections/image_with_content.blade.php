@if(isset($content->hide_section) && $content->hide_section == 'no')
  @if($content->section_style == 'styleone')
  <div class="about relative bg-grey pt-[220px] mdscreen:pt-[140px] bg-about_bg rounded-b-[50px] mb-[-50px] z-4 bg-cover bg-no-repeat {!! $content->extra_class !!}"
      style="background-image: url('{!! $content->bg_image['url'] !!}')">
      <div class="img-assets">
          <img src="@asset('/images/dot-grid.png')" alt=""
              class="dot-img absolute left-[60px] top-[5%] max-w-[290px] mdscreen:left-[20px] mdscreen:max-w-[150px] rellax"
              data-rellax-speed="1" />
          <img src="@asset('/images/dot-grid.png')" alt=""
              class="dot-img absolute right-[60px] bottom-[10%] max-w-[290px] mdscreen:max-w-[150px] mdscreen:right-[20px] rellax"
              data-rellax-speed="1" />
      </div>
      <div class="about-content text-center max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40 mb-[-110px]">
          @if(isset($content->heading))
          <h2 class="text-108" data-aos="fade-up">{!! $content->heading !!}</h2>
          @endif
          @if(isset($content->short_description))
          <h4 class="pt-30 pb-50 font-Gravitica uppercase font-light text-33 max-w-[1028px] m-auto" data-aos="fade-up">{!!
              $content->short_description !!}</h4>
          @endif
          @if(isset($content->button))
          <a href="{!! $content->button['url'] !!}" class="btn-lightgreen relative z-99" data-aos="fade-up" data-lity>{!!
              $content->button['title'] !!}</a>
          @endif
      </div>
      <div class="about-img text-center relative bottom-[-187px] mdscreen:bottom-[-120px] z-1">
          @if(isset($content->image))
          <img src="{!! $content->image['url'] !!}" alt="{!! $content->heading !!}"
              class="mx-auto mdscreen2:max-w-[80%]" />
          @endif
      </div>
      <img src="@asset('/images/top-arrow.png')" alt=""
          class="absolute bottom-[-340px] right-70 max-w-[350px] mdscreen2:max-w-[140px] mdscreen2:right-10 mdscreen2:bottom-[-120px] mdscreen:max-w-[90px] mdscreen:bottom-[-50px]" />
  </div>

  @else
  <div
      class="black-section relative px-40 mdscreen2:px-20  bg-lightblack text-grey rounded-[50px] z-3 my-[-50px] pt-40 pb-180 text-center mdscreen2:pb-160 {!! $content->extra_class !!}">
      <div class="dot">
          @if($content->dot_style=="left top to right bottom")
          <img src="@asset('/images/white-dot.png')"
              class="left-[80px] top-[130px] {!! $content->dot_left !!} absolute mdscreen2:max-w-[150px] mdscreen2:left-[40px]  smscreen2:max-w-[100px] smscreen2:left-[20px] dot-one rellax"
              alt="" data-rellax-speed="1">
          <img src="@asset('/images/white-dot.png')"
              class="right-[80px] bottom-[20px] {!! $content->dot_right !!} absolute mdscreen2:max-w-[150px] mdscreen2:right-[40px]  smscreen2:max-w-[100px] smscreen2:right-[20px] dot-two rellax"
              alt="" data-rellax-speed="1">
          @else
          <img src="@asset('/images/white-dot.png')"
              class="left-[80px] bottom-0 {!! $content->dot_left !!} absolute mdscreen2:max-w-[150px] mdscreen2:left-[40px]  smscreen2:max-w-[100px] smscreen2:left-[20px] dot-one rellax"
              data-rellax-speed="1" alt="">
          <img src="@asset('/images/white-dot.png')"
              class="right-[80px] top-[150px] {!! $content->dot_right !!} absolute mdscreen2:max-w-[150px] mdscreen2:right-[40px]  smscreen2:max-w-[100px] smscreen2:right-[20px] dot-two rellax"
              data-rellax-speed="1" alt="">
          @endif
      </div>
      <div class="dot">
          <img src="@asset('/images/cross-asset.png')"
              class="left-[60px] top-[60px] absolute mdscreen2:top-[40px] mdscreen2:left-[40px] mdscreen2:max-w-[25px]"
              alt="">
          <img src="@asset('/images/cross-asset.png')"
              class="left-[60px] bottom-[60px] absolute mdscreen2:bottom-[40px] mdscreen2:left-[40px] mdscreen2:max-w-[25px]"
              alt="">
          <img src="@asset('/images/cross-asset.png')"
              class="right-[60px] top-[60px] absolute mdscreen2:top-[40px] mdscreen2:right-[40px] mdscreen2:max-w-[25px]"
              alt="">
          <img src="@asset('/images/cross-asset.png')"
              class="right-[60px] bottom-[60px] absolute mdscreen2:bottom-[40px] mdscreen2:right-[40px] mdscreen2:max-w-[25px]"
              alt="">
      </div>
      <div class="content {!! $content->custom_maxwidth !!} m-auto relative z-1">
          @if($content->enable_scroll_down == '1')
          <div
              class='icon-scroll remove-scroll relative w-[50px] h-[90px] mx-auto mb-100 border-1 border-gray rounded-[25px] mdscreen2:mb-50'>
          </div>
          @else
          <div class='icon-scroll remove-scroll relative w-[50px] h-[90px] mx-auto mb-100 border-1 border-gray rounded-[25px] mdscreen2:mb-50'
              style="opacity:0"></div>
          @endif
          <h5 class="font-Grantha font-bold text-29" data-aos="fade-up">{!! $content->heading !!}</h5>
          <h2 class="text-grey pb-40 normal-case  leading-[0.87em]" data-aos="fade-up">{!! $content->sub_heading !!}</h2>
          <h4 class="text-33 font-light font-Gravitica" data-aos="fade-up">{!! $content->short_description !!}</h4>
      </div>
  </div>
  @endif
@endif