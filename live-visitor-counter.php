<?php
/**
 * Plugin Name: Live Visitor Counter
 * Description: Shows live visitor count on posts/pages.
 * Author: Zohaib Hassan
 * Version: 1.0.0
 */

if (!defined('ABSPATH')) exit;

function lvc_enqueue_assets() {
    wp_enqueue_script(
        'lvc-js',
        plugin_dir_url(__FILE__) . 'assets/js/lvc.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'lvc_enqueue_assets');

function lvc_render_counter() {
    if (!is_single()) return;

    echo '<div id="lvc-counter">Loading viewers...</div>';
}
add_action('wp_footer', 'lvc_render_counter');