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

    wp_enqueue_style(
        'lvc-css',
        plugin_dir_url(__FILE__) . 'assets/css/lvc.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'lvc_enqueue_assets');

function lvc_render_counter() {
    if (!is_single()) return;
    $post_id = get_the_ID();
    echo '<div id="lvc-counter" data-post="' . esc_attr($post_id) . '"></div>';
}
add_action('wp_footer', 'lvc_render_counter');
