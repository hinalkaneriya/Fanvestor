@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="privacy-policy relative">
    <div class="relative pt-[80px] pb-150 text-20 mdscreen2:pb-[80px] rounded-b-[50px] mb-[-50px] bg-grey">
        <div class="max-w-calc_100_110 m-auto mdscreen2:max-w-calc_100_40 border-t-2 border-darkgray">
            @foreach($content->data as $qas)
            <div class="text  border-b-2 border-darkgray pt-60 pb-40 mdscreen2:pt-40 mdscreen2:pb-20">
                <h2 class="text-41 font-Helvetica_black  pb-30">{!! $qas['heading']!!}</h2>
                {!! $qas['description']!!}
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif