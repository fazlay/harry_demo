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
}
harry_header_info();
harry_header_logo();
