<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_filter('show_admin_bar', '__return_false'); //Hide adminbar

require_once(__DIR__ . '/inc/carbon-fields.php');
require_once(__DIR__ . '/inc/generated-blocks.php');
require_once(__DIR__ . '/inc/ajax.php');
require_once(__DIR__ . '/inc/post-types.php');
require_once(__DIR__ . '/inc/libs.php');
require_once(__DIR__ . '/inc/duplicate.php');

add_action('after_setup_theme', 'init_autoload');
function init_autoload()
{
    require_once(__DIR__ . '/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

register_nav_menu('header-menu', __('Шапка'));
register_nav_menu('footer-menu', __('Подвал'));

add_action('admin_menu', function() {
    remove_menu_page('edit.php');
});