@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="team overflow-x-hidden relative h-full w-full pt-80  bg-cover rounded-b-[50px] z-2 mb-[-50px] bg-no-repeat bg-center bg-grey drop-shadow-lightShadow {{ $content->extra_class}}"
    style="background-image: url('{!! $content->background_image['url'] !!}')">
    <div class="relative z-1 mb-[-225px] mdscreen2:mb-[-140px] smscreen2:mb-[-30px]">
        <div class="img-assets">
            <img src="@asset('/images/dot-grid.png')" alt=""
                class="dot-img absolute right-[35px] top-[40%] max-w-[290px] mdscreen:left-[20px] mdscreen:max-w-[150px] rellax"
                data-rellax-speed="1">
            <img src="@asset('/images/dot-grid.png')" alt=""
                class="dot-img absolute left-[35px] bottom-[25%]  max-w-[290px] mdscreen:max-w-[150px] mdscreen:right-[20px]  rellax"
                data-rellax-speed="1">
        </div>
        <ul class="w-full max-w-[1400px] flex flex-wrap m-auto justify-center">
            @foreach($content->management_team_data as $team)
            <li class="team-card cursor-pointer bg-cover px-10 max-w-[430px] w-[33.33%] py-20 text-center mb-70 mdscreen2:max-w-[400px] mdscreen2:mb-20 mdscreen2:w-[50%] smscreen2:px-0 smscreen2:w-full {!! $content->extra_class_li !!}"
                data-aos="fade-up">
                <img src="@asset('/images/close-icon.png')" alt=""
                    class="close-icon absolute top-[45px] right-[55px] z-9" style="display: none;">
                <div class="relative team-card-content overflow-hidden bg-cover bg-bottom bg-no-repeat border-4 border-black max-w-calc_100_40 m-auto min-h-[560px] rounded-[50px]"
                    style="background-image: url('{!! $team['feature_img'] !!}');">
                    <div class="overlay transition-cubic rounded-[50px]  absolute text-left  bg-cover bg-no-repeat bg-center h-full w-full z-1 pt-40 pb-30 px-30"
                        style="background-image: url(@asset('/images/card-shadow.png'));">
                        <div class="overlay-content  font-normal text-27 h-[450px] overflow-y-scroll pl-20 uppercase">
                            <div class="text mt-40 mb-30 relative mr-10">
                                {!! $team['content'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="text-34 font-Roc font-bold pt-30 px-10">{!! $team['title'] !!}</h4>
                <h5 class="text-24 font-GTAmericaMono font-normal pt-15">{!! $team['job_title'] !!}</h5>
            </li>
            @endforeach
        </ul>
        <div class="flex justify-center w-full">
            <div class="animator">
                <div class="right-asset relative left-[0%] top-[10px] w-full max-w-[677px] mdscreen2:max-w-per80 mr-0 ml-auto"
                    data-aos="fade-right" data-aos-offset="500" data-aos-duration="700">
                    <img src="@asset('/images/left-ani.png')" alt="" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="animator">
                <div class="right-asset relative  left-[0%] top-[10px] w-full max-w-[677px] mdscreen2:max-w-per80 ml-0"
                    data-aos="fade-left" data-aos-offset="500" data-aos-duration="700">
                    <img src="@asset('/images/right-ani.png')" alt="" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
    <div
        class="black-section relative bg-lightblack text-grey rounded-[50px] z-0 my-[-50px] pt-[250px] pb-180 text-center mdscreen2:pb-[120px] mdscreen2:pt-[120px]">
        <div class="dot">
            <img src="@asset('/images/white-dot.png')"
                class="left-[80px] top-[50%] {{ $content->dot_left}} absolute mdscreen2:max-w-[150px] mdscreen2:left-[40px]  smscreen2:max-w-[100px] smscreen2:left-[20px] dot-one rellax"
                alt="white-dot" data-rellax-speed="1">
            <img src="@asset('/images/white-dot.png')"
                class="right-[80px] bottom-[-15%] {{ $content->dot_right}} mdscreen2:max-w-[150px] mdscreen2:right-[40px]  absolute smscreen2:max-w-[100px] smscreen2:right-[20px] dot-two rellax"
                alt="white-dot" data-rellax-speed="1">
        </div>
        <div class="cross">
            <img src="@asset('/images/cross-asset.png')"
                class="left-[60px] top-[60px] mdscreen2:top-[40px] mdscreen2:right-[40px] mdscreen2:max-w-[25px] absolute"
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
        <div class="content max-w-[1080px] m-auto relative z-1">
            <h5 class="font-Grantha font-bold text-29" data-aos="fade-up">{!! $content->heading !!}</h5>
            <h2 class="text-grey pb-40 leading-[0.87em]" data-aos="fade-up">{!! $content->sub_heading !!}</h2>
            <h4 class="text-33 font-light font-Gravitica" data-aos="fade-up">{!! $content->short_description !!}</h4>
        </div>
    </div>
    <div class="relative z-1 pt-[90px] pb-[120px]">
        <div class="img-assets">
            <img src="@asset('/images/dot-grid.png')" alt=""
                class="dot-img absolute right-[35px] top-[40%] max-w-[290px] mdscreen:left-[20px] mdscreen:max-w-[150px]  rellax"
                data-rellax-speed="1">
            <img src="@asset('/images/dot-grid.png')" alt=""
                class="dot-img absolute left-[35px] bottom-[10%]  max-w-[290px] mdscreen:max-w-[150px] mdscreen:right-[20px]   rellax"
                data-rellax-speed="1">
        </div>
        @if($content->worker_team == 1)
        <ul class="w-full max-w-[1400px] flex flex-wrap m-auto justify-center {!! $content->extra_class !!}">
            @php $count = 0; @endphp
            @foreach($content->worker_team_data as $team)
            @php $count++;
            if($count > 3){
            $liClass = "team-card cursor-pointer bg-cover w-full max-w-[50%] p-20 text-center mb-70 aos-init
            aos-animate";
            }else{
            $liClass = "team-card cursor-pointer bg-cover w-[400px] max-w-[33.33%] p-20 text-center mb-70";
            }
            @endphp
            <li class="team-card cursor-pointer bg-cover px-10 max-w-[430px]  mdscreen2:w-[50%] py-20 text-center mb-70 mdscreen2:max-w-[400px] mdscreen2:mb-20 smscreen2:w-full smscreen2:px-0 {!! $liClass !!} {!! $content->extra_class_li !!}"
                data-aos="fade-up">
                <img src="@asset('/images/close-icon.png')" alt=""
                    class="close-icon absolute top-[45px] right-[55px] z-9" style="display: none;">
                <div class="relative team-card-content  bg-cover bg-bottom bg-no-repeat border-4 border-black max-w-calc_100_40 m-auto min-h-[560px] rounded-[50px]"
                    style="background-image: url('{!! $team['feature_img'] !!}');">
                    <div class="overlay transition-cubic  absolute text-left rounded-[50px]  bg-cover bg-no-repeat bg-center h-full w-full z-1 pt-40 pb-30 px-30"
                        style="background-image: url(@asset('/images/card-shadow.png'));">
                        <div class="overlay-content  font-normal text-27 h-[450px] overflow-y-scroll pl-20 uppercase">
                            <div class="text mt-40 mb-30 relative mr-10">
                                {!! $team['content'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="text-34 font-Roc font-bold pt-30">{!! $team['title'] !!}</h4>
                <h5 class="text-24 font-GTAmericaMono font-normal pt-15">{!! $team['job_title'] !!}</h5>
            </li>
            @if($count == 3)
        </ul>
        <ul class="w-full max-w-[850px] m-auto flex flex-wrap justify-center">
            @endif
            @endforeach
        </ul>
        @endif
    </div>
</div>
@endif