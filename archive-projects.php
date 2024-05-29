<?php get_header(null, ['headerClass' => 'header navbar navbar-expand-lg bg-light navbar-sticky']); ?>
    <!-- Breadcrumb -->
    <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Главная</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Проекты</li>
        </ol>
    </nav>


    <!-- Page title + Filters -->
    <section class="container d-md-flex align-items-center justify-content-between pb-3">
        <h1 class="text-nowrap mb-md-4 pe-md-5">Проекты</h1>
    </section>

    <section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
        <div class="row pb-lg-3">
            <?php if (have_posts()) : ?>
                <?php $count = 0; ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    global $wp_query;

                    // Получаем URL картинки
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    // Если нет картинки, используем картинку по умолчанию
                    if (!$image_url) {
                        $image_url = get_template_directory_uri() . '/assets/images/default.jpg';
                    }

                    // Получаем теги
                    $terms = get_the_terms(get_the_ID(), 'project_category');
                    $term_list = '';
                    if ($terms && !is_wp_error($terms)) {
                        $term_names = wp_list_pluck($terms, 'name');
                        $term_list = implode(' / ', $term_names);
                    }

                    $count++;
                    if ($count >= 5) {
                        $count = 1;
                    }

                    // Разметка для разных размеров
                    $is_wide = $count === 2 || $count === 3; // Для второго и четвертого элемента
                    $col_class = $is_wide ? 'col-md-7' : 'col-md-5';
                    ?>

                    <!-- Item -->
                    <div class="<?php echo esc_attr($col_class); ?> mb-2">
                        <div class="card card-portfolio">
                            <div class="card-img">
                                <img style="height: 386px; width: 100%; object-fit: cover" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>">
                            </div>
                            <div class="card-body">
                                <h2 class="h4 mb-2">
                                    <a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a>
                                </h2>
                                <div class="card-portfolio-meta">
                                    <span class="text-muted"><?php echo esc_html($term_list); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php else : ?>
                <p>Проекты не найдены.</p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation example">
            <?php
            // Пагинация
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '<i class="bx bx-chevron-left mx-n1"></i>',
                'next_text' => '<i class="bx bx-chevron-right mx-n1"></i>',
            ));
            ?>
        </nav>
    </section>


    <!-- Contact CTA -->
    <section class="container mb-1 mb-md-3 mb-lg-4">
        <div class="bg-secondary rounded-3 overflow-hidden">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-5 offset-lg-1">
                    <div class="pt-5 pb-3 pb-md-5 px-4 px-lg-0 text-center text-md-start">
                        <p class="lead mb-3">Готовы приступить к работе?</p>
                        <h2 class="h1 pb-3 pb-sm-4">Выведите свой <span class="text-primary">бизнес</span> на новый уровень</h2>
                        <a href="#" class="btn btn-primary btn-lg">Работать с нами</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 offset-xl-1">
                    <div class="position-relative d-flex flex-column align-items-center justify-content-center h-100">
                        <svg class="d-none d-md-block position-absolute top-50 start-0 translate-middle-y" width="868" height="868" style="min-width: 868px;" viewBox="0 0 868 868" fill="none" xmlns="http://www.w3.org/2000/svg"><circle opacity="0.15" cx="434" cy="434" r="434" fill="#6366F1"></circle></svg>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/cta.png" class="position-relative zindex-3 mb-2 my-lg-4" width="382" alt="Illustration">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>