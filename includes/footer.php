<footer class="footer">

    <div class="nav-wrapper">
        <div class="container-fluid pt-40 py-xl-0">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="logo mb-40 pt-20">
                        <img src="<?= get_template_directory_uri() ?>/dist/imgs/kaprice-footer-logo.png"
                             alt="Kaprice corretora de seguros logo"
                             class="img-fluid">
                    </div>
                    <div class="text">
                        <p class="text-white">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium architecto ea
                            incidunt minima
                            modi
                            molestiae omnis soluta. Assumenda commodi, dignissimos eligendi et libero minus modi nihil
                            qui sint
                            ullam.
                        </p>
                        <a href="#" class="text-black link-underline font-weight-bold d-none d-lg-block">CONTINUE LENDO</a>
                    </div>
                    <div class="d-flex flex-row mt-30 mt-xl-85">
                        <div class="follow-kaprice d-flex justify-content-between">
                            Siga a KAPRICE
                        </div>
                        <div class="d-flex flex-row sociais">
                            <a href="#" class="wrapper-social-icon">
                                <i class="fab fa-facebook-square "></i>
                            </a>
                            <a href="#" class="wrapper-social-icon">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="mt-120 d-none d-lg-block">
                        <img src="<?= get_template_directory_uri() ?>/dist/imgs/personas/family-footer.png" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="d-none d-lg-flex col-lg-9">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-menu',
                        'container_class' => 'wrapper-footer-menu'
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-25 pb-40 footer-bar">
        <div class="row">
        <div class="col-12 col-lg-6 copy"><strong>&copy; <?= date('Y') ?> Kaprice Seguros</strong> | Todos os Direitos Reservados.</div>
        <div class="col-12 col-lg-6 text-center text-lg-right xceler mt-3 mt-lg-0">
            criação de sites  <a href="https://www.3xceler.com.br/" target="_blank" title="Ir para o site da 3xceler">
                <img src="<?= get_template_directory_uri() ?>/dist/imgs/3xceler.png" alt="">
            </a>
        </div>
        </div>
    </div>

</footer>


<script src="<?= get_template_directory_uri() ?>/dist/js/libraries.min.js"></script>

<script>
    var templateUri = document.querySelector("meta[name=template-uri]").getAttribute('content');
    System.import(templateUri + "/dist/js/app.js");
</script>
</body>
</html>
