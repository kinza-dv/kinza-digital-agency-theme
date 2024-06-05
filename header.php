<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="разработка сайтов Хабаровск, IT-компания Хабаровск, создание сайтов Кинза, веб-разработка Kinza, сайты на заказ Хабаровск, услуги веб-разработки Хабаровск, Кинза разработка сайтов, Kinza IT-компания, кастомная веб-разработка Хабаровск, корпоративные сайты Хабаровск, профессиональная веб-разработка Хабаровск, разработка бизнес-сайтов Хабаровск, веб-разработка для стартапов Хабаровск, создание сайтов на заказ Кинза, комплексные решения для веб-разработки Хабаровск">

    <!-- Theme switcher (color modes) -->
    <script async="" src="<?= get_template_directory_uri() ?>/assets/scripts/gtm.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/scripts/theme-switcher.js"></script>

    <!-- Vendor Styles -->
    <link rel="stylesheet" media="screen" href="<?= get_template_directory_uri() ?>/assets/styles/boxicons.min.css">
    <link rel="stylesheet" media="screen" href="<?= get_template_directory_uri() ?>/assets/styles/swiper-bundle.min.css">
    <link rel="stylesheet" media="screen" href="<?= get_template_directory_uri() ?>/assets/styles/lightgallery-bundle.min.css">

    <!-- Main Theme Styles + Bootstrap -->
    <link rel="stylesheet" media="screen" href="<?= get_template_directory_uri() ?>/assets/styles/theme.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<main class="page-wrapper">
    <header class="<?= $args['headerClass'] ?? 'header navbar navbar-expand-lg position-absolute navbar-sticky' ?>">
        <div class="container px-3">
            <a href="/" class="navbar-brand pe-3">
                <img
                    src="<?= get_template_directory_uri() ?>/assets/images/logo/logo.png"
                    width="120"
                    alt="Kinza"
                >
            </a>
            <div id="navbarNav" class="offcanvas offcanvas-end">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= esc_url(get_post_type_archive_link('projects')) ?>" class="nav-link">Проекты</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= get_permalink(get_page_by_path('contacts')->ID) ?>" class="nav-link">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php if (isset($args['isDarkBg']) && $args['isDarkBg']) : ?>
                <div class="pe-lg-1 ms-auto me-4" data-bs-theme="dark">
                    <div class="form-check form-switch mode-switch" data-bs-toggle="mode">
                        <input type="checkbox" class="form-check-input" id="theme-mode">
                        <label class="form-check-label d-none d-sm-block" for="theme-mode">Светлая</label>
                        <label class="form-check-label d-none d-sm-block" for="theme-mode">Темная</label>
                    </div>
                </div>
            <?php else : ?>
                <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
                    <input type="checkbox" class="form-check-input" id="theme-mode">
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Светлая</label>
                    <label class="form-check-label d-none d-sm-block" for="theme-mode">Темная</label>
                </div>
            <?php endif; ?>
        </div>
    </header>
