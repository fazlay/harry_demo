<?php

function harry_theme_support()
{
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'harry'),
        'side-menu' => __('Side Menu', 'harry'),
        'footer-menu' => __('Footer Menu', 'harry'),
    ));
    remove_theme_support('widgets-block-editor');
};
add_action('after_setup_theme', 'harry_theme_support');


// harry widgets

function harry_widgets()

{

    register_sidebar(array(
        'name'          => __('Footer Widget 01', 'harry'),
        'id'            => 'footer-widget-01',
        'description'   => __('Add widgets for Footer Widget 01 here', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-1 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 02', 'harry'),
        'id'            => 'footer-widget-02',
        'description'   => __('Add widgets for Footer Widget 02 here', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-2 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 03', 'harry'),
        'id'            => 'footer-widget-03',
        'description'   => __('Add widgets for Footer Widget 03 here', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-3 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 04', 'harry'),
        'id'            => 'footer-widget-04',
        'description'   => __('Add widgets for Footer Widget 04 here', 'harry'),
        'before_widget' => '<div id="%1$s" class="footer__widget mb-50 footer-col-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer__widget-title">',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'harry_widgets');

include_once('inc/common/script.php');
if (class_exists('kirki')) {
    include_once('inc/harry-kirki.php');
}
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
include_once('inc/breadcrumb.php');
include_once('inc/common/comment-form-list.php');


// register fonts
function harry_fonts_url()
{

    $fonts_url = '';

    if ('off' !== _x('on', 'Google font: on or off', 'harry')) {
        $fonts_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    }
    return $fonts_url;
}
