<!-- avaliações -->
<section class="rate-section">
    <div class="container text-center text-lg-left">
        <h1 class="">
            <span class="font-size-80">Avaliações dos</span>
            <span class="font-size-100 font-weight-bold text-danger">Usuários</span>
        </h1>
        <h2 class="font-size-30 font-gray-400">Média com base em 1475 avaliações</h2>
        <div class="rate-container row pt-80 pb-100 flex-column align-items-center flex-lg-row">
            <div class="col-9 col-lg-3 col-xl-3">
                <div class="rate-number-wrapper">
                    <div class="rate font-weight-bold text-danger font-size-140">
                        4.9
                    </div>
                    <div class="stars d-flex align-items-center">
                        <i class="fas fa-star text-danger"></i>
                        <i class="fas fa-star text-danger"></i>
                        <i class="fas fa-star text-danger"></i>
                        <i class="fas fa-star text-danger"></i>
                        <i class="fas fa-star text-danger"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9 col-xl-9">
                <ul class="rate-list">
                    <?php foreach (Data::rate() as $rate):  ?>
                    <li class="">
                        <span class="type font-size-30 font-gray-400"><?= $rate[0] ?></span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?= $rate[2] ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="number ml-3 font-size-30 font-gray-400"><?= $rate[1] ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
