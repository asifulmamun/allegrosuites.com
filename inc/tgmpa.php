<?php

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'my_theme_register_required_plugins');

function my_theme_register_required_plugins() {
    $plugins = array(
        /* array(
            'name'      => 'Advanced Custom Fields', // The plugin name
            'slug'      => 'advanced-custom-fields', // The plugin slug (typically the folder name)
            'required'  => true, // If false, the plugin is only 'recommended' instead of required
        ), */
        array(
            'name'      => 'Elementor',
            'slug'      => 'elementor',
            'required'  => true,
        ),
        array(
            'name'      => 'Elementor Pro',
            'slug'      => 'elementor-pro',
            'source'    => get_template_directory() . '/lib/plugins/elementor-pro.zip', // Path to the plugin zip file (for premium plugins)
            'required'  => true,
        ),
    );

    $config = array(
        'id'           => 'my-theme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                         // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins',    // Menu slug.
        'has_notices'  => true,                       // Show admin notices or not.
        'dismissable'  => true,                       // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                         // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                      // Automatically activate plugins after installation or not.
        'message'      => '',                         // Message to output right before the plugins table.
    );

    tgmpa($plugins, $config);
}

