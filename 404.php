<?php get_header(null, ['headerClass' => 'header navbar navbar-expand-lg bg-light fixed-top']); ?>

<section class="d-flex align-items-center min-vh-100 py-5 bg-light" style="background: radial-gradient(144.3% 173.7% at 71.41% 94.26%, rgba(99, 102, 241, 0.1) 0%, rgba(218, 70, 239, 0.05) 32.49%, rgba(241, 244, 253, 0.07) 82.52%);">
    <div class="container my-5 text-md-start text-center">
        <div class="row align-items-center">

            <!-- Animation -->
            <div class="col-xl-6 col-md-7 order-md-2 ms-n5">
                <lottie-player src="<?= get_template_directory_uri() ?>/assets/json/animation-404-v1.json" background="transparent" speed="1" loop="" autoplay=""></lottie-player>
            </div>

            <!-- Text -->
            <div class="col-md-5 offset-xl-1 order-md-1">
                <h1 class="display-1 mb-sm-4 mt-n4 mt-sm-n5">Ошибка 404</h1>
                <p class="mb-md-5 mb-4 mx-md-0 mx-auto pb-2 lead">Страница, которую вы ищете, была перемещена, удалена или, возможно, никогда не существовала.</p>
                <a href="/" class="btn btn-lg btn-primary shadow-primary w-sm-auto w-100">
                    <i class="bx bx-home-alt me-2 ms-n1 lead"></i>
                    Вернуться на главную страницу
                </a>
            </div>
        </div>
    </div>
</section>

<script src="<?= get_template_directory_uri() ?>/assets/scripts/lottie-player.js"></script>

<?php get_footer(); ?>
