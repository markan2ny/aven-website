<?php 

// ===============================
// Add acf options and sub page
// ===============================


// Options page
acf_add_options_page(
    array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        // 'capability' => 'manage_options',
        // 'position' => 2,
    )
);

/*Subpage menu to option page*/

acf_add_options_sub_page(
    array(
        'page_title'    => 'General Settings',
        'menu_title'    => 'General Settings',
        'parent_slug'   => 'theme-settings',
    )
);

acf_add_options_sub_page(
    array(
        'page_title'    => 'Home Settings',
        'menu_title'    => 'Home Settings',
        'parent_slug'   => 'theme-settings',
    )
);

acf_add_options_sub_page(
    array(
        'page_title'    => 'Promos Settings',
        'menu_title'    => 'Promos Settings',
        'parent_slug'   => 'theme-settings',
    )
);

// acf_add_options_sub_page(
//     array(
//         'page_title'    => 'Doctors Settings',
//         'menu_title'    => 'Doctors Settings',
//         'parent_slug'   => 'theme-settings',
//     )
// );
// acf_add_options_sub_page(
//     array(
//         'page_title'    => 'Institutional and Insurance Partners Settings',
//         'menu_title'    => 'Institutional and Insurance Partners Settings',
//         'parent_slug'   => 'theme-settings',
//     )
// );


// acf_add_options_sub_page(
//     array(
//         'page_title'    => 'Footer Settings',
//         'menu_title'    => 'Footer Settings',
//         'parent_slug'   => 'theme-settings',
//     )
// );

