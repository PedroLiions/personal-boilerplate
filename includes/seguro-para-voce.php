<section class="secutiry-for-you-container">
    <div class="container">
        <h1 class="title-header font-size-80 letter-spacing-5">
            Seguros para <span class="font-size-172 font-weight-bold letter-spacing-5 text-danger">VOCÊ</span>
        </h1>
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-5">
                <p class="pt-20 pb-60 pt-xl-40">
                    Imagine uma corretora de seguros cujo desenvolvimento foi todo feito pensando nas melhores opções
                    para você? Uma corretora que planejou, treinou funcionários e escolheu a dedo as principais
                    seguradoras e os seus melhores seguros para pessoa física com o intuito de oferecer exatamente
                    aquilo que você e sua família necessitam para viverem tranquilos? Pois essa empresa é a Kaprice
                    Seguros, uma corretora que surgiu com o propósito exclusivo de atender os seus clientes pessoas
                    físicas somente com os melhores seguros individuais no ramo.
                </p>
            </div>
        </div>
        <div class="security-for-you-wrapper-group-slick w-100 pt-xl-100">
            <?php foreach (Data::securityForYou() as $securityForYou) : ?>
                <div class="security-for-you-wrapper d-flex flex-column align-items-center justify-content-center">
                    <div class="icon">
                        <img src="<?= get_template_directory_uri() . $securityForYou['icon'] ?>" alt="">
                    </div>
                    <h2 class="title font-weight-bold h5 text-center">
                        <?= $securityForYou['title'] ?>
                    </h2>
                    <p class="text ">
                        <?= $securityForYou['text'] ?>
                    </p>
                    <a class="link" href="<?= $securityForYou['link'] ?>">Saiba mais</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section> <!-- seguro para você -->
