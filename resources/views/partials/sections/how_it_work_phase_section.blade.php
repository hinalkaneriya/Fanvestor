@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="timeline px-40 mdscreen2:px-20 background-gradient relative w-full pt-150 mdscreen2:pt-80 bg-cover bg-no-repeat bg-center {!! $content->extra_class!!}"
    style="background-image:url({!! $content->background_image !!});">
    <ul class="relative max-w-[1250px] m-auto">
        @php
        if(!empty($content->phase_content))
        $p= $content->phase_content;
        $items1 = $p[0];
        $items2 = $p[1];
        $items3 = $p[2];
        @endphp
        <li
            class="relative grid grid-cols-2 items-start w-full mdscreen2:flex mdscreen2:flex-col-reverse mdscreen2:pl-40">
            <div class="left_content mx-20px  mdscreen2:mt-20">
                <div class="text max-w-[450px]">
                    <h2 class="text-104 font-Roc font-bold" data-aos="fade-up">{!! $items1['digit'] !!}</h2>
                    <h6 class="font-bold text-20 font-Grantha uppercase" data-aos="fade-up">{!!
                        $items1['phase_sub_heading'] !!}</h6>
                    <div class="pt-40 mdscreen2:pt-20">
                        <h2 class="text-83 leading-[0.9em]" data-aos="fade-up">{!! $items1['heading'] !!}</h2>
                        <p class="font-Gravitica text-29 font-light uppercase pt-15 leading-[1em]" data-aos="fade-up">
                            {!! strip_tags($items1['description']) !!}</p>
                    </div>
                </div>
            </div>
            <div class="right_content">
                <div class="img pt-100 relative left-[-25px] mdscreen2:left-0 mdscreen2:max-w-per80" data-aos="fade-up">
                    <img src="{!! $items1['image']['url'] !!}" alt="{!! $items1['image']['title'] !!}">
                </div>
            </div>
        </li>
        <li
            class="relative timelinelist second grid grid-cols-2 items-start w-full mdscreen2:flex mdscreen2:flex-col mdscreen2:pl-40">
            <div class="left_content">
                <div class="img relative" data-aos="fade-up">
                    <img src="{!! $items2['image']['url'] !!}" alt="{!! $items2['image']['title'] !!}">
                </div>
            </div>
            <div class="right_content">
                <div class="text max-w-[450px] m-auto pt-40  mdscreen2:mt-20 xlscreen:mr-0 mdscreen2:mr-auto">
                    <h2 class="text-104 font-Roc font-bold" data-aos="fade-up">{!! $items2['digit'] !!}</h2>
                    <h6 class="font-bold text-20 font-Grantha uppercase" data-aos="fade-up">{!!
                        $items2['phase_sub_heading'] !!}</h6>
                    <div class="pt-40 mdscreen2:pt-20">
                        <h2 class="text-83 leading-[0.9em]" data-aos="fade-up">{!! $items2['heading'] !!}</h2>
                        <p class="font-Gravitica text-29 font-light uppercase pt-15 leading-[1em]" data-aos="fade-up">
                            {!! strip_tags($items2['description']) !!}</p>
                    </div>
                </div>
            </div>
        </li>
        <li
            class="relative timelinelist grid grid-cols-2 items-start w-full mdscreen2:flex mdscreen2:flex-col mdscreen2:pl-40">
            <div class="left_content mx-20px">
                <div class="text max-w-[450px] mt-[-120px] mdscreen2:mt-20">
                    <h2 class="text-104 font-Roc font-bold" data-aos="fade-up">{!! $items3['digit'] !!}</h2>
                    <h6 class="font-bold text-20 font-Grantha uppercase" data-aos="fade-up">{!!
                        $items3['phase_sub_heading'] !!}</h6>
                    <div class="pt-40 mdscreen2:pt-20">
                        <h2 class="text-83 leading-[0.9em]" data-aos="fade-up">{!! $items3['heading'] !!}</h2>
                        <p class="font-Gravitica text-29 font-light uppercase pt-15 leading-[1em]" data-aos="fade-up">
                            {!! strip_tags($items3['description']) !!}</p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="work-img">
        <img src="{!! $content->below_image['url'] !!}" alt="{!! $content->below_image['title'] !!}"
            class="m-auto relative left-[9%] top-[-100px] mdscreen2:left-0 mdscreen2:top-0 mdscreen2:max-w-per80">
    </div>
</div>
@endif