@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="promo relative bg-lightgreen border-y-4 border-black {{ $content->extra_class}}">
    <marquee scrollamount="10" class="pt-[23px] pb-[13px]">
        @if(isset($content->heading))
        <h5>{!! $content->heading !!}</h5>
        @endif
    </marquee>
</div>
@endif