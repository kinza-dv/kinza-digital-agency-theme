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

function init_enqueue_scripts(): void
{
  wp_enqueue_style('kinza-style', get_template_directory_uri() . '/styles/style.css');
//  wp_enqueue_script('kinza-scripts', get_template_directory_uri() . '/js/scripts.js', [], '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'init_enqueue_scripts');

function format_date($date) {
    $time = strtotime($date);
    $current_time = time();
    $diff = $current_time - $time;

    if ($diff < 60) {
        return 'только что';
    } elseif ($diff < 3600) {
        $minutes = floor($diff / 60);
        return $minutes . ' ' . get_noun_plural_form($minutes, 'минуту', 'минуты', 'минут') . ' назад';
    } elseif ($diff < 86400) {
        $hours = floor($diff / 3600);
        return $hours . ' ' . get_noun_plural_form($hours, 'час', 'часа', 'часов') . ' назад';
    } else {
        $yesterday = strtotime('yesterday');
        if ($time > $yesterday) {
            return 'вчера в ' . date('H:i', $time);
        } else {
            if (date('Y', $time) == date('Y')) {
                return date('d M в H:i', $time);
            } else {
                return date('d M Y', $time);
            }
        }
    }
}

function get_noun_plural_form($number, $one, $two, $five) {
    $n = abs($number) % 100;
    if ($n > 10 && $n < 20) return $five;
    $n = $n % 10;
    if ($n > 1 && $n < 5) return $two;
    if ($n == 1) return $one;
    return $five;
}

function get_latest_news() {
    // Параметры запроса
    $args = [
        'post_type' => 'news',
        'posts_per_page' => 3,
        'post_status' => 'publish'
    ];

    // Выполнение запроса
    $latest_news_query = new WP_Query($args);

    // Проверка наличия новостей
    if ($latest_news_query->have_posts()) {
        $news_data = [];

        // Обработка результатов запроса
        while ($latest_news_query->have_posts()) {
            $latest_news_query->the_post();

            // Получение изображения
            $thumbnail_id = get_post_thumbnail_id();
            $thumbnail_url = wp_get_attachment_image_url($thumbnail_id, 'full');

            // Получение рубрик
            $categories = get_the_terms(get_the_ID(), 'news_category');
            $category_name = !empty($categories) ? $categories[0]->name : '';

            // Сбор данных о новости
            $news_data[] = [
                'title' => get_the_title(),
                'image' => $thumbnail_url,
                'category' => $category_name,
                'date' => format_date(get_the_date('Y-m-d H:i:s')),
                'link' => get_permalink()
            ];
        }

        // Восстановление глобальной переменной $post
        wp_reset_postdata();

        return $news_data;
    } else {
        return [];
    }
}
