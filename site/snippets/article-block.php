<a href="<?= $article->url() ?>">
    <?php if($size == 'large'): ?>
    <p class="t-grot t-small t-uppercase margin-b_small"><?= $article->date()->toDate('j F Y') ?></p>
    <?php endif ?>

    <?php if($picture = $article->picture()->toFile()): ?>
    <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => null, 'class' => 'ratio-5_4 margin-b', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
    <?php endif ?>
    
    <div>
        <h3 class="t-cond t-large t-uppercase <?= $size == 'small' ? 't-center' : null ?>"><?= $article->title() ?></h3>
        <?php if($size == 'large'): ?>
        <article class="margin-t_xsmall news_p-item--article t-grot t-small"><?= $article->editorial() ?></article>
        <?php endif ?>
        <p class="news_p-item--article t-grot t-small <?= $size == 'small' ? 't-center t-uppercase margin-t_small' : 'margin-t_med' ?>">Leer más /</p>
    </div>
</a>