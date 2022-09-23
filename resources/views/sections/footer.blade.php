<div class="footer text-white bg-black pt-[180px] pb-15 mdscreen2:pt-[120px]">
    <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
        <div class="row flex mdscreen2:flex-col">
            <div class="w-10_per mdscreen2:w-full mdscreen2:mb-20" data-aos="fade-up">
                <a href="{!! esc_url(home_url()) !!}">
                    @if(isset($footer_logo) && $footer_logo)
                    <img src="{!! $footer_logo['url'] !!}" alt="" class="w-80 h-80 object-contain">
                    @endif
                </a>
            </div>
            <ul class="w-65_per flex row mdscreen2:flex-wrap mdscreen2:w-full mdscreen2:mb-20" data-aos="fade-up">
                @if(isset($footer_menu) && $footer_menu)
                @foreach($footer_menu as $menu)
                <li class="w-20_per mdscreen2:min-w-[200px] mdscreen2:mb-20 pr-10">
                    <h5 class="text-18 font-Helvetica_black uppercase font-bold pb-20">{!! $menu['menu_heading'] !!}
                    </h5>
                    @if(isset($menu['footer_menu_link']))
                    @foreach($menu['footer_menu_link'] as $menuLink)
                    <a href="{!! $menuLink['ft_menu_link']['url'] !!}" class="text-14 font-light font-Grantha block">{!!
                        $menuLink['ft_menu_link']['title'] !!}</a>
                    @endforeach
                    @endif
                </li>
                @endforeach
                @endif
            </ul>
            <div class="footer-mail w-25_per mdscreen2:w-full mdscreen2:mb-20" data-aos="fade-up">
                @if(isset($newsletter_heading) && $newsletter_heading)
                <h4 class="font-Roc text-29 font-bold pb-[25px]" data-aos="fade-up">{!! $newsletter_heading !!}</h4>
                @endif                    
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
                <!-- <input type="email" placeholder="EMAIL..." data-aos="fade-up"> -->
                <ul class="flex items-center pt-[25px]" data-aos="fade-up">
                    @if(isset($social_icon) && $social_icon)
                    @foreach($social_icon as $iconS)
                    <li
                        class="m-[7px] social-icon rotate0 hover:rotate-[360deg] transition-smoothtransition cursor-pointer">
                        <a href="{!! $iconS['link'] !!}" target="_blank"><img src="{!! $iconS['icon']['url'] !!}"></a>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <div class="row copyright pt-30">
            <div class="font-Helvetica_black font-bold text-12 tracking-01em">
                <b>© 2022 FanVestor.All rights reserved.</b>
                <br /> <b>All investments involve risks, including the possible loss of capital.</b>
            </div>
            @if(isset($footer_description) && $footer_description)
            <div class="text pt-27 font-Grantha text-12">
                {!! $footer_description !!}
            </div>
            @endif
        </div>
    </div>
</div>