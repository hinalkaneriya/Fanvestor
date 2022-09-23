<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => __('Theme Options', 'sage'),
        'capability'    => 'manage_options',
        'position'      => '62'
    ));
}


function login_logo(){
    echo '<style type="text/css">
        #login { padding: 10% 0 0; position: relative; z-index: 9;}
        body{background-image: url(' . get_bloginfo('template_directory') . '/resources/images/admin-bg.png) !important;background-size: cover !important; position: relative; background-position: bottom; background-repeat: no-repeat; }
        body::before { content: ""; position: absolute; left: 0; top: 0; width: 100%; height: 100%; }
        p a{color:rgb(250, 247, 242);}
        .privacy-policy-page-link a{color:rgb(250, 247, 242);}
        h1 a{background-image: url(' . get_bloginfo('template_directory') . '/resources/images/admin-logo.png) !important; width:100% !important;margin: 0 auto !important; box-shadow: none !important; height: 70px !important;}
        .login h1 a {
            background-size: 270px !important;
            margin-bottom:20px !important;
            background-position: center bottom !important;
            background-repeat: no-repeat !important;
        }
        .login #backtoblog,
        .login #nav {
            padding: 0 !important;
        }
        .wp-core-ui .button-primary {
            background: #0c0c0c;
            border-color: rgb(250, 247, 242);
            color: rgb(250, 247, 242);
            text-decoration: none;
            text-shadow: none;
        }.wp-core-ui .button-secondary {
            color: #001144;}
        .wp-core-ui .button-primary:hover{
            background: #0011449c !important;
        }.wp-core-ui .button-primary:hover {
            background:rgba(42, 63, 109, 0.7);
            border-color: rgb(250, 247, 242);
            color: rgb(250, 247, 242);
        }input[type=password]:focus,input[type=text]:focus,input[type=checkbox]:focus{border-color: #001144;
            box-shadow: 0 0 0 1px #001144;
            outline: 2px solid transparent;}
        </style>';
}
add_action('login_head', 'login_logo');

function my_login_logo_url(){
    return esc_url(home_url('/'));
}

add_filter('login_headerurl', 'my_login_logo_url');

