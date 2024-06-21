<?php get_header(null, ['headerClass' => 'header navbar navbar-expand-lg bg-light navbar-sticky']); ?>

<nav class="container py-4 mb-lg-2 mt-lg-3" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Главная</a>
        </li>
        <li class="breadcrumb-item">
            <a href="<?= esc_url(get_post_type_archive_link('news')) ?>">Новости</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
    </ol>
</nav>

<section class="container mt-4 pt-lg-2 pb-3">
    <h1 class="pb-3" style="max-width: 970px;"><?= the_title() ?></h1>
    <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3">
        <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
            <?php

            $terms = get_the_terms(get_the_ID(), 'news_category');
            if ($terms && !is_wp_error($terms)) {
                $term_names = wp_list_pluck($terms, 'name');
            } else {
                $term_names = [];
            }

            ?>
            <?php if (count($term_names)) : ?>
            <div class="fs-xs border-end pe-3 me-3 mb-2">
                <?php foreach ($term_names as $term_name) : ?>
                    <span class="badge bg-faded-primary text-primary fs-base me-1"><?= $term_name ?></span>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="fs-sm mb-2"><?= format_date(get_the_date('Y-m-d H:i:s')) ?></div>
        </div>
    </div>
</section>

<?php

$image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
if (!$image_url) {
    $image_url = get_template_directory_uri() . '/assets/images/default.jpg';
}

?>

<div class="container">
    <section class="jarallax rounded overflow-hidden" data-jarallax="" data-speed="0.4">
        <div class="d-none d-xxl-block" style="height: 500px;"></div>
        <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
        <div class="d-md-none" style="height: 400px;"></div>
        <div id="jarallax-container-0" class="jarallax-container">
            <div class="jarallax-img" style="background-image: url(<?= $image_url ?>); object-fit: cover; object-position: 50% 50%; max-width: none; position: fixed; top: 0px; left: 0px;" data-jarallax-original-styles="background-image: url(<?= $image_url ?>);"></div>
        </div>
    </section>
</div>

<?php

$content = get_the_content();
$word_count = count(explode(' ', strip_tags($content)));
$reading_speed = 200;
$reading_time = max(1, ceil($word_count / $reading_speed));

$post_url = get_permalink();

?>

<section class="container mb-5 pt-4 pb-2 py-mg-4">
    <div class="row gy-4">
        <div class="col-lg-9">
            <?= $content ?>
        </div>

        <div class="col-lg-3 position-relative">
            <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 105px !important;">
                <span class="d-block mb-3">Время чтения <?= $reading_time ?> минут</span>
                <h6>Поделитесь этой новостью:</h6>
                <div>
                    <a href="https://vk.com/share.php?url=<?= urlencode($post_url); ?>" target="_blank" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2" aria-label="VK">
                        <i class="bx bxl-vk"></i>
                    </a>
                    <a href="https://t.me/share/url?url=<?php echo urlencode($post_url); ?>" target="_blank" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2" aria-label="Telegram">
                        <i class="bx bxl-telegram"></i>
                    </a>
                    <a href="https://www.instagram.com/?url=<?php echo urlencode($post_url); ?>" target="_blank" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2" aria-label="Instagram">
                        <i class="bx bxl-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

$randomNews = get_random_news();

?>

<section class="container mb-5 pt-md-4">
    <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between mb-4 pb-1 pb-md-3">
        <h2 class="h1 mb-sm-0">Похожие новости</h2>
        <a href="<?= get_post_type_archive_link('news') ?>" class="btn btn-lg btn-outline-primary ms-4">
            Все новости
            <i class="bx bx-right-arrow-alt ms-1 me-n1 lh-1 lead"></i>
        </a>
    </div>

    <div class="swiper mx-n2 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" data-swiper-options="{
          &quot;slidesPerView&quot;: 1,
          &quot;spaceBetween&quot;: 8,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;500&quot;: {
              &quot;slidesPerView&quot;: 2
            },
            &quot;1000&quot;: {
              &quot;slidesPerView&quot;: 3
            }
          }
        }">
        <div class="swiper-wrapper" id="swiper-wrapper-24f749ef62d58cbd" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
            <?php foreach ($randomNews as $randomNew) : ?>
                <div class="swiper-slide h-auto pb-3 swiper-slide-active" style="width: 361px; margin-right: 8px;" role="group">
                    <article class="card border-0 shadow-sm h-100 mx-2">
                        <div class="position-relative" style="height: 200px">
                            <a href="<?= $randomNew['link'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                            <img src="<?= $randomNew['image'] ?>" class="card-img-top w-100 h-100 object-fit-cover" alt="Image">
                        </div>
                        <div class="card-body pb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $randomNew['category'] ?></div>
                                <span class="fs-sm text-muted"><?= $randomNew['date'] ?></span>
                            </div>
                            <h3 class="h5 mb-0">
                                <a href="<?= $randomNew['link'] ?>"><?= $randomNew['title'] ?></a>
                            </h3>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination (bullets) -->
        <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</section>

<?php get_footer(); ?>
