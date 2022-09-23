@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="connect relative bg-lightgreen rounded-b-[50px] z-1 mb-[-50px] {{ $content->extra_class}}">
  <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
     <div class="pb-[130px] pt-[210px] mdscreen2:pt-100 mdscreen2:pb-150">
        <div class="flex justify-between mdscreen2:flex-col-reverse">
           <div class="left-s w-60_per mdscreen2:w-full">
              <h2 class="font-135"  data-aos="fade-up">{!! $content->title !!}</h2>
              <div class="text pt-30 pb-45">
                 <h4 class="font-Grantha font-light"  data-aos="fade-up">{!! $content->text !!}</h4>
              </div>
              <div class="fields">
                 <a href="{!! $content->button['url'] !!}" class="btn-white"  data-aos="fade-up">{!! $content->button['title'] !!}</a>
              </div>
           </div>
           <div class="right-s mdscreen2:mb-15">
              <img src="@asset('/images/press.png')" alt="" class="w-full mdscreen2:mb-20 mdscreen2:max-w-[400px]">
           </div>
        </div>
     </div>
  </div>
  <div class="absolute right-40 bottom-40">
     <img src="@asset('/images/favicon.png')" alt="" class="w-70 h-70 object-contain">
  </div>
</div>
@endif
