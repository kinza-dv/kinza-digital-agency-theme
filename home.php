<?php get_header(); ?>

<!-- Hero -->
<section class="hero jarallax position-relative d-flex align-items-center min-vh-100 bg-light mb-5 py-lg-5 pt-5" data-jarallax="" data-img-position="0% 100%" data-speed="0.5" data-jarallax-original-styles="background-image: url(assets/img/landing/digital-agency/hero-bg.svg);">
    <div class="container position-relative zindex-5 py-5">
        <div class="row justify-content-md-start justify-content-center">
            <div class="col-md-6 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
                <div class="mb-md-5 pb-xl-5 mb-4">

                    <div class="d-inline-flex align-items-center position-relative mb-3">
                        <a href="https://www.youtube.com/watch?v=zPo5ZaH6sW8" class="btn btn-video btn-icon btn-lg flex-shrink-0 me-3 stretched-link" data-bs-toggle="video" aria-label="Play video" data-lg-id="fbf85286-f9c5-4317-a7f4-80f74384219e">
                            <i class="bx bx-play"></i>
                        </a>
                        <h4 class="mb-0">Презентация</h4>
                    </div>

                    <h1 class="display-2 mb-md-5 mb-3 pb-3">
                        Мы <span class="text-gradient-primary">воплощаем</span> Ваши идеи в реальность
                    </h1>
                    <div class="d-md-flex align-items-md-start">
                        <a href="<?= get_permalink(get_page_by_path('contacts')->ID) ?>" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Написать нам</a>
                        <p class="d-lg-block d-none mb-0 ps-md-3">Kinza - IT-компания из Хабаровска. Мы создаем мобильные приложения и веб-сайты, которые ценят по всему миру.</p>
                    </div>
                </div>

                <div class="d-inline-flex align-items-center justify-content-center justify-content-md-start position-relative">
                    <a href="#benefits" data-scroll="" data-scroll-offset="100" class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3" aria-label="Scroll for more">
                        <i class="bx bx-chevron-down"></i>
                    </a>
                    <span class="fs-sm">Изучить больше</span>
                </div>
            </div>

            <!-- Animated gfx -->
            <div class="col-sm-6 col-9 order-md-2 order-1">
                <lottie-player class="mx-auto" src="<?= get_template_directory_uri() ?>/assets/json/animation-digital-agency.json" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
            </div>
        </div>
    </div>
    <div id="jarallax-container-0" class="jarallax-container hero__jarallax-container">
        <div class="hero__jarallax-container__inner" style='background-image: url("<?= get_template_directory_uri() ?>/assets/svg/hero-bg.svg");'></div>
    </div>
</section>


<!-- Benefits (features) -->
<section class="container mb-5 pt-lg-5" id="benefits">
    <div class="swiper pt-3 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-swiper-options='{
          "slidesPerView": 1,
          "pagination": {
            "el": "#swiper-benefits-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "991": {
              "slidesPerView": 3
            }
          }
        }'>
        <div class="swiper-wrapper" id="swiper-wrapper-d108a94f9939f4e21" aria-live="polite" style="transform: translate3d(0, 0, 0);">

            <!-- Item -->
            <div class="swiper-slide border-end-lg px-2 swiper-slide-active" style="width: 432px;" role=group aria-label="1 / 3">
                <div class="text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/svg/idea.svg" width="48" alt="Bulb icon" class="d-block mb-4 mx-auto">
                    <h4 class="mb-2 pb-1">Креативные решения</h4>
                    <p class="mx-auto" style="max-width: 336px;">Мы воплощаем уникальные идеи в инновационные цифровые продукты.</p>
                </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide border-end-lg px-2 swiper-slide-next" style="width: 432px;" role="group" aria-label="2 / 3">
                <div class="text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/svg/award.svg" width="48" alt="Award icon" class="d-block mb-4 mx-auto">
                    <h4 class="mb-2 pb-1">Награды</h4>
                    <p class="mx-auto" style="max-width: 336px;">Наши проекты отмечены престижными наградами в области IT.</p>
                </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide px-2" role="group" aria-label="3 / 3" style="width: 432px;">
                <div class="text-center">
                    <img src="<?= get_template_directory_uri() ?>/assets/svg/team.svg" width="48" alt="Team icon" class="d-block mb-4 mx-auto">
                    <h4 class="mb-2 pb-1">Команда профессионалов</h4>
                    <p class="mx-auto" style="max-width: 336px;">Наши эксперты объединяют опыт и таланты для достижения выдающихся результатов.</p>
                </div>
            </div>
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock" id="swiper-benefits-pagination"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
</section>


<!-- Featured Projects -->
<section class="container mb-5 pt-lg-2 pt-xl-4 pb-2 pb-md-3 pb-lg-5">
    <h2 class="h1 mb-4 text-center">Проекты</h2>
    <p class="mb-4 mx-auto pb-3 fs-lg text-center" style="max-width: 636px;">Мы создаем веб-сайты и мобильные приложения, маркетинговые материалы, брендинг, веб-дизайн, UX / UI дизайн и иллюстрации.</p>

    <!-- Portfolio grid -->
    <div class="masonry-grid row g-md-4 g-3 mb-4 shuffle featured-projects__portfolio-grid">
        <?php
        // Аргументы запроса
        $args = array(
            'post_type' => 'projects',
            'posts_per_page' => 4,
        );

        // Новый объект WP_Query
        $query = new WP_Query($args);

        // Проверяем, есть ли посты
        if ($query->have_posts()) :
            $count = 0; // Счётчик для отслеживания количества выведенных проектов
            while ($query->have_posts()) : $query->the_post();
                // Получаем URL картинки
                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                // Если нет картинки, используем картинку по умолчанию
                if (!$image_url) {
                    $image_url = get_template_directory_uri() . '/assets/images/default.jpg';
                }

                // Увеличиваем счётчик
                $count++;

                // Получаем теги
                $terms = get_the_terms(get_the_ID(), 'project_category');
                $term_list = '';
                if ($terms && !is_wp_error($terms)) {
                    $term_names = wp_list_pluck($terms, 'name');
                    $term_list = implode(' / ', $term_names);
                }

                if ($count == 1) : ?>
                    <div class="masonry-grid-item col-md-4 col-sm-6 col-12 shuffle-item shuffle-item--visible featured-projects__portfolio-grid__block--1">
                        <a href="<?php the_permalink(); ?>" class="card card-portfolio card-hover bg-transparent border-0 h-100">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
                                <div class="position-relative zindex-2">
                                    <h3 class="h5 text-light mb-2"><?php the_title(); ?></h3>
                                    <span class="fs-sm text-light opacity-70"><?= esc_html($term_list); ?></span>
                                </div>
                            </div>
                            <div class="card-img h-100">
                                <img src="<?= esc_url($image_url); ?>" class="rounded-3 h-100 object-fit-cover" alt="<?php the_title_attribute(); ?>">
                            </div>
                        </a>
                    </div>
                <?php elseif ($count == 2) : ?>
                    <div class="masonry-grid-item col-md-4 col-sm-6 col-12 shuffle-item shuffle-item--visible featured-projects__portfolio-grid__block--2">
                        <a href="<?php the_permalink(); ?>" class="card card-portfolio card-hover bg-transparent border-0 h-100">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
                                <div class="position-relative zindex-2">
                                    <h3 class="h5 text-light mb-2"><?php the_title(); ?></h3>
                                    <span class="fs-sm text-light opacity-70"><?= esc_html($term_list); ?></span>
                                </div>
                            </div>
                            <div class="card-img h-100">
                                <img src="<?= esc_url($image_url); ?>" class="rounded-3 h-100 object-fit-cover" alt="<?php the_title_attribute(); ?>">
                            </div>
                        </a>
                    </div>
                <?php elseif ($count == 3) : ?>
                    <div class="masonry-grid-item col-md-4 col-sm-6 col-12 shuffle-item shuffle-item--visible featured-projects__portfolio-grid__block--3">
                        <a href="<?php the_permalink(); ?>" class="card card-portfolio card-hover bg-transparent border-0 h-100">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
                                <div class="position-relative zindex-2">
                                    <h3 class="h5 text-light mb-2"><?php the_title(); ?></h3>
                                    <span class="fs-sm text-light opacity-70"><?= esc_html($term_list); ?></span>
                                </div>
                            </div>
                            <div class="card-img h-100">
                                <img src="<?= esc_url($image_url); ?>" class="rounded-3 h-100 object-fit-cover" alt="<?php the_title_attribute(); ?>">
                            </div>
                        </a>
                    </div>
                <?php elseif ($count == 4) : ?>
                    <div class="masonry-grid-item col-md-8 col-12 shuffle-item shuffle-item--visible featured-projects__portfolio-grid__block--4">
                        <a href="<?php the_permalink(); ?>" class="card card-portfolio card-hover bg-transparent border-0 h-100 w-100">
                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                                <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
                                <div class="position-relative zindex-2">
                                    <h3 class="h5 text-light mb-2"><?php the_title(); ?></h3>
                                    <span class="fs-sm text-light opacity-70"><?= esc_html($term_list); ?></span>
                                </div>
                            </div>
                            <div class="card-img h-100 w-100">
                                <img src="<?= esc_url($image_url); ?>" class="rounded-3 h-100 w-100 object-fit-cover" alt="<?php the_title_attribute(); ?>">
                            </div>
                        </a>
                    </div>
                <?php endif;

            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>

    <div class="pt-md-3 pt-2 text-center">
        <a href="<?= esc_url(get_post_type_archive_link('projects')) ?>" class="btn btn-lg btn-primary w-sm-auto w-100">Все проекты</a>
    </div>
