<?php

//ADD ING HEADER FUNCTION
function harry_header()
{
    $harry_default_header_style = get_theme_mod('header-style', 'header-style-1');
    if ($harry_default_header_style == 'header-style-1') {
        get_template_part('template-parts/header/header-1');
    } elseif ($harry_default_header_style == 'header-style-2') {
        get_template_part('template-parts/header/header-2');
    }

    // elseif ($harry_default_header_style == 'header-style-3') {
    //     get_template_part('template-parts/header/header-3');
    // } elseif ($harry_default_header_style == 'header-style-4') {
    //     get_template_part('template-parts/header/header-4');
    // } 

    else {
        get_template_part('template-parts/header/header-1');
    }
    // get_template_part('template-parts/header/header-1');
}

//ADDING MENU 
function harry_menu()
{

    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_id' => '',
            'menu_class' => '',
            'fallback_cb' => 'Harry Walker_Nav_Menu::fallback',
            'walker' => new Harry_Walker_Nav_Menu
        )
    );
};

//ADDING MENU 
function harry_side_menu()
{

    wp_nav_menu(
        array(
            'theme_location' => 'side-menu',
            'menu_id' => '',
            'menu_class' => '',
            'fallback_cb' => 'Harry Walker_Nav_Menu::fallback',
            'walker' => new Harry_Walker_Nav_Menu
        )
    );
};

// HARRY LOGO FUNCTION
function harry_logo()
{
    $harry_logo = get_theme_mod('harry_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
};

// HARRY Search LOGO FUNCTION
function harry_search_logo()
{
    $harry_search_logo = get_theme_mod('harry_search_logo', get_template_directory_uri() . '/assets/img/logo/logo.svg');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_search_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
};


function harry_side_logo()
{
    $harry_side_logo = get_theme_mod('harry_side_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_side_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
};


function harry_social()
{
    $harry_facebook_button_url = get_theme_mod('harry_facebook_button_url', esc_html__('#', 'harry'));
    $harry_twitter_button_url = get_theme_mod('harry_twitter_button_url', esc_html__('#', 'harry'));
    $harry_linkedin_button_url = get_theme_mod('harry_linkedin_button_url', esc_html__('#', 'harry'));
?>

    <?php if (!empty($harry_facebook_button_url)) : ?>
        <a href="<?php echo esc_url($harry_facebook_button_url); ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif ?>
    <?php if (!empty($harry_twitter_button_url)) : ?>
        <a href="<?php echo esc_url($harry_twitter_button_url); ?>"><i class="fab fa-twitter-f"></i></a>
    <?php endif ?>
    <?php if (!empty($harry_linkedin_button_url)) : ?>
        <a href="<?php echo esc_url($harry_linkedin_button_url); ?>"><i class="fab fa-linkedin-f"></i></a>
    <?php endif ?>
<?php
};
