@if(isset($content->hide_section) && $content->hide_section == 'no')
<div class="contact-content relative bg-lightgreen py-150 mdscreen2:py-80 z-2 rounded-[50px] my-[-50px] {{ $content->extra_class}}">
    <div class="image relative mb-[-160px] left-[25px] -z-1 max-w-per90 mx-auto mdscreen2:left-0 smscreen2:mb-[-20px]">
        <img class="m-auto" src="{{$content->full_image}}" alt="">
    </div>
    <div class="contact-form max-w-calc_100_120 mdscreen2:max-w-calc_100_40 m-auto">
        <div class="max-w-[1500px] m-auto">   
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>               
            <script>
                    hbspt.forms.create({
                    portalId: "9159320",
                    formId: "9eb3541d-6bb3-4066-b849-97843861bed6",
                    cssClass: "class-applied-to-form",
                    submitButtonClass: "class-applied-to-submit-button",
                    onFormSubmit: function($form) {
                        // YOUR SCRIPT HERE
                        } 
                });
            </script>  
            
            <div class="contact-text pt-80">
                <div class="row ">
                    <div class="col-con">
                    @if(isset($content->contact_deatils))
                        <ul class="grid grid-cols-2 smscreen2:block smscreen2:grid-cols-1">
                            @foreach($content->contact_deatils as $cnt)
                                <li class="pb-60 pr-20 smscreen2:pr-0 mdscreen:pb-30">
                                    <b class="font-Grantha text-20 uppercase">{!! $cnt['heading'] !!}</b>
                                    <p class="font-Grantha text-20 uppercase">{!! $cnt['description'] !!}</p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    </div>
                </div>
                @if(isset($content->short_description))
                    <div class="text">
                        <p class="font-Grantha text-21 uppercase">{!! $content->short_description !!}</p>
                    </div>
                @endif
            </div>

        </div>            
    </div>
</div>
@endif