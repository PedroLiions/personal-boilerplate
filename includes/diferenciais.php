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
                    <div class="d-flex flex-column align-items-center align-items-lg-start justify-content-start">
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
        <div class="d-none d-lg-flex justify-content-center py-xl-30">
            <button class="btn btn-warning btn-lg">
                SOLICITE UMA COTAÇÃO
            </button>
        </div>

    </div>
</section>