</section>


<!-- Services -->
<section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
    <div class="card border-0 bg-secondary p-md-5 px-sm-2 pt-4 pb-3">
        <div class="card-body mx-auto" style="max-width: 860px;">
            <h2 class="h1 mb-4 text-center">Наши компетенции</h2>
            <p class="mb-4 pb-3 fs-lg text-center text-muted">
                Мы полностью понимаем ваш бизнес. Если вам нужно что-то обновить, мы будем более чем рады помочь вам с предоставляемыми нами услугами.
            </p>

            <!-- Accordion: Alternative style -->
            <div class="accordion" id="accordion-services">
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h3 class="accordion-header" id="heading-1">
                        <button class="accordion-button fs-xl shadow-none rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">Цифровой маркетинг</button>
                    </h3>
                    <div class="accordion-collapse collapse show" id="collapse-1" aria-labelledby="heading-1" data-bs-parent="#accordion-services">
                        <div class="accordion-body pt-0">
                            <div class="d-flex flex-md-row flex-column align-items-md-center">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/01.png" width="200" alt="Digital Marketing" class="me-md-4 mb-md-0 mb-3">
                                <div class="ps-md-3">
                                    <p class="mb-0">Мы разрабатываем стратегии цифрового маркетинга, которые увеличивают ваш охват и привлекают новых клиентов. Наши специалисты используют новейшие инструменты и методы для повышения эффективности ваших кампаний.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h3 class="accordion-header" id="heading-2">
                        <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Веб-разработка</button>
                    </h3>
                    <div class="accordion-collapse collapse" id="collapse-2" aria-labelledby="heading-2" data-bs-parent="#accordion-services">
                        <div class="accordion-body pt-0">
                            <div class="d-flex flex-md-row flex-column align-items-md-center">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/02.png" width="200" alt="Web Development" class="me-md-4 mb-md-0 mb-3">
                                <div class="ps-md-3">
                                    <p class="mb-0">Наша команда создает современные и функциональные веб-сайты, которые привлекают внимание и обеспечивают отличный пользовательский опыт. Мы работаем с самыми передовыми технологиями, чтобы ваши проекты выделялись на фоне конкурентов.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h3 class="accordion-header" id="heading-3">
                        <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">Разработка приложения</button>
                    </h3>
                    <div class="accordion-collapse collapse" id="collapse-3" aria-labelledby="heading-3" data-bs-parent="#accordion-services">
                        <div class="accordion-body pt-0">
                            <div class="d-flex flex-md-row flex-column align-items-md-center">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/03.png" width="200" alt="Application Development" class="me-md-4 mb-md-0 mb-3">
                                <div class="ps-md-3">
                                    <p class="mb-0">Мы разрабатываем мобильные приложения, которые удовлетворяют потребности вашего бизнеса и ожидания пользователей. Наши решения работают плавно на всех платформах и обеспечивают высокий уровень безопасности.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h3 class="accordion-header" id="heading-4">
                        <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">Проектирование</button>
                    </h3>
                    <div class="accordion-collapse collapse" id="collapse-4" aria-labelledby="heading-4" data-bs-parent="#accordion-services">
                        <div class="accordion-body pt-0">
                            <div class="d-flex flex-md-row flex-column align-items-md-center">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/04.png" width="200" alt="Strategy" class="me-md-4 mb-md-0 mb-3">
                                <div class="ps-md-3">
                                    <p class="mb-0">Наши специалисты по проектированию создают пользовательские интерфейсы, которые обеспечивают удобство и простоту использования. Мы уделяем внимание каждой детали, чтобы ваш продукт был не только красивым, но и функциональным.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                    <h3 class="accordion-header" id="heading-5">
                        <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true" aria-controls="collapse-5">Цифровая реклама</button>
                    </h3>
                    <div class="accordion-collapse collapse" id="collapse-5" aria-labelledby="heading-5" data-bs-parent="#accordion-services">
                        <div class="accordion-body pt-0">
                            <div class="d-flex flex-md-row flex-column align-items-md-center">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/05.png" width="200" alt="Digital Advertising" class="me-md-4 mb-md-0 mb-3">
                                <div class="ps-md-3">
                                    <p class="mb-0">Наши эксперты по цифровой рекламе помогут вам достигнуть целевой аудитории и увеличить конверсию. Мы используем разнообразные рекламные каналы и аналитические инструменты для максимальной отдачи от ваших инвестиций.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brands (Carousel) -->
