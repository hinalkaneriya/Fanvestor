@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="general-section relative pt-[130px] @if(!empty($content->extra_class)) {!! $content->extra_class !!} pb-[250px] @else pb-[250px] @endif text-20 rounded-b-[50px] mb-[-50px] mdscreen2:pb-[90px] bg-grey">
    <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40">
        <div class="text max-w-[1300px] m-auto text-33 uppercase font-Gravitica font-normal leading-[1.2em] text-center mb-50">
            {!! $content->description!!}
        </div>
    </div>
</div>
@endif