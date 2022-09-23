@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="creator relative bg-cover bg-no-repeat bg-center pt-[210px] pb-[110px] mdscreen2:pt-120 mdscreen2:pb-80 z-2 rounded-b-[50px] mb-[-50px] bg-grey drop-shadow-lightShadow {!! $content->extra_class !!}" 
style="background-image:url({!! $content->background_image !!})">
   <div class="dot">
      <img src="@asset('/images/dot-grid.png')" class="left-[80px] top-[40%] absolute mdscreen2:max-w-[150px] mdscreen2:left-[40px] rellax" data-rellax-speed="1" alt="">
      <img src="@asset('/images/dot-grid.png')" class="left-[80px] top-[50%] absolute mdscreen2:max-w-[150px] mdscreen2:left-[40px] rellax" data-rellax-speed="1" alt="">
      <img src="@asset('/images/dot-grid.png')" class="right-[80px] top-[33%] absolute mdscreen2:max-w-[150px] mdscreen2:right-[40px] rellax" data-rellax-speed="1" alt="">
      <img src="@asset('/images/dot-grid.png')" class="right-[80px] top-[53%] absolute mdscreen2:max-w-[150px] mdscreen2:right-[40px] rellax" data-rellax-speed="1" alt="">
      <img src="@asset('/images/dot-grid.png')" class="left-[80px] bottom-[-15%] absolute mdscreen2:max-w-[150px] mdscreen2:left-[40px] rellax" data-rellax-speed="1" alt="">
   </div>
   <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
      <h2 data-aos="fade-up">{!! $content->heading !!}</h2>
      <div class="creator-img">
         <img src="{{ $content->image['url'] }}" alt="{{ $content->image['title'] }}" class="max-w-per80 m-auto">
      </div>
      <ul class="w-full max-w-[1400px] flex flex-wrap m-auto justify-center list-none">
        @foreach($content->creators_data as $creators)
            <li class="team-card cursor-pointer bg-cover px-10 max-w-[430px] w-[33.33%] py-20 text-center mb-70 mdscreen2:max-w-[400] mdscreen2:mb-20 mdscreen2:w-[50%] smscreen2:px-0 smscreen2:w-full " data-aos="fade-up">
                <div class="relative  bg-cover bg-bottom bg-no-repeat border-4 border-black max-w-calc_100_40 m-auto min-h-[560px] rounded-[50px]" style="background-image: url({!! $creators['image'] !!});">
                </div>
                <h4 class="text-34 font-Roc font-bold pt-30 px-10">{!! $creators['creator_name'] !!}</h4>
                <h5 class="text-24 font-GTAmericaMono font-normal pt-15">{!! $creators['creator_position'] !!}  <span class="text-darkgray">+</span></h5>
            </li>
        @endforeach         
      </ul>
      <div class="btn text-center mt-20">
         <a href="{!! $content->button['url']!!}" class="btn-lightgreen" data-aos="fade-up" target="_blank">{!! $content->button['title']!!}</a>
      </div>
   </div>
</div>
@endif