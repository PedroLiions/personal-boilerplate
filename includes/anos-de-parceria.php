<!--    20 anos de parceria-->
<section class="anos-de-parceria-container">
    <div class="container">
        <h1 class="font-weight-bold letter-spacing-5 title-header">

            <span class="phrase-1">
                <span class="text-danger font-size-100">20 ANOS</span>
                <span class="font-size-100 mx-2">de</span>
                <span class="text-danger font-size-100">PARCERIA</span> <br>
            </span>

            <span class="font-size-60 d-block text-center text-xl-right phrase-2 subtitle">com as 13 maiores seguradoras do Mercado</span>
        </h1>
    </div>
    <!-- seguradoras -->
    <div class="container">
        <div class="inserurs-wrapper-group-slick">
            <?php foreach (Data::insurers() as $insurers) : ?>
                <div class="inserurs d-flex flex-column align-items-center justify-content-center">
                    <div class="icon">
                        <img src="<?= get_template_directory_uri() . $insurers['logo'] ?>" alt="" class="img-fluid">
                    </div>
                    <h2 class="title font-weight-bold h5 text-center">
                        <?= $insurers['title'] ?>
                    </h2>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="arrows">
            <button class="prev"><i class="fas fa-chevron-left"></i></button>
            <button class="next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div> <!-- seguradoras -->
</section> <!-- 20 anos de parceria -->
