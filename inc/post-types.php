<?php

add_action('init', 'register_post_types');

function register_post_types(): void
{
    // Регистрируем новый тип записи "Проекты"
    register_post_type('projects', [
        'labels' => [
            'name' => 'Проекты',
            'singular_name' => 'Проект',
            'add_new' => 'Добавить новый',
            'add_new_item' => 'Добавить новый проект',
            'edit_item' => 'Редактировать проект',
            'new_item' => 'Новый проект',
            'view_item' => 'Просмотреть проект',
            'search_items' => 'Искать проекты',
            'not_found' => 'Проекты не найдены',
            'not_found_in_trash' => 'Проекты в корзине не найдены',
            'all_items' => 'Все проекты',
            'menu_name' => 'Проекты',
            'name_admin_bar' => 'Проект'
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'projects', 'with_front' => false],
    ]);

    // Регистрируем таксономию "Категории проектов"
    register_taxonomy('project_category', ['projects'], [
        'hierarchical' => true,
        'labels' => [
            'name' => _x('Категории проектов', 'taxonomy general name', 'textdomain'),
            'singular_name' => _x('Категория проектов', 'taxonomy singular name', 'textdomain'),
            'search_items' => __('Искать категории проектов', 'textdomain'),
            'all_items' => __('Все категории проектов', 'textdomain'),
            'parent_item' => __('Родительская категория проектов', 'textdomain'),
            'parent_item_colon' => __('Родительская категория проектов:', 'textdomain'),
            'edit_item' => __('Изменить категорию проектов', 'textdomain'),
            'update_item' => __('Обновить категорию проектов', 'textdomain'),
            'add_new_item' => __('Добавить новую категорию проектов', 'textdomain'),
            'new_item_name' => __('Новое имя категории проектов', 'textdomain'),
            'menu_name' => __('Категории проектов', 'textdomain'),
        ],
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ]);

    // Регистрируем новый тип записи "Новости"
    register_post_type('news', [
        'labels' => [
            'name' => 'Новости',
            'singular_name' => 'Новость',
            'add_new' => 'Добавить новую',
            'add_new_item' => 'Добавить новую новость',
            'edit_item' => 'Редактировать новость',
            'new_item' => 'Новая новость',
            'view_item' => 'Просмотреть новость',
            'search_items' => 'Искать новости',
            'not_found' => 'Новости не найдены',
            'not_found_in_trash' => 'Новости в корзине не найдены',
            'all_items' => 'Все новости',
            'menu_name' => 'Новости',
            'name_admin_bar' => 'Новость'
        ],
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-post',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'news', 'with_front' => false],
    ]);

    // Регистрируем таксономию "Категории новостей"
    register_taxonomy('news_category', ['news'], [
        'hierarchical' => true,
        'labels' => [
            'name' => _x('Категории новостей', 'taxonomy general name', 'textdomain'),
            'singular_name' => _x('Категория новостей', 'taxonomy singular name', 'textdomain'),
            'search_items' => __('Искать категории новостей', 'textdomain'),
            'all_items' => __('Все категории новостей', 'textdomain'),
            'parent_item' => __('Родительская категория новостей', 'textdomain'),
            'parent_item_colon' => __('Родительская категория новостей:', 'textdomain'),
            'edit_item' => __('Изменить категорию новостей', 'textdomain'),
            'update_item' => __('Обновить категорию новостей', 'textdomain'),
            'add_new_item' => __('Добавить новую категорию новостей', 'textdomain'),
            'new_item_name' => __('Новое имя категории новостей', 'textdomain'),
            'menu_name' => __('Категории новостей', 'textdomain'),
        ],
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_rest' => true,
    ]);

}