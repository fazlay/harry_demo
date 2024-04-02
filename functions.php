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
};
add_action('after_setup_theme', 'harry_theme_support');





include_once('inc/common/script.php');
include_once('inc/harry-kirki.php');
include_once('inc/template-function.php');


// register fonts

function harry_fonts_url()
{

    $fonts_url = '';

    if ('off' !== _x('on', 'Google font: on or off', 'harry')) {
        $fonts_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    }
    return $fonts_url;
}
