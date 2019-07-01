<?php
require_once 'includes/header.php';
require_once 'data/Data.php';
?>

<main>
    <!--        hero -->
    <section class="hero-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <h1 class="hero-title d-flex flex-column text-uppercase font-weight-bold">
                        <span class="font-size-80">O seguro para</span>
                        <span class="font-size-172 hero-bigger" data-text="CUIDAR">Cuidar</span>
                        <span class="font-size-80">Do seu veículo</span>
                    </h1>
                    <p class="py-40">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam architecto autem
                        commodi consequuntur distinctio facilis laboriosam molestiae necessitatibus nesciunt omnis
                        optio, quae quis reprehenderit, sunt tenetur velit veritatis voluptate.
                    </p>
                    <a href="#" class="btn btn-primary">
                        Saiba mais
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </section> <!-- hero-wrapper -->

    <div class="fake-divisor-wrapper"></div>

    <!--        Por que a kaprice        -->

    <section class="wrapper-why-kaprice bg-danger text-white">
        <div class="container py-65">
            <h1 class="text-center d-flex align-items-center justify-content-center">
                     <span class="d-flex flex-column flex-lg-row">
                         <span class="font-size-80 letter-spacing-5 font-weight-bold why">Por que a</span>
                         <span class="font-size-116 font-weight-bold text-warning letter-spacing-5 ml-lg-2 kaprice">KAPRICE </span>
                     </span>
                <span class="font-size-220 font-weight-bold ml-xl-3"> ?</span>
            </h1>
        </div>

        <div class="container">
            <div class="why-kaprice-row">
                <?php foreach (Data::whyKaprice() as $data) : ?>
                    <div class="why-kaprice-wrapper d-flex text-center">
                        <div class="icon-wrapper"> <!-- 200x200 -->
                            <div class="icon"> <!-- 162x162 -->
                                <img src="<?= get_template_directory_uri() . $data['icon'] ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="title">
                            <?= $data['title'] ?>
                        </div>
                        <p class="d-none d-lg-block text">
                            <?= $data['text'] ?>
                        </p>
                        <a href="" class="btn-more">Saiba mais.</a>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-12 d-none d-lg-flex align-items-center justify-content-center py-100">
                <a class="btn btn-warning btn-xl" href="javascript:void(0)">
                    SOLICITAR UMA COTAÇÃO
                </a>
            </div>
        </div>

    </section>   <!--        Por que a kaprice        -->

    <!--        Seguro para carros      -->
    <section class="security-cars-wrapper">
        <div class="container">
            <div class="row align-items-end flex-column">
                <div class="col-lg-6 title-header">
                    <h1 class="d-flex flex-column">
                        <span class="font-size-80 font-weight-bold">Seguros para</span>
                        <span class="font-size-172 font-weight-bold text-warning font-weight-bold letter-spacing-5">CARROS</span>
                    </h1>
                </div>
                <div class="col-lg-5">
                    <p>
                        Os melhores seguros de carros para você aqui na Kaprice. O Brasil possui um alto índice de
                        furtos de carros e acidentes em estradas, mas você pode ficar tranquilo se fizer o seguro de
                        carros certo. E a Kaprice tem as propostas de 13 seguradoras para você. Fale com um de nossos
                        corretores e receba as melhores ofertas sem sair de casa.
                    </p>
                </div>

                <div class="col-12">
                    <h2 class="separar-white">Conheça nossas opções:</h2>
                </div>

                <div class="col-12 security-container-wrapper">
                    <?php foreach (Data::securityOptions() as $security) : ?>
                        <div class="security-wrapper d-flex text-center flex-column justify-content-center">
                            <div class="icon">
                                <img src="<?= get_template_directory_uri() . $security['icon'] ?>" alt="">
                            </div>
                            <h1 class="title text-warning"><?= $security['title'] ?></h1>
                            <p class="text"><?= $security['text'] ?></p>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </section> <!-- Seguro para carros -->

    <!-- Seguro para você -->
    <section class="secutiry-for-you-container">
        <div class="container">
            <h1 class="title-header font-size-80 letter-spacing-5">
                Seguros para <span class="font-size-172 font-weight-bold letter-spacing-5 text-danger">VOCÊ</span>
            </h1>
            <div class="row col-12 col-lg-6 col-xl-5">
                <p class="pt-xl-40">
                    Imagine uma corretora de seguros cujo desenvolvimento foi todo feito pensando nas melhores opções
                    para você? Uma corretora que planejou, treinou funcionários e escolheu a dedo as principais
                    seguradoras e os seus melhores seguros para pessoa física com o intuito de oferecer exatamente
                    aquilo que você e sua família necessitam para viverem tranquilos? Pois essa empresa é a Kaprice
                    Seguros, uma corretora que surgiu com o propósito exclusivo de atender os seus clientes pessoas
                    físicas somente com os melhores seguros individuais no ramo.
                </p>
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

    <!--    Seguro para empresas -->
    <section class="">
        <div class="secutiry-for-company-container">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-12 col-lg-6">
                        <div class="title-header">
                            <h1 class="font-size-80 font-weight-bold">
                                Seguro para sua <br>
                                <span class="text-warning font-size-172">EMPRESA</span>
                            </h1>
                        </div>
                        <p class="text-white">
                            Imagine uma corretora de seguros cujo desenvolvimento foi todo feito pensando nas melhores
                            opções para você? Uma corretora que planejou, treinou funcionários e escolheu a dedo as
                            principais seguradoras e os seus melhores seguros para pessoa física com o intuito de
                            oferecer exatamente aquilo que você e sua família necessitam para viverem tranquilos? Pois
                            essa empresa é a Kaprice Seguros, uma corretora que surgiu com o propósito exclusivo de
                            atender os seus clientes pessoas físicas somente com os melhores seguros individuais no
                            ramo.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div style="background: black">
            <div class="container">
                <div class="security-for-company-wrapper-group-slick">
                    <?php foreach (Data::securityForCompany() as $securityForYou) : ?>
                        <div class="security-for-company d-flex flex-column align-items-center justify-content-center">
                            <div class="icon">
                                <img src="<?= get_template_directory_uri() . $securityForYou['icon'] ?>" alt="">
                            </div>
                            <h2 class="title text-warning font-weight-bold h5 text-center">
                                <?= $securityForYou['title'] ?>
                            </h2>
                            <p class="text text-white">
                                <?= $securityForYou['text'] ?>
                            </p>
                            <a class="link text-warning font-weight-bold" href="<?= $securityForYou['link'] ?>">Saiba Mais</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>  <!--    Seguro para empresas -->


    <!--        Entre em contato-->
    <?php
    //    require_once 'includes/contact.php';
    ?>
</main>

<?php
require_once 'includes/footer.php'
?>
