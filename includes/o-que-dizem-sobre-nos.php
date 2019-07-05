<section class="why-us">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title-header">
                    <span class="font-size-80">O que dizem</span>
                    <span class="font-size-100 text-danger font-weight-bold">Sobre nós</span>
                </h1>
            </div>

            <div class="col-12 col-lg-8 col-xl-6">
                <p class="text-common mt-60 mb-80">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus illum iusto odio! Aspernatur aut
                    blanditiis
                    dolorem exercitationem explicabo magni minima non nulla officiis
                </p>
            </div>

            <div class="col-12">
                <div class="pb-70 mb-100 d-flex justify-content-between">
                    <?php foreach (Data::depositions() as $data) : ?>
                        <div class="depoiment-wrapper d-flex flex-column align-items-center">
                            <div class="text font-gray-400 font-size-14">
                                <?= $data['message'] ?>
                            </div>
                            <p class="name mb-0"><?= $data['name'] ?></p>
                            <div class="stars">
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <i class="fas fa-star <?php if ($i <= $data['stars']) echo 'text-danger' ?>"></i>
                            <?php endfor; ?>
                            </div>
                            <div class="profile-picture">
                                <img src="<?= $data['profile_picture'] ?>" alt="">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
