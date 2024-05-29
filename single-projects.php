<?php get_header(null, ['headerClass' => 'header navbar navbar-expand-lg bg-light navbar-sticky']); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?= esc_url(get_post_type_archive_link('projects')) ?>">Проекты</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
        </ol>
    </nav>

    <?php

    $terms = get_the_terms(get_the_ID(), 'project_category');
    if ($terms && !is_wp_error($terms)) {
        $term_names = wp_list_pluck($terms, 'name');
        $term_names = implode(' / ', $term_names);
    } else {
        $term_names = '';
    }

    ?>

    <section class="container pb-4 mb-2 mb-lg-3">
        <h1><?php the_title(); ?></h1>
        <p class="text-muted mb-0"><?= $term_names ?></p>
    </section>

    <?php

    // Получаем URL картинки
    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
    // Если нет картинки, используем картинку по умолчанию
    if (!$image_url) {
        $image_url = get_template_directory_uri() . '/assets/images/default.jpg';
    }

    ?>

    <section class="jarallax" data-jarallax="" data-speed="0.4">

        <div class="d-none d-xxl-block" style="height: 800px;"></div>
        <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
        <div class="d-md-none" style="height: 400px;"></div>
        <div id="jarallax-container-0" class="jarallax-container" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; z-index: -100; clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
            <div class="jarallax-img" style="background-image: url(<?= $image_url ?>); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px; width: 1367px; height: 818.4px; overflow: hidden; pointer-events: none; transform-style: preserve-3d; backface-visibility: hidden; margin-top: 72.8px; transform: translate3d(0px, 48.7937px, 0px);" data-jarallax-original-styles="background-image: url(<?= $image_url ?>);"></div>
        </div>
    </section>

    <?php the_content(); ?>

    <section class="container py-5 mt-2 mt-md-4 mt-lg-5 mb-xl-2">
        <h2 class="h1 text-center pt-2 pt-md-3 pb-4 mb-2 mb-lg-3">Узнайте больше о проектах</h2>
        <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-swiper-options="{
          &quot;slidesPerView&quot;: 1,
          &quot;spaceBetween&quot;: 24,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;560&quot;: {
              &quot;slidesPerView&quot;: 2
            },
            &quot;1000&quot;: {
              &quot;slidesPerView&quot;: 3
            }
          }
        }">
            <div class="swiper-wrapper" id="swiper-wrapper-610fbb109e1dc5381c" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">

                <?php

                $args = [
                    'post_type' => 'projects',
                    'posts_per_page' => 3,
                    'orderby' => 'rand'
                ];

                $random_projects = new WP_Query($args);

                $count = 0;

                ?>

                <?php if ($random_projects->have_posts()) : ?>
                    <?php while ($random_projects->have_posts()) : $random_projects->the_post(); ?>
                        <?php $count++ ?>

                        <?php if ($count === 1) : ?>
                            <div class="swiper-slide h-auto swiper-slide-active" style="width: 409px; margin-right: 24px;" role="group" aria-label="1 / 3">
                                <div class="card card-portfolio">
                                    <div class="card-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h4 mb-2">
                                            <a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="card-portfolio-meta">
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'project_category');
                                            if ($terms && !is_wp_error($terms)) :
                                                $term_names = wp_list_pluck($terms, 'name');
                                                echo '<span class="text-muted">' . implode(' / ', $term_names) . '</span>';
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($count === 2) : ?>
                            <div class="swiper-slide h-auto swiper-slide-next" style="width: 409px; margin-right: 24px;" role="group" aria-label="2 / 3">
                                <div class="card card-portfolio">
                                    <div class="card-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h4 mb-2">
                                            <a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="card-portfolio-meta">
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'project_category');
                                            if ($terms && !is_wp_error($terms)) :
                                                $term_names = wp_list_pluck($terms, 'name');
                                                echo '<span class="text-muted">' . implode(' / ', $term_names) . '</span>';
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($count === 3) : ?>
                            <div class="swiper-slide h-auto" role="group" aria-label="3 / 3" style="width: 409px; margin-right: 24px;">
                                <div class="card card-portfolio">
                                    <div class="card-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h4 mb-2">
                                            <a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="card-portfolio-meta">
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'project_category');
                                            if ($terms && !is_wp_error($terms)) :
                                                $term_names = wp_list_pluck($terms, 'name');
                                                echo '<span class="text-muted">' . implode(' / ', $term_names) . '</span>';
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination position-relative pt-sm-2 mt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>