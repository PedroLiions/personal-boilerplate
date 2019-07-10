<div class="breadcrumb-map d-flex flex-row">
    <?php foreach ( $breadcrumb as $index => $b) :
        $subtitle = get_field('sub_titulo', $b->ID);
    ?>
    <div>
        <a href="#" title="Ir para <?= $b->post_title ?> <?= $subtitle ?>">
            <?php if (! $index == (count($breadcrumb) - 1) ) { ?>
                <?= $b->post_title ?><?= $subtitle ? " ".$subtitle : '' ?><i class="fas fa-chevron-right mx-2 text-danger"></i>
            <?php  } else { ?>
                <strong><?= $b->post_title ?><?= $subtitle ? " ".$subtitle : '' ?></strong>
            <?php } // endif ?>
        </a>
    </div>
    <?php endforeach; ?>
</div>
