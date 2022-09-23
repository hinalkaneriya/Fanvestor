@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="breadcrumb relative bg-cover h-screen w-full bg-no-repeat bg-center flex flex-col justify-end items-center z-0 pb-40 mdscreen2:pb-80 mdscreen2:max-h-[600px] smscreen2:max-h-[400px] {{ $content->extra_class}}"
    style="background-image: url('{!! $content->background_image !!}');">
    <div class="text-transparent">
        @php $i=1; @endphp
        @for($i = 1; $i <= 4; $i++) <h2
            class="text-center font-Roc stroke-[#243c5a] fill-transparent text-331 leading-[0.75em]"
            style="-webkit-text-stroke: 1px rgba(255, 255, 255, 0.2); -webkit-text-fill-color: transparent;">{!!
            $content->title !!}</h2>
            @endfor
    </div>
    @if(isset($content->title))
    <div class="title mb-[-40px]">
        <h1 class="font-Roc text-headwhite text-center font-bold text-331" data-aos="fade-up">{!! $content->title !!}
        </h1>
    </div>
    @endif
</div>
@endif