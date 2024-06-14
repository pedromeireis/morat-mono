<a href="<?= $article->url() ?>" class="article-block <?= $size == 'large' ? '--large grid-xxl' : '--small grid-m' ?>">
    <?php if($size == 'large'): ?>
    <p class="t-grot t-small t-uppercase margin-b_small"><?= $article->date()->toDate('j F Y') ?></p>
    <?php endif ?>

    <?php if($picture = $article->picture()->toFile()): ?>
    <figure class="p-relative ratio-5_4 margin-b stop">
        <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => null, 'class' => 'p-absolute p-all ratio-5_4 ', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
    </figure>
    <?php endif ?>
    
    <div class="flex f-column">
        <h3 class="t-cond <?= $size == 'large' ? 't-large' : 't-medium' ?> t-uppercase <?= $size == 'small' ? 't-center' : null ?>"><?= $article->title() ?></h3>
        <?php if($size == 'large'): ?>
        <article class="margin-t_xsmall news_p-item--article t-grot t-small"><?= $article->editorial() ?></article>
        <?php endif ?>
        <p class="news_p-item--article t-grot t-small <?= $size == 'small' ? 't-center t-uppercase margin-t_small' : 'margin-t_med' ?>">Leer más /</p>
    </div>
</a>