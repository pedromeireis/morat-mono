<?php snippet('header') ?>

<main class="page">
    <h2 class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large"><?= $page->title() ?></h2>

    <ul class="grid-xxl">
    <?php foreach($merch as $product): ?>
    <li class="merch_p-item margin-b_large flex f-column a-center">
        <?php if($picture = $product->picture()->toFile()): ?>
        <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => null, 'class' => 'margin-b_small', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
        <?php endif ?>
        <p class="t-grot t-small t-uppercase t-center"><?= $product->product() ?></p>
        <p class="t-grot t-small t-uppercase t-center"><?= $product->price() ?>€</p>
        <a href="<?= $product->link() ?>" target="_blank" class="t-grot t-small t-uppercase t-center button margin-t">Buy Now</a>
    </li>
    <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>