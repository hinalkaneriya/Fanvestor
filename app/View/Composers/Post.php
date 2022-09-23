<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
        'index',
        'search',
        '*',
    ];
    

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {   
        $pageID = get_option( 'page_for_posts' );
        return [
            'title' => $this->title(),
            'post_breadcrumb_image' => get_field('post_breadcrumb_image', $pageID),
            'post_page_heading' => get_field('post_page_heading', $pageID),
            'postList' => $this->postList(),
            'press_section_bg_image' => get_field('press_section_bg_image', $pageID),
            'press_section_logo' => get_field('press_section_logo', $pageID),
            'news_heading' => get_field('newsl_heading', $pageID),
            'news_short_desctiption' => get_field('newsl_short_desctiption', $pageID),
        ];
    }
   
    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    {
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'sage');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf(
                /* translators: %s is replaced with the search query */
                __('Search Results for %s', 'sage'),
                get_search_query()
            );
        }

        if (is_404()) {
            return __('Not Found', 'sage');
        }

        return get_the_title();
    }
    
    public function postList(){
        $post_array = array();
        $post_args = array(
            'post_type' => 'post',
            'posts_per_page' => '-1',
            'post_status' => 'publish',
            'orderby' => 'menu_order',
            'order' => 'ASC',
        );
        $post_query = new \WP_Query(  $post_args );

        if($post_query->have_posts()) {
            while ( $post_query->have_posts() ) : $post_query->the_post();

                $fea_img = get_template_directory_uri().'/resources/images/title-icon.svg';
                if(get_the_post_thumbnail_url()){
                    $fea_img = get_the_post_thumbnail_url();
                }
                $postID = get_the_ID();
                $post_array[] = array(
                    'title' => get_the_title(),
                    'fea_img' => $fea_img,
                    'content' => get_the_content(),
                    'url' => get_the_permalink(),
                    'read_more' => get_field('read_more_link', $postID),
                    'business_logo' => get_field('business_logo', $postID),
                    'logo_link' => get_field('business_logo_link', $postID),
                );
            endwhile;
            wp_reset_postdata();
        }
        return $post_array;
    }
}
