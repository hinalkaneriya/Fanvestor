@if(isset($content->hide_section) && $content->hide_section == 'no')
<div
    class="work-b black-section relative bg-lightblack text-grey rounded-[50px] z-3 my-[-50px] pt-150 pb-300 mdscreen2:pb-100 text-center shadow-roundshadow {!! $content->extra_class!!}">
    <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
        <div class="dot">
            <img src="@asset('/images/white-dot.png')"
                class="left-[80px] top-[20%] absolute mdscreen2:max-w-[150px] mdscreen2:left-[40px]  smscreen2:max-w-[100px] smscreen2:left-[20px] dot-one rellax"
                data-rellax-speed="1" alt="">
            <img src="@asset('/images/white-dot.png')"
                class="right-[80px] top-[35%] absolute mdscreen2:max-w-[150px] mdscreen2:right-[40px]  smscreen2:max-w-[100px] smscreen2:right-[20px] dot-two rellax"
                data-rellax-speed="1" alt="">
        </div>
        <div class="dot">
            <img src="@asset('/images/cross-asset.png')"
                class="left-[60px] top-[60px] mdscreen2:left-[40px] mdscreen2:top-[40px] mdscreen2:max-w-[25px] absolute"
                alt="">
            <img src="@asset('/images/cross-asset.png')"
                class="left-[60px] bottom-[60px] mdscreen2:left-[40px] mdscreen2:bottom-[40px] mdscreen2:max-w-[25px] absolute"
                alt="">
            <img src="@asset('/images/cross-asset.png')"
                class="right-[60px] top-[60px] mdscreen2:right-[40px] mdscreen2:top-[40px] mdscreen2:max-w-[25px] absolute"
                alt="">
            <img src="@asset('/images/cross-asset.png')"
                class="right-[60px] bottom-[60px] mdscreen2:right-[40px] mdscreen2:bottom-[40px] mdscreen2:max-w-[25px] absolute"
                alt="">
        </div>
        <div class="content  relative z-1">
            <div class="title">
                <h6 class="font-Grantha font-bold uppercase text-29 text-grey" data-aos="fade-up">{!!
                    $content->pre_heading !!}</h6>
                <h2 class="text-grey pb-60 leading-[0.87em]" data-aos="fade-up">{!! $content->heading !!}</h2>
            </div>
            <img src="{!! $content->image['url'] !!}" alt="{!! $content->image['title'] !!}" class="m-auto"
                data-aos="fade-up">
        </div>
        <div class="list-work pt-50">
            <div class="border-grey pb-70   mb-70 border-b-4 mdscreen2:pb-0 mdscreen2:mb-40">
                <ul
                    class="grid  grid-cols-4 xlscreen:grid-cols-3  mdscreen2:grid-cols-2 mdscreen:block  max-w-[1400px] m-auto">
                    @foreach($content->offer_data as $offer)
                    <li class="text-center cursor-pointer px-30 pb-60 mdscreen2:px-15 mdscreen2:pb-50 ">
                        <span
                            class="number flex justify-center items-center m-auto h-34 w-34 rounded-100 border-grey border-1 text-grey"
                            data-aos="fade-up">{!! $offer['digit'] !!}</span>
                        <h3 class="font-Gravitica text-50 text-grey leading-[1em] uppercase pb-20 pt-30"
                            data-aos="fade-up">{!! $offer['heading'] !!}</h3>
                        <p class="font-Grantha text-20 text-grey uppercase" data-aos="fade-up">{!! $offer['description']
                            !!}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="last-text text-left">
                @php $i = 1; @endphp
                @foreach($content->accordion_data as $accordion)
                <h2 class="text-93 py-[25px] text-white mdscreen2:py-15" data-aos="fade-up"><span
                        class="text-lightgreen">{!! $accordion['icon'] !!}</span>{!! $accordion['heading'] !!}</h2>
                @if($i==2)
                <p class="text-20 pt-15 font-Grantha text-darkgray leading-[1.2em] uppercase" data-aos="fade-up">{!!
                    $accordion['description'] !!}</p>
                @endif
                @php $i++; @endphp
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif