<?php

new \Kirki\Panel(
    'harry_panel',
    [
        'priority' => 10,
        'title' => esc_html__('Harry option', 'harry'),
        'description' => esc_html__('Harry option Description.', 'harry'),
    ]
);
// header info section 
function harry_header_info()
{
    new \Kirki\Section(
        'harry_header_info',
        [
            'title'       => esc_html__('Harry Header Info', 'harry'),
            'description' => esc_html__('My Section Description.', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings'    => 'header-style',
            'label'       => esc_html__('Select Header Style', 'harry'),
            'section'     => 'harry_header_info',
            'default'     => 'header-style-1',
            'placeholder' => esc_html__('Choose a Header Style', 'harry'),
            'choices'     => [
                'header-style-1' => esc_html__('Header Style 01', 'harry'),
                'header-style-2' => esc_html__('Header Style 02', 'harry'),
                'header-style-3' => esc_html__('Header Style 03', 'harry'),
                'header-style-4' => esc_html__('Header Style 04', 'harry'),

            ],
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_email',
            'label'    => esc_html__('Harry Email', 'harry'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_phone',
            'label'    => esc_html__('harry Phone', 'harry'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('+9847383394', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_timing',
            'label'    => esc_html__('Header Timing', 'harry'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('Sunday-Thurs ', 'harry'),
            'priority' => 10,
        ]
    );
}


function harry_header_logo()
{
    new \Kirki\Section(
        'harry_header_logo',
        [
            'title'       => esc_html__('Header Logo', 'harry'),
            'description' => esc_html__('My Section Description.', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_logo ',
            'label'    => esc_html__('Logo', 'harry'),
            'section'  => 'harry_header_logo',
            'default'  => get_template_directory_uri() . '/assets/img/logo/logo.svg',
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_search_logo ',
            'label'    => esc_html__('Search Logo', 'harry'),
            'section'  => 'harry_header_logo',
            'default'  => get_template_directory_uri() . '/assets/img/logo/logo.svg',
            'priority' => 10,
        ]
    );
}

function harry_side_info_section()
{
    new \Kirki\Section(
        'harry_header_logo',
        [
            'title'       => esc_html__('Side Info', 'harry'),
            'description' => esc_html__('Side info section here', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_email',
            'label'    => esc_html__('Side Bar Email', 'harry'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('info@example.com', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_side_logo ',
            'label'    => esc_html__('Side Logo', 'harry'),
            'section'  => 'harry_header_logo',
            'default'  => get_template_directory_uri() . '/assets/img/logo/logo.svg',
            'priority' => 10,
        ]
    );


    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_phone',
            'label'    => esc_html__('Side bar Phone', 'harry'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('+9847383394', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_button',
            'label'    => esc_html__('Side bar Button', 'harry'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('Getting Started', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_side_button_url',
            'label'    => esc_html__('Side bar Button URL', 'harry'),
            'section'  => 'harry_header_info',
            'default'  => esc_html__('#', 'harry'),
            'priority' => 10,
        ]
    );
}

function harry_social_info()
{
    new \Kirki\Section(
        'harry_social_info',
        [
            'title'       => esc_html__('Social Info', 'harry'),
            'description' => esc_html__('Social info section', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_facebook',
            'label'    => esc_html__('Facebook URL', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_twitter',
            'label'    => esc_html__('Twitter URL', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_linkedin',
            'label'    => esc_html__('Linkedin URL', 'harry'),
            'section'  => 'harry_social_info',
            'default'  => esc_html__('', 'harry'),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'harry_side_logo_switch',
            'label'       => esc_html__('Logo Field', 'harry'),
            'description' => esc_html__('Simple logo control', 'harry'),
            'section'     => 'harry_social_info',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__('Enable', 'harry'),
                'off' => esc_html__('Disable', 'harry'),
            ],
        ]
    );
};
function harry_footer_info()
{
    new \Kirki\Section(
        'harry_footer_info',
        [
            'title'       => esc_html__('Footer Info', 'harry'),
            'description' => esc_html__('Footer info section here', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_footer_copyright',
            'label'    => esc_html__('Footer Copyright', 'harry'),
            'section'  => 'harry_footer_info',
            'default'  => esc_html__('© 2022 Harry All Rights Reserved.', 'harry'),
            'priority' => 10,
        ]
    );
};

function harry_blog_section()
{
    new \Kirki\Section(
        'harry_blog_option',
        [
            'title'       => esc_html__('Blog Info', 'harry'),
            'description' => esc_html__('Blog info section here', 'harry'),
            'panel'       => 'harry_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings' => 'harry_breadcrumb_bg',
            'label'    => esc_html__('Breadcrumb Image', 'harry'),
            'section'  => 'harry_blog_option',

            'priority' => 10,
        ]
    );
};

harry_header_info();
harry_header_logo();
harry_side_info_section();
harry_social_info();
harry_footer_info();
harry_blog_section();
