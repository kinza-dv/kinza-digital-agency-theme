<?php

function feedback_form_shortcode(): bool|string
{
    ob_start(); ?>
    <section class="container">
        <div class="bg-secondary rounded-3 py-5 px-3 px-sm-4 px-lg-0">
            <div class="row align-items-center pt-1 pb-2 py-lg-4">
                <div class="col-xl-4 col-lg-5 col-md-6 offset-lg-1 mb-4 pb-3 mb-md-0 pb-md-0">
                    <h2 class="h1 mb-lg-4">Связаться</h2>
                    <p class="pb-2 pb-md-4 pb-lg-5">Есть проект на примете? Чтобы запросить ценовое предложение, свяжитесь с нами напрямую или заполните форму и сообщите нам, чем мы можем помочь.</p>
                    <h3 class="mb-lg-4">Контактная информация</h3>
                    <ul class="list-unstyled pb-3 pb-md-4 pb-lg-5 mb-2">
                        <?php if (carbon_get_theme_option('contact_phone')): ?>
                        <li class="mb-2">
                            <a href="tel:<?= preg_replace("/[^0-9]/", '', carbon_get_theme_option('contact_phone')) ?>" class="nav-link d-flex align-items-center p-0">
                                <i class="bx bx-phone-call fs-xl text-primary me-2"></i>
                                <?= carbon_get_theme_option('contact_phone') ?>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if (carbon_get_theme_option('contact_email')): ?>
                        <li class="mb-2">
                            <a href="mailto:<?= carbon_get_theme_option('contact_email') ?>" class="nav-link d-flex align-items-center p-0">
                                <i class="bx bx-envelope fs-xl text-primary me-2"></i>
                                <?= carbon_get_theme_option('contact_email') ?>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <div class="d-flex">
                        <?php if (carbon_get_theme_option('contact_vk')): ?>
                            <a href="<?= carbon_get_theme_option('contact_vk') ?>" class="btn btn-icon btn-outline-secondary btn-facebook me-3" aria-label="VK">
                                <i class="bx bxl-vk"></i>
                            </a>
                        <?php endif; ?>
                        <?php if (carbon_get_theme_option('contact_telegram')): ?>
                            <a href="<?= carbon_get_theme_option('contact_telegram') ?>" class="btn btn-icon btn-outline-secondary btn-twitter me-3" aria-label="Telegram">
                                <i class="bx bxl-telegram"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-xl-1">
                    <div class="card border-0 shadow-sm p-sm-2">
                        <form class="card-body needs-validation" method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" novalidate="">
                            <div class="mb-4">
                                <label for="service" class="form-label fs-base">Услуга</label>
                                <select id="service" name="service" class="form-select form-select-lg" required="">
                                    <option value="" selected="" disabled="">Выберите интересующую вас услугу</option>
                                    <option value="Разработка программного обеспечения">Разработка программного обеспечения</option>
                                    <option value="Разработка мобильных приложений">Разработка мобильных приложений</option>
                                    <option value="Контекстная реклама">Контекстная реклама</option>
                                    <option value="Веб-разработка и создание сайтов">Веб-разработка и создание сайтов</option>
                                </select>
                                <div class="invalid-feedback">Пожалуйста, выберите услугу!</div>
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label fs-base">Имя</label>
                                <input type="text" id="name" name="name" class="form-control form-control-lg" required="">
                                <div class="invalid-feedback">Пожалуйста, введите Ваше имя!</div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label fs-base">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control form-control-lg" required="">
                                <div class="invalid-feedback">Пожалуйста, введите Ваш E-mail!</div>
                            </div>
                            <div class="mb-4 pb-2">
                                <label for="message" class="form-label fs-base">Сообщение</label>
                                <textarea id="message" name="message" class="form-control form-control-lg" rows="3" placeholder="Расскажите нам о своем проекте" required=""></textarea>
                                <div class="invalid-feedback">Пожалуйста, введите ваше сообщение!</div>
                            </div>
                            <button type="submit" name="submit_feedback" class="btn btn-primary shadow-primary btn-lg">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

add_shortcode('feedback_form', 'feedback_form_shortcode');

function handle_feedback_submission() {
    if (isset($_POST['submit_feedback'])) {
        global $wpdb;

        $table_name = $wpdb->prefix . 'feedback';

        $service = sanitize_text_field($_POST['service']);
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        $wpdb->insert(
            $table_name,
            [
                'service' => $service,
                'name' => $name,
                'email' => $email,
                'message' => $message,
                'is_read' => 0
            ]
        );

        $redirect_url = add_query_arg(['feedback_sent' => 'true']);

        wp_redirect($redirect_url);
        exit;
    }
}

add_action('init', 'handle_feedback_submission');
