@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="relative our-story rounded-b-[50px] mb-[-50px] pt-150 mdscreen:pt-100 pb-80 bg-cover bg-no-repeat z-2 {{ $content->extra_class}}"
    style="background-image:url('@asset('/images/ourstory-bg.png')'); background-position:center;">
    <div class="promo relative bg-lightgreen border-y-4 border-black">
        <marquee scrollamount="10" class="pt-30 pb-20">
            <h5>{!! $content->marque_text !!}</h5>
        </marquee>
    </div>
    <div class="first-section relative text-center max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
        <div class="absolute top-0 left-0 w-full h-full">
            <div class="mdscreen2:block hidden">
                <div class="animator" data-scroll-container>
                    <div class="right-asset absolute right-5_per top-[10px]" data-aos="fade-right">
                        <img src="@asset('/images/story-asset.png')" alt=""
                            class="max-w-[370px] m-auto smscreen2:max-w-[220px]">
                    </div>
                </div>
            </div>
            <div class="mdscreen2:hidden block">
                <div class="sec-5 bg:green relative max-w-[1350px] mx-auto">
                    <div class="container">
                        <div class="row">
                            <div class="absolute w-full col-12 flex h-[600px]">
                                <figure class="absolute  right-[300px] bottom-[80px] scroll-up">
                                    <img src="@asset('/images/Vector-Smart-Object2.png')" alt="" class="max-w-[180px]">
                                </figure>
                                <figure class="absolute right-[210px] bottom-[170px] scroll-up">
                                    <img src="@asset('/images/Vector-Smart-Object3.png')" alt="" class="max-w-[400px]">
                                </figure>
                                <figure class="absolute right-[480px] top-[119px] scroll-up">
                                    <img src="@asset('/images/Vector-Smart-Object4.png')" alt="" class="max-w-[294px]">
                                </figure>
                                <figure class="absolute right-[217px] top-[10px] scroll-down">
                                    <img src="@asset('/images/Vector-Smart-Object-man.png')" alt=""
                                        class="max-w-[500px]">
                                </figure>
                                <figure class="absolute  left-[20px] top-[100px] scroll-down">
                                    <img src="@asset('/images/Vector-Smart-Object5.png')" alt="" class="max-w-[33px]">
                                </figure>
                                <figure class="absolute left-[320px] bottom-[220px] scroll-up">
                                    <img src="@asset('/images/Vector-Smart-Object6.png')" alt="" class="max-w-[40px]">
                                </figure>
                                <div class="w:50%@width1200 rel"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-story-title pt-[180px] pb-80 mdscreen:pt-[80px]">
            <h2 data-aos="fade-up"><span class="relative left-[-110px] mdscreen2:left-[-50px]">Our</span> <br />
                <span class="relative left-[110px] mdscreen2:left-[50px]">Story</span>
            </h2>
        </div>
        <div class="swiper-container-wrapper mdscreen2:flex-c">
            <div class="swiper-container gallery-top pb-80">
                <div class="swiper-wrapper">
                    @foreach($content->testimonial_data as $testimonial)
                    <div class="swiper-slide">
                        <div
                            class="description font-light text-33 font-GTAmericaMono uppercase tracking-normal leading-[1em] text-left">
                            {{ $testimonial['content'] }}</div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-pagination bottom-0"></div>
            </div>
            <!-- Slider thumbnail container -->
            <div class="swiper-container gallery-thumbs relative">
                <div
                    class="swiper-button-next absolute top-auto right-auto w-100 h-100 bottom-50 left-50 mt-0 mdscreen2:bottom-[20px] mdscreen2:left-[0px]">
                    <img src="@asset('/images/arrow.png')" alt="" class="mdscreen2:max-w-[50px]">
                </div>
                <div class="swiper-button-prev"></div>
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($content->testimonial_data as $testimonial)
                    <div class="swiper-slide"> <img src="{!! $testimonial['team_img'] !!}" alt=""> </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="offerings relative pt-[580px] mdscreen2:pt-[270px] mdscreen:pt-[210px]">
            <div class="title">
                <div class="img-asset absolute top-[80px] mdscreen2:top-[30px] w-full  -z-1">
                    <img src="@asset('/images/our-story-asset.png')" alt="" class="m-auto">
                </div>
                <h2 data-aos="fade-up">{!! $content->offerings_title !!}</h2>
                <h4 class="pt-40 font-Gravitica font-light text-33 max-w-[900px] m-auto" data-aos="fade-up">{!!
                    $content->offerings_description !!}</h4>
            </div>
            <div>
                <ul class="row pt-150 flex flex-wrap mdscreen2:pt-[80px]">
                    @foreach ( $content->offerings_learn as $item)
                    <li class="flex flex-col w-25_per px-10 xlscreen:w-50_per xlscreen:mb-30 smscreen2:w-full">
                        <img src="{!! $item['learn_image'] !!}" alt="" class="h-[195px] object-contain"
                            data-aos="fade-up">
                        <div class="pt-50 mdscreen:pt-20">
                            <h6 class="font-Gravitica text-50 pb-20 min-h-120 smscreen2:min-h-auto  flex items-center justify-center"
                                data-aos="fade-up">{!! $item['learn_title'] !!}</h6>
                            <div class="font-Grantha text-20 pb-40 min-h-[270px] uppercase xlscreen:min-h-[200px] mdscreen:pb-20 mdscreen:min-h-auto"
                                data-aos="fade-up">
                                <p>{!! $item['learn_text'] !!}</p>
                            </div>
                            <img src="{!! $item['learn_icon'] !!}" alt=""
                                class="w-[50px] h-[50px] m-auto object-contain" data-aos="fade-up">
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif