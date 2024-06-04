
</main>


<!-- Footer -->
<footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-md-2 col-12">
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/logo/logo.png" width="120" alt="Kinza">
                </div>
            </div>
            <div class="col-md-9 col-12 offset-lg-1 offset-md-1 pt-4 pt-md-0">
                <div id="footer-links" class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <h6 class="mb-2">Полезные ссылки</h6>
                        <div id="useful-links" data-bs-parent="#footer-links">
                            <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                <li class="nav-item"><a href="/" class="nav-link d-inline-block px-0 pt-1 pb-2">Главная</a></li>
                                <li class="nav-item"><a href="<?= esc_url(get_post_type_archive_link('projects')) ?>" class="nav-link d-inline-block px-0 pt-1 pb-2">Проекты</a></li>
                                <li class="nav-item"><a href="<?= get_permalink(get_page_by_path('contacts')->ID) ?>" class="nav-link d-inline-block px-0 pt-1 pb-2">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 pt-2 pt-md-0">
                        <h6 class="mb-2">Социальные сети</h6>
                        <div id="social-links" data-bs-parent="#footer-links">
                            <ul class="nav flex-column mb-2 mb-lg-0">
                                <li class="nav-item"><a href="https://vk.com/club224388965" class="nav-link d-inline-block px-0 pt-1 pb-2" target="_blank">ВКонтакте</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 pt-2 pt-lg-0">
                        <h6 class="mb-2">Связаться с нами</h6>
                        <a href="mailto:kinza-agency@ya.ru" class="nav-link text-decoration-underline fw-medium">kinza-agency@ya.ru</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex pb-2 pb-lg-0 mb-0 align-items-center">
            <div class="col-lg-2 col-md-12">
                <p class="d-block fs-xs text-md-start m-0">© Kinza 2024.</p>
            </div>
            <div class="col-lg-9 col-md-12 offset-lg-1 offset-md-0 d-lg-flex gap-3">
                <a href="/" class="nav-link fs-xs text-center text-md-start">Условия использования</a>
                <a href="/" class="nav-link fs-xs text-center text-md-start">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>


<!-- Back to top button -->
<a href="#top" class="btn-scroll-top" data-scroll="">
    <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Вверх</span>
    <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
</a>


<!-- Vendor Scripts -->
<script src="<?= get_template_directory_uri() ?>/assets/scripts/jarallax.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/lottie-player.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/swiper-bundle.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/lightgallery.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/lg-video.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/imagesloaded.pkgd.min.js"></script>
<script src="<?= get_template_directory_uri() ?>/assets/scripts/shuffle.min.js"></script>

<!-- Main Theme Script -->
<script src="<?= get_template_directory_uri() ?>/assets/scripts/theme.min.js"></script>
<div class="lg-container  " id="lg-container-1" tabindex="-1" aria-modal="true" role="dialog">
    <div id="lg-backdrop-1" class="lg-backdrop" style="transition-duration: 300ms;"></div>

    <div id="lg-outer-1" class="lg-outer lg-use-css3 lg-css3 lg-single-item lg-slide lg-grab">

        <div id="lg-content-1" class="lg-content">
            <div id="lg-inner-1" class="lg-inner" style="transition-timing-function: ease; transition-duration: 400ms;">
            </div>
            <button type="button" id="lg-prev-1" aria-label="Previous slide" class="lg-prev lg-icon">  </button>
            <button type="button" id="lg-next-1" aria-label="Next slide" class="lg-next lg-icon">  </button>
        </div>
        <div id="lg-toolbar-1" class="lg-toolbar lg-group">

            <button type="button" aria-label="Close gallery" id="lg-close-1" class="lg-close lg-icon"></button>
            <div class="lg-counter" role="status" aria-live="polite">
                <span id="lg-counter-current-1" class="lg-counter-current">1 </span> /
                <span id="lg-counter-all-1" class="lg-counter-all">1 </span></div></div>

        <div id="lg-components-1" class="lg-components">
            <div class="lg-sub-html" role="status" aria-live="polite"></div>
        </div>
    </div>
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(97481145, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97481145" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php wp_footer(); ?>
</body>

</html>