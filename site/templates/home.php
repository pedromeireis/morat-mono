<?php snippet('header') ?>

<main class="p-fixed p-all">
    <?php if($picture = $home_gallery->shuffle()->first()): ?>
    <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => 'home_p-hero', 'class' => 'p-fixed p-all flex', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
    <?php endif ?>

    <section id="home_p-menu" class="p-relative">
        <a href="<?= page('tour')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('tour')->title() ?></a>
        <a href="<?= page('music')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('music')->title() ?></a>
        <a href="<?= page('merch')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('merch')->title() ?></a>
        <a href="<?= page('news')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('news')->title() ?></a>
        <a href="<?= page('fans')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('fans')->title() ?></a>
    </section>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>