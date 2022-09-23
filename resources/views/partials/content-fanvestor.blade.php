@if($pageContetData)
	@foreach($pageContetData as $content)

	@if($content->layout == 'home_banner')
		@include('partials.sections.home_banner')

	@elseif($content->layout == 'tagline_section')
		@include('partials.sections.tagline_section')

	@elseif($content->layout == 'image_with_content')
		@include('partials.sections.image_with_content')

    @elseif($content->layout == 'home_investment_section')
			@include('partials.sections.home_investment')

    @elseif($content->layout == 'home_our_story_and_offerings')
			@include('partials.sections.home_story_offerings')

    @elseif($content->layout == 'contact_us_section')
			@include('partials.sections.contact_us')

    @elseif($content->layout == 'breadcrumb')
			@include('partials.sections.breadcrumb')

    @elseif($content->layout == 'about_team_section')
			@include('partials.sections.about_team')

    @elseif($content->layout == 'press_section')
			@include('partials.sections.press_section')

	@elseif($content->layout == 'contact_form_with_deatils_section')
			@include('partials.sections.contact_form_with_deatils_section')

	@elseif($content->layout == 'how_it_work_phase_section')
			@include('partials.sections.how_it_work_phase_section')

	@elseif($content->layout == 'how_it_work_offer_section')
			@include('partials.sections.how_it_work_offer_section')

	@elseif($content->layout == 'how_it_work_creators_section')
			@include('partials.sections.how_it_work_creators_section')

	@elseif($content->layout == 'simple_content')
			@include('partials.sections.simple_content')

	@elseif($content->layout == 'privacy_policy_q&a')
			@include('partials.sections.privacy_policy_q&a')

	@elseif($content->layout == 'faq_section')
			@include('partials.sections.faq_section')

	@elseif($content->layout == 'regf_cf_faq_section')
			@include('partials.sections.regf_cf_faq_section')
		@endif

	@endforeach
@endif

