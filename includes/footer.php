<footer class="footer">

    <div class="nav-wrapper">
        <div class="container-fluid">
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
                        <a href="#" class="text-black link-underline font-weight-bold">CONTINUE LENDO</a>
                    </div>
                    <div class="d-flex flex-row mt-85">
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
                    <div class="mt-120">
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

    <div class="container-fluid pt-25 pb-40">
        <strong>&copy; <?= date('Y') ?> Kaprice Seguros</strong> | Todos os Direitos Reservados.
    </div>

</footer>

<script src="<?= node_modules_path() ?>/jquery/dist/jquery.min.js"></script>
<script src="<?= node_modules_path() ?>/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= node_modules_path() ?>/slick-carousel/slick/slick.min.js"></script>
<script src="<?= node_modules_path() ?>/systemjs/dist/system.min.js"></script>

<script>
    var templateUri = document.querySelector("meta[name=template-uri]").getAttribute('content');
    System.import(templateUri + "/dist/js/app.js");
</script>
</body>
</html>
