<div class="breadcrumb-map">
    <?php foreach ( $breadcrumb as $index => $b) : ?>
    <a href="#">
        <?php if (! $index == (count($breadcrumb) - 1) ) { ?>
            <?= $b->post_title ?> <i class="fas fa-chevron-right mx-2 text-danger"></i>
        <?php  } else { ?>
            <strong><?= $b->post_title ?></strong>
        <?php } // enddif ?>
    </a>
    <?php endforeach; ?>
</div>
