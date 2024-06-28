<?php

/**
 * Template Name: Услуги
 */

get_header(
    null,
    [
        'headerClass' => 'header navbar navbar-expand-lg position-absolute navbar-sticky',
        'isServices' => true
    ]
);

?>

<div class="bg-secondary pt-5">

    <!-- Breadcrumb -->
    <nav class="container pt-5 pb-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb pt-lg-3 mb-0">
            <li class="breadcrumb-item">
                <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Главная</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Услуги</li>
        </ol>
    </nav>


    <!-- Page title + Services grid -->
    <section class="container pb-2 pb-md-4 pb-lg-5 mb-3">
        <h1 class="pb-4">Услуги</h1>
        <div class="row row-cols-1 row-cols-md-2">

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/cms.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Разработка программного обеспечения</h2>
                        <p class="fs-sm text-body mb-0">Мы создаем программные решения, адаптированные под уникальные потребности вашего бизнеса. Наши специалисты разрабатывают высококачественные продукты, которые помогут вам автоматизировать процессы и повысить эффективность.</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/rocket.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Интеграция программного обеспечения</h2>
                        <p class="fs-sm text-body mb-0">Наши эксперты помогут вам интегрировать новые программные решения с уже существующими системами, обеспечивая их бесперебойную работу и совместимость. Мы гарантируем оптимизацию бизнес-процессов и улучшение производительности.</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/mobile-app.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Разработка мобильных приложений</h2>
                        <p class="fs-sm text-body mb-0">Мы создаем функциональные и удобные мобильные приложения, которые удовлетворят потребности ваших клиентов. Наши решения помогут вам оставаться на связи с аудиторией и предлагать современные услуги на мобильных платформах.</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/analytics.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Бизнес-аналитика</h2>
                        <p class="fs-sm text-body mb-0">Мы предоставляем аналитические услуги, которые помогут вам принимать обоснованные бизнес-решения. Наши инструменты и методы анализа данных позволят вам лучше понимать рынок, прогнозировать тенденции и повышать конкурентоспособность.</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/web-search.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Тестирование программного обеспечения</h2>
                        <p class="fs-sm text-body mb-0">Наши услуги по тестированию обеспечивают высокое качество и надежность ваших программных продуктов. Мы проводим всесторонние проверки и тесты, чтобы выявить и устранить возможные ошибки до запуска.</p>
                    </div>
                </div>
            </div>

            <!-- Item -->
            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/timer.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Управление проектами</h2>
                        <p class="fs-sm text-body mb-0">Мы предлагаем профессиональные услуги по управлению проектами, которые помогут вам эффективно организовать работу команды, контролировать сроки и бюджет. Наши методы и инструменты обеспечат успешную реализацию ваших проектов.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
    <h2 class="h1 text-center pt-4 pt-xl-5 mb-4">Почему выбирают нас?</h2>
    <p class="fs-lg text-muted text-center pb-4 mb-2 mb-lg-3">Мы персонализируем нашу работу в соответствии с потребностями вашего проекта. Наш подход помогает расширять инновации.</p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4 pb-xl-3">
        <div class="col text-center border-end">
            <div class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4">
                <img src="<?= get_template_directory_uri() ?>/assets/images/services/01.svg" width="32" alt="Icon">
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Создание рабочего прототипа за 24 часа</h3>
        </div>
        <div class="col text-center border-end">
            <div class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4">
                <img src="<?= get_template_directory_uri() ?>/assets/images/services/02.svg" width="32" alt="Icon">
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Разработка MVP за две недели</h3>
        </div>
        <div class="col text-center border-end">
            <div class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4">
                <img src="<?= get_template_directory_uri() ?>/assets/images/services/03.svg" width="32" alt="Icon">
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Запуск разработки программного обеспечения</h3>
        </div>
        <div class="col text-center">
            <div class="card d-table border-0 rounded-circle shadow-sm p-3 mx-auto mb-4">
                <img src="<?= get_template_directory_uri() ?>/assets/images/services/04.svg" width="32" alt="Icon">
            </div>
            <h3 class="h5 mb-2 mb-lg-0">Круглосуточная техническая и бизнес-поддержка</h3>
        </div>
    </div>
</section>

<?= do_shortcode('[feedback_form]') ?>

<?php get_footer(null, ['isServices' => true]); ?>
