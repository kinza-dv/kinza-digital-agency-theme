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

    <section class="container pb-2 pb-md-4 pb-lg-5 mb-3">
        <h1 class="pb-4">Услуги</h1>
        <div class="row row-cols-1 row-cols-md-2">

            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 me-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/cms.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Разработка программного обеспечения в Хабаровске</h2>
                        <p class="fs-sm text-body mb-0">Наша IT-компания из Хабаровска специализируется на создании высококачественных программных решений, адаптированных под уникальные потребности вашего бизнеса. Мы предлагаем полный цикл разработки ПО, от идеи до реализации, чтобы помочь вам автоматизировать процессы и повысить эффективность работы.</p>
                    </div>
                </div>
            </div>

            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/mobile-app.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Разработка мобильных приложений для бизнеса</h2>
                        <p class="fs-sm text-body mb-0">Мы разрабатываем функциональные и удобные мобильные приложения для платформ iOS и Android, которые удовлетворят потребности ваших клиентов и помогут вашему бизнесу оставаться на связи с аудиторией. Наши решения включают в себя передовые технологии и интуитивно понятный дизайн, обеспечивая превосходный пользовательский опыт.</p>
                    </div>
                </div>
            </div>

            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/rocket.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Контекстная реклама для увеличения продаж</h2>
                        <p class="fs-sm text-body mb-0">Наши эксперты по контекстной рекламе помогут вам привлечь целевую аудиторию и увеличить продажи. Мы создаем и управляем рекламными кампаниями в Google Ads и других платформах, обеспечивая максимальную отдачу от ваших инвестиций и достижение ваших бизнес-целей.</p>
                    </div>
                </div>
            </div>

            <div class="col py-4 my-2 my-sm-3">
                <div class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-5 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
                    <div class="card-body pt-3">
                        <div class="d-inline-block bg-primary shadow-primary rounded-3 position-absolute top-0 translate-middle-y p-3">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/services/analytics.svg" class="d-block m-1" width="40" alt="Icon">
                        </div>
                        <h2 class="h4 d-inline-flex align-items-center">Веб-разработка и создание сайтов</h2>
                        <p class="fs-sm text-body mb-0">Мы предлагаем полный спектр услуг по разработке сайтов, начиная от корпоративных и промо-сайтов до сложных веб-приложений и интернет-магазинов. Наши специалисты обеспечивают современный дизайн, удобную навигацию и оптимизацию под поисковые системы, чтобы ваш сайт привлекал больше посетителей и увеличивал конверсии.</p>
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