<section class="container pb-4 pb-lg-5 mb-3">
    <div class="d-flex align-items-center justify-content-md-between justify-content-center mb-md-4 mb-3">
        <h2 class="mb-0">Нам доверяют</h2>
        <div class="d-md-flex d-none ms-4">
            <button type="button" id="prev-brand" class="btn btn-prev btn-icon btn-sm me-2" aria-label="Previous slide" tabindex="0" aria-controls="swiper-wrapper-d76def4ab4578c36">
                <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="next-brand" class="btn btn-next btn-icon btn-sm ms-2" aria-label="Next slide" tabindex="0" aria-controls="swiper-wrapper-d76def4ab4578c36">
                <i class="bx bx-chevron-right"></i>
            </button>
        </div>
    </div>
    <div class="swiper mx-n2 swiper-initialized swiper-horizontal swiper-pointer-events" data-swiper-options='{
          "slidesPerView": 2,
          "navigation": {
            "prevEl": "#prev-brand",
            "nextEl": "#next-brand"
          },
          "loop": true,
          "pagination": {
            "el": "#swiper-brands-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3,
              "spaceBetween": 8
            },
            "650": {
              "slidesPerView": 4,
              "spaceBetween": 8
            },
            "900": {
              "slidesPerView": 5,
              "spaceBetween": 8
            },
            "1100": {
              "slidesPerView": 6,
              "spaceBetween": 8
            }
          }
        }'>
        <div class="swiper-wrapper" id="swiper-wrapper-d76def4ab4578c36" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-1320px, 0px, 0px);">
            <div class="swiper-slide py-3 swiper-slide-active" data-swiper-slide-index="0" style="height: 140px; margin-right: 8px;" role="group" aria-label="1 / 12">
                <a href="https://bot-sad.com" class="card card-body card-hover px-2 mx-2 h-100 d-flex align-items-center justify-content-center" target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/assets/svg/01.svg" class="d-block mx-auto my-2 h-100" height="34" alt="Бот Сад">
                </a>
            </div>
            <div class="swiper-slide py-3 swiper-slide-active" data-swiper-slide-index="1" style="height: 140px; margin-right: 8px;" role="group" aria-label="1 / 12">
                <a href="https://stroyinvestdv.ru/" class="card card-body card-hover px-2 mx-2 h-100 d-flex align-items-center justify-content-center" target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/stroyinvest.png" class="d-block mx-auto my-2 h-100" height="34" alt="Стройинвест">
                </a>
            </div>
            <div class="swiper-slide py-3 swiper-slide-active" data-swiper-slide-index="2" style="height: 140px; margin-right: 8px;" role="group" aria-label="1 / 12">
                <a href="https://dvgups.ru/" class="card card-body card-hover px-2 mx-2 h-100 d-flex align-items-center justify-content-center" target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/assets/svg/02.svg" class="d-block mx-auto my-2 h-100" height="34" alt="ДВГУПС">
                </a>
            </div>
            <div class="swiper-slide py-3 swiper-slide-active" data-swiper-slide-index="3" style="height: 140px; margin-right: 8px;" role="group" aria-label="1 / 12">
                <a href="https://hkotso.ru/" class="card card-body card-hover px-2 mx-2 h-100 d-flex align-items-center justify-content-center" target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/hkotso.png" class="d-block mx-auto my-2 h-100" height="34" alt="ХКОТСО">
                </a>
            </div>
            <div class="swiper-slide py-3 swiper-slide-active" data-swiper-slide-index="3" style="height: 140px; margin-right: 8px;" role="group" aria-label="1 / 12">
                <a href="https://redenco.ru/" class="card card-body card-hover px-2 mx-2 h-100 d-flex align-items-center justify-content-center" target="_blank">
                    <img src="<?= get_template_directory_uri() ?>/assets/svg/03.svg" class="d-block mx-auto my-2 h-100" height="34" alt="redenco">
                </a>
            </div>
        </div>
    </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-3 mt-4 d-md-none d-flex swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" id="swiper-brands-pagination"></div>

        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</section>


