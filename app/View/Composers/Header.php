<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{

    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header',
        'partials.footer',
        'sections.header',
        'sections.footer',
        'index',
        '404'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'header_logo' => get_field('header_logo', 'option'),            
            'mega_menu_bg_image' => get_field('mega_menu_bg_image', 'option'), 
            'creators_link' => get_field('creators_link', 'option'),
            'footer_logo' => get_field('footer_logo', 'option'),          
            'newsletter_heading' => get_field('newsletter_heading', 'option'), 
            'newsletter_form' => get_field('newsletter_form', 'option'), 
            'footer_menu' => get_field('footer_menu', 'option'),
            'social_icon' => get_field('social_icon', 'option'),
            'footer_description' => get_field('footer_description', 'option'),
            'main_mega_menu' => get_field('main_mega_menu', 'option'),      
        ];
    }
}
