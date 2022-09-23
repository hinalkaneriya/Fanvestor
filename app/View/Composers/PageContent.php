<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class PageContent extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-fanvestor',
        'partials.content',
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'pageContetData' => $this->pageContetData(),
        ];
    }

    public function pageContetData()
    {
        $data = [];
        $flexible_content = get_field('page_content');
        if($flexible_content){
            foreach($flexible_content as $content) {
                if($content['acf_fc_layout']=='home_banner'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_style' => $content['section_style'],
                        'backgound_image' => $content['backgound_image'],
                        'second_image' => $content['second_image'],
                        'video_url' => $content['video_url'],
                        'heading' => $content['heading'],
                        'pre_heading' => $content['pre_heading'],
                        'short_description' => $content['short_description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='tagline_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'heading' => $content['heading'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='image_with_content'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'section_style' => $content['section_style'],
                        'enable_scroll_down' => $content['enable_scroll_down'],
                        'custom_maxwidth' => $content['custom_maxwidth'],
                        'dot_style' => $content['dot_style'],
                        'heading' => $content['heading'],
                        'sub_heading' => $content['sub_heading'],
                        'short_description' => $content['short_description'],
                        'image' => $content['image'],
                        'bg_image' => $content['bg_image'],
                        'button' => $content['button'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section'],
                        'dot_left' => $content['dot_left'],
                        'dot_right' => $content['dot_right']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='home_investment_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'first_title' => $content['first_title'],
                        'first_slider' => $content['first_slider'],
                        'second_title' => $content['second_title'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='home_our_story_and_offerings'){

                    $testimonial_data = array();
                    $data_args = array(
                        'post_type' => 'testimonial',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,                        
                        'order' => 'ASC'
                    );
                    $usp_query = new \WP_Query(  $data_args );
                    if($usp_query->have_posts()) {
                        while ( $usp_query->have_posts() ) : $usp_query->the_post();                            
                            $testimonial_data[] = array(
                                'title' => get_the_title(),                                
                                'content' => get_the_content(), 
                                'team_img' => get_the_post_thumbnail_url(),                               
                            );
                        endwhile;
                        wp_reset_postdata();
                    }
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'marque_text' => $content['marque_text'],
                        'testimonial_data' => $testimonial_data,
                        'our_story' => $content['our_story'],
                        'offerings_title' => $content['offerings_title'],
                        'offerings_description' => $content['offerings_description'],
                        'offerings_learn' => $content['offerings_learn'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='contact_us_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'text' => $content['text'],
                        'contact_us_shortcode' => $content['contact_us_shortcode'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='breadcrumb'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'background_image' => $content['background_image'],
                        'title' => $content['title'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='about_team_section'){
                    $management_team_data = $worker_team_data = array();
                    $mng_args = array(
                        'post_type' => 'team',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'meta_key'		=> 'job_position',
                        'meta_value'	=> 'management',
                        'order' => 'ASC'
                    );
                    $usp_query = new \WP_Query(  $mng_args );
                    if($usp_query->have_posts()) {
                        while ( $usp_query->have_posts() ) : $usp_query->the_post();                            
                            $management_team_data[] = array(
                                'title' => get_the_title(),                                
                                'content' => get_the_content(),
                                'feature_img' => get_the_post_thumbnail_url(),
                                'job_title' => get_field('job_title'),
                            );
                        endwhile;
                        wp_reset_postdata();
                    }
                    $wrkr_args = array(
                        'post_type' => 'team',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'meta_key'		=> 'job_position',
                        'meta_value'	=> 'worker',
                        'order' => 'ASC'
                    );
                    $usp1_query = new \WP_Query(  $wrkr_args );
                    if($usp1_query->have_posts()) {
                        while ( $usp1_query->have_posts() ) : $usp1_query->the_post();                            
                            $worker_team_data[] = array(
                                'title' => get_the_title(),                                
                                'content' => get_the_content(),
                                'feature_img' => get_the_post_thumbnail_url(),
                                'job_title' => get_field('job_title'),
                            );
                        endwhile;
                        wp_reset_postdata();
                    }

                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'background_image' => $content['background_image'],
                        'management_team' => $content['management_team'],
                        'management_team_data' => $management_team_data,
                        'worker_team' => $content['worker_team'],
                        'worker_team_data' => $worker_team_data,
                        'heading' => $content['heading'],
                        'sub_heading' => $content['sub_heading'],
                        'short_description' => $content['short_description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'extra_class_li' => $content['extra_class_li'],
                        'hide_section' => $content['hide_section'],
                        'dot_left' => $content['dot_left'],
                        'dot_right' => $content['dot_right']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='press_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'title' => $content['title'],
                        'text' => $content['text'],
                        'button' => $content['button'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='contact_form_with_deatils_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'full_image' => $content['full_image'],
                        'contact_deatils' => $content['contact_deatils'],
                        'short_description' => $content['short_description'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='how_it_work_phase_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'phase_content' => $content['phase_content'],
                        'background_image' => $content['background_image'],
                        'below_image' => $content['below_image'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='how_it_work_offer_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],
                        'pre_heading' => $content['pre_heading'],
                        'heading' => $content['heading'],
                        'image' => $content['image'],
                        'icon' => $content['icon'],
                        'offer_data' => $content['offer_data'],
                        'accordion_data' => $content['accordion_data'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='how_it_work_creators_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'], 
                        'background_image' => $content['background_image'],
                        'heading' => $content['heading'],
                        'image' => $content['image'],
                        'creators_data' => $content['creators_data'],       
                        'button' => $content['button'],                 
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='simple_content'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],                         
                        'description' => $content['description'],                 
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='privacy_policy_q&a'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],                         
                        'data' => $content['data'],                 
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='faq_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],                         
                        'section_heading' => $content['section_heading'],                 
                        'accordion_data' => $content['accordion_data'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }
                elseif($content['acf_fc_layout']=='regf_cf_faq_section'){
                    $this_content = (object) [
                        'layout' => $content['acf_fc_layout'],                                                                
                        'accordion_data' => $content['accordion_data'],
                        'id' => $content['id'],
                        'extra_class' => $content['extra_class'],
                        'hide_section' => $content['hide_section']
                    ];
                    array_push($data, $this_content);
                }


            }
        }
        return $data;
    }
}
