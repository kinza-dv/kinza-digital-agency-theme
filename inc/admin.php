<?php

function feedback_admin_menu() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'feedback';
    $unread_count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE is_read = 0");

    add_menu_page(
        'Запросы',
        'Запросы' . (
            $unread_count > 0
                ? ' <span class="update-plugins count-' . $unread_count . '"><span class="plugin-count">' . $unread_count . '</span></span>'
                : ''
        ),
        'manage_options',
        'feedback-requests',
        'display_feedback_requests'
    );
}

add_action('admin_menu', 'feedback_admin_menu');

// Отображение запросов в админке
function display_feedback_requests() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'feedback';
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");

    echo '<div class="wrap">';
    echo '<h2>Запросы обратной связи</h2>';
    echo '<table class="widefat fixed" cellspacing="0">';
    echo '<thead><tr><th>Услуга</th><th>Имя</th><th>Email</th><th>Сообщение</th><th>Статус</th><th>Дата</th><th>Действие</th></tr></thead>';
    echo '<tbody>';

    foreach ($results as $row) {
        echo $row->is_read ? '<tr>' : '<tr style="background: #6366f13b">';
        echo '<td>' . esc_html($row->service) . '</td>';
        echo '<td>' . esc_html($row->name) . '</td>';
        echo '<td>' . esc_html($row->email) . '</td>';
        echo '<td>' . esc_html($row->message) . '</td>';
        echo '<td>' . ($row->is_read ? 'Прочитано' : 'Непрочитано') . '</td>';
        echo '<td>' . esc_html($row->submitted_at) . '</td>';
        echo '<td><a href="' . esc_url(add_query_arg(array('mark_as_read' => $row->id))) . '">Отметить как прочитанное</a></td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

// Обработка изменения статуса запроса
function mark_feedback_as_read() {
    if (isset($_GET['mark_as_read'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'feedback';
        $id = intval($_GET['mark_as_read']);

        $wpdb->update(
            $table_name,
            ['is_read' => 1],
            ['id' => $id]
        );

        wp_redirect(remove_query_arg('mark_as_read'));
        exit;
    }
}

add_action('admin_init', 'mark_feedback_as_read');
