<?php snippet('header') ?>

<main>
    <?php if($picture = $home_gallery->shuffle()->first()): ?>
    <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => 'home_p-hero', 'class' => 'p-fixed p-all flex', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
    <?php endif ?>
</main>

<?php snippet('footer') ?>