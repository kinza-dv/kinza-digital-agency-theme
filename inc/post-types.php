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

  // Регистрируем новый тип записи "Статьи"
  register_post_type('articles', [
    'labels' => [
      'name' => 'Статьи',
      'singular_name' => 'Статья',
      'add_new' => 'Добавить новую',
      'add_new_item' => 'Добавить новую статью',
      'edit_item' => 'Редактировать статью',
      'new_item' => 'Новая статья',
      'view_item' => 'Просмотреть статью',
      'search_items' => 'Искать статьи',
      'not_found' => 'Статьи не найдены',
      'not_found_in_trash' => 'Статьи в корзине не найдены',
      'all_items' => 'Все статьи',
      'menu_name' => 'Статьи',
      'name_admin_bar' => 'Статья'
    ],
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-admin-post',
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    'rewrite' => ['slug' => 'articles', 'with_front' => false],
  ]);

  // Регистрируем таксономию "Категории статей"
  register_taxonomy('article_category', ['articles'], [
    'hierarchical' => true,
    'labels' => [
      'name' => _x('Категории статей', 'taxonomy general name', 'textdomain'),
      'singular_name' => _x('Категория статей', 'taxonomy singular name', 'textdomain'),
      'search_items' => __('Искать категории статей', 'textdomain'),
      'all_items' => __('Все категории статей', 'textdomain'),
      'parent_item' => __('Родительская категория статей', 'textdomain'),
      'parent_item_colon' => __('Родительская категория статей:', 'textdomain'),
      'edit_item' => __('Изменить категорию статей', 'textdomain'),
      'update_item' => __('Обновить категорию статей', 'textdomain'),
      'add_new_item' => __('Добавить новую категорию статей', 'textdomain'),
      'new_item_name' => __('Новое имя категории статей', 'textdomain'),
      'menu_name' => __('Категории статей', 'textdomain'),
    ],
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'show_in_rest' => true,
  ]);
}