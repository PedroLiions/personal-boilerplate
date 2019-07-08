<?php
/* Template Name: Seguro Auto */
?>
<?php
require_once 'includes/header.php';
require_once 'data/Data.php';
?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();

        $page_id = get_the_ID();
        $subtitle = get_field('sub_titulo', $page_id);
        $background_desktop = get_field('background_desktop', $page_id);
        $background_mobile = get_field('background_mobile', $page_id);
        $breadcrumb = get_field('breadcrumb', $page_id);
        ?>
        <main class="tp-auto"
              style="
                      --bg-desktop: url(<?= $background_desktop ?>);
                      --bg-mobile: url(<?= $background_mobile ?>);
                      ">
            <div class="content" style="min-height: 100vh;">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-7 col-12">
                            <div class="row">
                                <!--                        Bread Crumb -->
                                <div class="col-12">
                                    <?php require_once 'includes/breadcrumb.php' ?>
                                </div>
                                <div class="col-12 pt-xl-35 post-wrapper">
                                    <h1 class="title-wrapper">
                                        <span class="title"><?= get_the_title() ?></span>
                                        <span class="subtitle">
                                            <?= $subtitle ?>
                                        </span>
                                    </h1>
                                    <div class="post-content">
                                        <?= get_the_content() ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-4">
                            <!--                            Form Mobile -->
                            <div class="contact-page-wrapper-mobile d-lg-none">
                                <div class="col-12 title-wrapper">
                                    <span class="title">Solicite mais</span>
                                    <span class="subtitle">INFORMAÇÕES</span>
                                    <p>
                                        Aperte o botão abaixo e solicite uma simulação on-line.
                                    </p>
                                    <p>
                                        Retornaremos o mais breve possível.
                                    </p>
                                </div>
                                <button class="btn btn-primary btn-form w-100" data-toggle="modal"
                                        data-target="#modalCotacao">
                                    SOLICITE UMA COTAÇÃO
                                    <i class="fas fa-paper-plane ml-1"></i>
                                </button>
                            </div>
                            <!--                            Modal-->
                            <div class="modal fade" id="modalCotacao" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">SOLICITE UMA COTAÇÃO</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <?= do_shortcode('[contact-form-7 id="131" title="Solicitar Cotação Modelo de Página Auto"]') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--                            Fim do Modal -->


                            <!--                            End Form Mobile -->

                            <!--                Form Desktop-->
                            <div class="contact-page-wrapper d-none d-lg-block">
                                <div class="row">
                                    <div class="col-12 title-wrapper">
                                        <span class="title">Solicite mais</span>
                                        <span class="subtitle">Informações</span>
                                        <p>
                                            Preencha o formulário abaixo. Retornaremos o mais breve possível
                                        </p>
                                    </div>
                                    <?= do_shortcode('[contact-form-7 id="131" title="Solicitar Cotação Modelo de Página Auto"]') ?>
                                </div>
                            </div>
                            <!--                Fim form Desktop-->

                        </div>
                    </div>
                </div>
            </div>

            <!--            Conheça outras opções de seguro auto-->
            <section class="mt-xl-100 tp-auto-security-options">
                <div class="container">
                    <h2 class="title-wrapper">
                        <span class="title">Conheça nossas outras opções de</span>
                        <span class="subtitle">SEGUROS AUTOMOTIVOS</span>
                    </h2>
                    <div class="tp-auto-insurance-slick w-100">
                        <?php foreach (Data::securityOptions() as $security) : ?>
                            <div class="security-wrapper d-flex text-center flex-column justify-content-center align-items-center">
                                <div class="icon">
                                    <img src="<?= get_template_directory_uri() . $security['icon'] ?>" alt="">
                                </div>
                                <h2 class="title text-warning"><?= $security['title'] ?></h2>
                                <p class="text"><?= $security['text'] ?></p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>
            <!--            Fim Conheça outras opções de seguro auto-->

            <!--            Diferenciais da Kaprice-->
            <section class="differential-kaprice-wrapper">
                <div class="container">
                    <div class="">
                        <h2 class="title-wrapper text-center">
                            <span class="title">DIFERENCIAIS</span>
                            <span class="subtitle">KAPRICE</span>
                        </h2>
                    </div>
                    <div class="differential-kaprice-wrapper-slick">
                        <?php foreach (Data::differentialKaprice() as $differential) : ?>
                        <div class="differential-kaprice-item">
                            <div class="d-flex flex-column align-items-start justify-content-start">
                                <div class="icon">
                                    <img src="<?= $differential['icon'] ?>" alt="">
                                </div>
                                <h2 class="title-wrapper text-center">
                                    <span class="title"><?= $differential['title'] ?></span>
                                    <span class="subtitle"><?= $differential['subtitle'] ?></span>
                                </h2>
                                <?php if (is_array($differential['text'])) : ?>
                                    <?php foreach ($differential['text'] as $text) : ?>
                                        <p><?= $text ?></p>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <p><?= $differential['text'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="d-flex justify-content-center py-xl-30">
                        <button class="btn btn-warning btn-lg">
                            SOLICITE UMA COTAÇÃO
                        </button>
                    </div>

                </div>
            </section>
            <!--            Fim Diferenciar da Kaprice-->

            <?php
            require_once 'includes/anos-de-parceria.php';
//            require_once 'includes/avaliacoes.php';
            require_once 'includes/o-que-dizem-sobre-nos.php';
            require_once 'includes/contact.php';
            ?>
        </main>

    <?php
    endwhile; // End post while
endif; // End post if
?>

<?php
require_once 'includes/footer.php'
?>


