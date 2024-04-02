<?php

//ADD ING HEADER FUNCTION
function harry_header()
{
    get_template_part('template-parts/header/header-1');
}


// HARRY LOGO FUNCTION
function harry_logo()
{
    $harry_logo = get_theme_mod('harry_logo', get_template_directory_uri() . '/assets/img/logo/logo-black.svg');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
}
