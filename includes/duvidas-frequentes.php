<section>
    <div class="container">
        <h1 class="text-center text-lg-left">
            <span class="font-size-80">Dúvidas</span>
            <span class="font-weight-bold font-size-100 text-danger">Frequentes</span>
        </h1>
    </div>

    <div class="container text-center text-xl-left py-30 py-xl-100 ">
        <div class="row justify-content-between">
            <div class="col-12">

                <div id="accordion" class="faq">
                    <?php
                    if (have_rows('faq')) :
                        ?>
                        <?php
                        $i = 1;
                        while (have_rows('faq')) :
                            the_row();
                            $i++;
                            ?>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapse<?= $i ?>" aria-expanded="false"
                                                aria-controls="collapseThree">
                                            <?= the_sub_field('pergunta') ?>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse<?= $i ?>" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <?= the_sub_field('resposta') ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-4 d-none d-xl-block text-dark">
                <?php get_template_part('includes/components/schedule-consult-content') ?>
            </div>
        </div>

    </div>

</section>
