@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="connect relative bg-lightgreen rounded-b-[50px] z-1 mb-[-50px] {{ $content->extra_class}}">
  <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
    <div class="pb-[230px] pt-[230px] mdscreen2:pt-100 mdscreen2:pb-150">
      <div class="flex justify-between mdscreen2:flex-col-reverse">
        <h2 class="font-135"  data-aos="fade-up">{!! $content->title !!}</h2>
        <img src="@asset('/images/mail_icon.png')" alt="" class="h-275 w-275 mdscreen2:mb-20">
      </div>
      <div class="text pt-30 pb-45 max-w-[70%] mdscreen2:block mdscreen2:max-w-full">
        <h4 class="font-Grantha font-light"  data-aos="fade-up">{!! $content->text !!}</h4>
      </div>
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
  <div class="absolute right-40 bottom-40 ">
    <img src="@asset('/images/favicon.png')" alt="" class="w-70 h-70 object-contain">
  </div>
</div>
@endif
