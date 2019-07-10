<section class="mt-xl-100 tp-auto-security-options">
    <div class="container">
        <h2 class="title-wrapper">
            <span class="title">Conheça nossas outras opções de</span>
            <span class="subtitle">IMOBILIÁRIA</span>
        </h2>
        <!--                    Para Mobile -->
        <div class="tp-auto-insurance-slick d-lg-none">
            <?php foreach (Data::consortiumImmobile() as $security) : ?>
                <div class="security-wrapper d-flex text-center flex-column justify-content-center align-items-center">
                    <div>
                        <div class="icon">
                            <img src="<?= get_template_directory_uri() . $security['icon'] ?>" alt="">
                        </div>
                        <h2 class="title text-warning"><?= $security['title'] ?></h2>
                        <p class="text"><?= $security['text'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <!--                    Fim Mobile -->

        <!--                    Para Desktop -->
        <div class="tp-auto-insurance-slick d-none d-lg-block">

            <?php foreach (Data::consortiumImmobile() as $i => $security) : ?>
                <div class="security-wrapper d-flex text-center flex-column justify-content-center align-items-center">
                    <div>
                        <div class="icon">
                            <img src="<?= get_template_directory_uri() . $security['icon'] ?>" alt="">
                        </div>
                        <h2 class="title text-warning"><?= $security['title'] ?></h2>
                        <p class="text"><?= $security['text'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
        <!--                    Fim Desktop -->
    </div>
</section>
