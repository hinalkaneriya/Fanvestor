@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="faq relative pt-[50px] pb-130 mdscreen2:pb-[90px] rounded-b-[50px] mb-[-50px] z-1 bg-grey">
    <div class="max-w-calc_100_110 m-auto xlscreen:max-w-calc_100_40">
        <div class="content pt-130 mdscreen2:pt:20">
            <!-- Accordion -->
            <div class="acc-container">
                @php $i = 1; @endphp
                @foreach($content->accordion_data as $accordion)
                <div class="acc pl-20 py-[25px] @if($i == 1) border-t-2 @else @endif border-b-2 border-darkgray">
                    <div class="acc-head mx-20">
                        <h4 class="font-Helvetica_black text-41 normal-case leading-[1.3em] mdscreen2:leading-[1em]">{!! $accordion['question'] !!}</h4>
                    </div>
                    <div class="acc-content pt-30">
                        {!! $accordion['answer'] !!}
                    </div>
                </div>
                @php $i++; @endphp
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif