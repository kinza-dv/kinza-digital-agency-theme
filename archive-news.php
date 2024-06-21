<?php get_header(null, ['headerClass' => 'header navbar navbar-expand-lg bg-light navbar-sticky']); ?>

<nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Главная</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Новости</li>
    </ol>
</nav>

<?php

// Получение параметров запроса
$category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : '';
$search = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

// Параметры для WP_Query
$page = (get_query_var('page')) ? get_query_var('page') : 1;
$args = [
    'post_type' => 'news',
    'posts_per_page' => 9,
    'paged' => $page,
];

if (!empty($search)) {
    $args['s'] = $search;
}

if (!empty($category)) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'news_category',
            'field'    => 'slug',
            'terms'    => $category,
        ],
    ];
}

// Выполнение запроса
$query = new WP_Query($args);

?>

<section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">
    <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
        <div class="col-lg-5 col-md-4">
            <h1 class="mb-2 mb-md-0">Новости</h1>
        </div>
        <div class="col-lg-7 col-md-8">
            <form id="filter-form" class="row gy-2" method="get" action="<?= get_post_type_archive_link('news') ?>">
                <div class="col-lg-5 col-sm-6">
                    <div class="d-flex align-items-center">
                        <select id="category-select" class="form-select" name="category">
                            <option value="">Все категории</option>
                            <?php
                            $categories = get_terms([
                                'taxonomy' => 'news_category',
                                'hide_empty' => false,
                            ]);
                            foreach ($categories as $cat) {
                                echo '<option value="' . esc_attr($cat->name) . '"' . selected($category, $cat->name, false) . '>' . esc_html($cat->name) . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-6">
                    <div class="input-group">
                        <input type="text" name="s" class="form-control pe-5 rounded" placeholder="Искать новости..." value="<?php echo esc_attr($search); ?>">
                        <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col pb-3">
                    <article class="card border-0 shadow-sm h-100">
                        <div class="position-relative" style="height: 200px">
                            <a href="<?php the_permalink(); ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Смотреть новость"></a>
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', ['class' => 'card-img-top h-100 w-100 object-fit-cover', 'alt' => get_the_title()]); ?>
                            <?php endif; ?>
                        </div>
                        <div class="card-body pb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <?php
                                $terms = get_the_terms(get_the_ID(), 'news_category');
                                if ($terms && !is_wp_error($terms)) {
                                    $term = array_shift($terms);
                                    echo '<a href="' . esc_url(get_term_link($term)) . '" class="badge fs-sm text-nav bg-secondary text-decoration-none">' . esc_html($term->name) . '</a>';
                                }
                                ?>
                                <span class="fs-sm text-muted"><?= format_date(get_the_date('Y-m-d H:i:s')); ?></span>
                            </div>
                            <h3 class="h5 mb-0">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('Новостей не найдено.', 'textdomain'); ?></p>
        <?php endif; ?>
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center pt-md-4 pt-2">
            <?php
            $total_pages = $query->max_num_pages;
            $current_page = max(1, get_query_var('page'));

            $base_url = esc_url(add_query_arg(null, null));

            if ($current_page > 1) {
                printf(
                    '<li class="page-item"><a href="%s" class="page-link" aria-label="Previous page"><i class="bx bx-chevron-left mx-n1"></i></a></li>',
                    esc_url(add_query_arg('page', $current_page - 1, $base_url))
                );
            }

            if ($total_pages > 1) {
                for ($i = 1; $i <= $total_pages; $i++) {
                    if ($i == $current_page) {
                        printf(
                            '<li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">%d <span class="visually-hidden">(current)</span></span></li>',
                            $i
                        );
                    } else {
                        printf(
                            '<li class="page-item d-none d-sm-block"><a href="%s" class="page-link">%d</a></li>',
                            esc_url(add_query_arg('page', $i, $base_url)),
                            $i
                        );
                    }
                }

                if ($total_pages > 1 && $current_page != $total_pages) {
                    printf(
                        '<li class="page-item disabled d-sm-none"><span class="page-link text-body">%d / %d</span></li>',
                        $current_page,
                        $total_pages
                    );
                }
            }

            if ($current_page < $total_pages) {
                printf(
                    '<li class="page-item"><a href="%s" class="page-link" aria-label="Next page"><i class="bx bx-chevron-right mx-n1"></i></a></li>',
                    esc_url(add_query_arg('page', $current_page + 1, $base_url))
                );
            }
            ?>
        </ul>
    </nav>
</section>

<script>
    document.getElementById('category-select').addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
</script>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
