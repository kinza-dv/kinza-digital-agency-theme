<?php

/**
 * Template Name: Контакты
 */

get_header(null, [
    'headerClass' => 'header navbar navbar-expand-lg navbar-dark position-absolute navbar-sticky',
    'isDarkBg' => true,
]);

?>

    <section class="position-relative pt-5" style="background-color: #151922;" data-bs-theme="dark">

        <!-- Content -->
        <div class="container position-relative zindex-2 pt-5 pb-2 pb-md-0">

            <!-- Breadcrumb -->
            <nav class="pt-lg-4" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Главная</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Контакты</li>
                </ol>
            </nav>

            <div class="row justify-content-center pt-3 mt-3">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 text-center">
                    <h1 class="mb-4">Связаться</h1>
                    <p class="text-body fs-lg pb-3 mb-3">У вас есть на примете проект?<br>Чтобы запросить ценовое предложение, свяжитесь с нами напрямую или заполните форму и сообщите, чем мы можем помочь.</p>
                    <div class="d-flex justify-content-center">
                        <a href="https://vk.com/club224388965" class="btn btn-icon btn-secondary btn-facebook rounded-circle mx-2" aria-label="ВКонтакте" target="_blank">
                            <i class="bx bxl-vk"></i>
                        </a>
                        <a href="https://t.me/mikekarpuxin" class="btn btn-icon btn-secondary btn-facebook rounded-circle mx-2" aria-label="Telegram" target="_blank">
                            <i class="bx bxl-telegram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom shape -->
        <div class="d-flex position-absolute top-100 start-0 w-100 overflow-hidden mt-n5" style="color: #151922;">
            <div class="position-relative start-50 translate-middle-x flex-shrink-0 mt-n5 mt-md-n3 mt-lg-n1" style="width: 3788px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="3788" height="144" viewBox="0 0 3788 144"><path fill="currentColor" d="M0,0h3788.7c-525,90.2-1181.7,143.9-1894.3,143.9S525,90.2,0,0z"></path></svg>
            </div>
        </div>
    </section>

    <section class="container py-5 my-md-2 my-lg-4 my-xl-5">
        <div class="row justify-content-center pt-5 pb-1 pb-sm-2 pb-md-3">
            <div class="col-xxl-8 col-xl-9 col-lg-10 pt-sm-2 pt-md-5">
                <div class="d-sm-flex">
                    <div class="d-flex flex-column w-sm-50 border-0 bg-transparent text-center px-sm-1 px-md-5 pb-3 pb-sm-0 mb-4 mb-sm-0">
                        <div class="card-body p-0">
                            <div class="d-inline-block bg-secondary text-primary rounded-circle fs-3 lh-1 p-3 mb-3">
                                <i class="bx bx-envelope"></i>
                            </div>
                            <p class="pb-2 pb-sm-3 mb-3">Пожалуйста, не стесняйтесь, напишите нам. Мы ответим как можно скорее.</p>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="mailto:kinza-agency@ya.ru" class="btn btn-lg btn-primary">Отправить письмо</a>
                        </div>
                    </div>
                    <div class="vr text-border d-none d-sm-inline-block m-4"></div>
                    <div class="card w-sm-50 border-0 bg-transparent text-center px-sm-1 px-md-5">
                        <div class="card-body p-0">
                            <div class="d-inline-block bg-secondary text-primary rounded-circle fs-3 lh-1 p-3 mb-3">
                                <i class="bx bx-phone-call"></i>
                            </div>
                            <p class="pb-2 pb-sm-3 mb-3">Если вам нужна немедленная помощь, звоните нам в любое время.</p>
                        </div>
                        <div class="card-footer border-0 p-0">
                            <a href="tel:79143183481" class="btn btn-lg btn-primary">Позвоните&nbsp;нам</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="bg-secondary rounded-3 py-5 px-3 px-sm-4 px-md-0">
            <h2 class="text-center pt-md-1 pt-lg-3 pt-xl-4 pb-4 mt-xl-1 mb-2">Часто задаваемые вопросы</h2>
            <div class="row justify-content-center pb-lg-4 pb-xl-5">
                <div class="col-xl-8 col-lg-9 col-md-10 pb-md-2">
                    <div class="accordion" id="faq">

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#q-1" aria-expanded="true" aria-controls="q-1">Какие услуги предоставляет ваша компания?</button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="q-1" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Мы предоставляем широкий спектр IT-услуг, включая разработку программного обеспечения, веб-разработку, мобильные приложения, кибербезопасность, облачные решения и техническую поддержку.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-2" aria-expanded="false" aria-controls="q-2">Какие технологии вы используете для разработки?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-2" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Мы работаем с широким спектром технологий, включая но не ограничиваясь: Java, Python, JavaScript, PHP, .NET, Ruby on Rails, React, Angular, и многое другое. Наши специалисты подбирают оптимальные технологии в зависимости от задач и требований проекта.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-3" aria-expanded="false" aria-controls="q-3">Можете ли вы разработать программное обеспечение на заказ?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-3" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Да, мы специализируемся на разработке программного обеспечения на заказ. Мы тщательно анализируем ваши требования и создаем решение, полностью соответствующее вашим потребностям.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-4" aria-expanded="false" aria-controls="q-4">Каков процесс разработки программного обеспечения?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-4" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Наш процесс разработки включает несколько этапов: сбор требований, анализ и планирование, дизайн, разработка, тестирование, развертывание и поддержка. Мы активно сотрудничаем с клиентами на каждом этапе для обеспечения высокого качества и соответствия всем требованиям.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-5" aria-expanded="false" aria-controls="q-5">Вы разрабатываете веб-сайты на CMS?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-5" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Да, мы разрабатываем веб-сайты на различных CMS, включая WordPress, Drupal, Joomla и другие. Мы подбираем CMS, наиболее подходящую для вашего проекта, и можем также предложить создание полностью кастомизированных решений.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm">
                            <h3 class="accordion-header">
                                <button class="accordion-button shadow-none rounded-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-6" aria-expanded="false" aria-controls="q-6">Можете ли вы улучшить существующий веб-сайт?</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="q-6" data-bs-parent="#faq">
                                <div class="accordion-body fs-sm pt-0">
                                    <p>Конечно! Мы можем провести аудит вашего текущего сайта, предложить улучшения и внедрить новые функции для повышения его производительности и удобства использования.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>