<?php

$latest_news = get_latest_news();

?>
<div class="bg-secondary mb-5 pt-5">
    <?php if (count($latest_news)) : ?>
    <section class="container mb-5 py-lg-5">
        <h2 class="h1 mb-4 pb-3 text-center">Новости</h2>
        <div class="row">
            <div class="col-lg-5 col-12 mb-lg-0 mb-4">
                <?php if (isset($latest_news[0])): ?>
                    <article class="card h-100 border-0 shadow-sm">
                        <div class="position-relative" style="height: 250px">
                            <a href="<?= $latest_news[0]['link'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                            <img src="<?= $latest_news[0]['image'] ?>" class="card-img-top w-100 h-100 object-fit-cover" alt="Image">
                        </div>
                        <div class="card-body pb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <?php if (!empty($latest_news[0]['category'])): ?>
                                    <a href="<?= $latest_news[0]['link'] ?>" class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $latest_news[0]['category'] ?></a>
                                <?php endif; ?>
                                <span class="fs-sm text-muted"><?= $latest_news[0]['date'] ?></span>
                            </div>
                            <h3 class="h5 text-truncate">
                                <a href="<?= $latest_news[0]['link'] ?>"><?= $latest_news[0]['title'] ?></a>
                            </h3>
                            <p style="-webkit-line-clamp: 3; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden;"><?= $latest_news[0]['content'] ?></p>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
            <div class="col">
                <?php if (isset($latest_news[1])): ?>
                    <article class="card border-0 shadow-sm overflow-hidden mb-4">
                        <div class="row g-0">
                            <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url(<?= $latest_news[1]['image'] ?>); min-height: 15rem;">
                                <a href="<?= $latest_news[1]['link'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <?php if (!empty($latest_news[1]['category'])): ?>
                                            <a href="<?= $latest_news[1]['link'] ?>" class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $latest_news[1]['category'] ?></a>
                                            <span class="fs-sm text-muted border-start ps-3 ms-3"><?= $latest_news[1]['date'] ?></span>
                                        <?php else: ?>
                                            <span class="fs-sm text-muted"><?= $latest_news[1]['date'] ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="h5 text-truncate">
                                        <a href="<?= $latest_news[1]['link'] ?>"><?= $latest_news[1]['title'] ?></a>
                                    </h3>
                                    <p style="-webkit-line-clamp: 3; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden;"><?= $latest_news[1]['content'] ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>

                <?php if (isset($latest_news[2])): ?>
                    <article class="card border-0 shadow-sm overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url(<?= $latest_news[2]['image'] ?>); min-height: 15rem;">
                                <a href="<?= $latest_news[2]['link'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <?php if (!empty($latest_news[2]['category'])): ?>
                                            <a href="<?= $latest_news[2]['link'] ?>" class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $latest_news[2]['category'] ?></a>
                                            <span class="fs-sm text-muted border-start ps-3 ms-3"><?= $latest_news[2]['date'] ?></span>
                                        <?php else: ?>
                                            <span class="fs-sm text-muted"><?= $latest_news[2]['date'] ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="h5 text-truncate">
                                        <a href="<?= $latest_news[2]['link'] ?>"><?= $latest_news[2]['title'] ?></a>
                                    </h3>
                                    <p style="-webkit-line-clamp: 3; display: -webkit-box; -webkit-box-orient: vertical; overflow: hidden;"><?= $latest_news[2]['content'] ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
            <div class="col-12 mt-4 pt-lg-4 pt-3 text-center">
                <a href="<?= get_post_type_archive_link('news') ?>" class="btn btn-lg btn-outline-primary w-sm-auto w-100">Все новости</a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="container pt-3 pb-4 pb-md-5" style="margin-top: -156px; margin-bottom: 120px; transform: translateY(156px);">
        <div class="card border-0 bg-gradient-primary">
            <div class="card-body p-md-5 p-4 bg-size-cover" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/contact-bg.png);">
                <div class="py-md-5 py-4 text-center">
                    <h3 class="h4 fw-normal text-light opacity-75">Хотите работать с нами? Давайте поговорим</h3>
                    <a href="mailto:kinza-agency@ya.ru" class="display-6 text-light">kinza-agency@ya.ru</a>
                    <div class="pt-md-5 pt-4 pb-md-2">
                        <a
                            href="<?= get_permalink(get_page_by_path('contacts')->ID) ?>"
                            class="btn btn-lg btn-light"
                        >Написать нам</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
