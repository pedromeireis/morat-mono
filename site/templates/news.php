<?php snippet('header') ?>

<main class="page">
    <h2 class="t-cond t-xlarge t-uppercase padding-t_xsmall"><?= $page->title() ?></h2>
    <nav class="flex margin-t margin-b_large">
        <?php $i = 1;
              foreach($categories as $category): ?>

        <?php if(param('typology') != $category): ?>
        <a href="<?= $page->url(['params' => ['typology' => $category]]) ?>" class="t-grot t-small t-uppercase"><?= $category ?></a>
        <?php else: ?>
        <a href="<?= $page->url() ?>" class="t-grot t-small t-uppercase t-underline"><?= $category ?></a>
        <?php endif ?>

        <?php if($i < sizeOf($categories)): ?>
        <span class="t-grot t-small t-uppercase">&nbsp•&nbsp</span>
        <?php endif ?>

        <?php $i++;
              endforeach ?>
    </nav>

    <ul class="grid-xxl">
    <?php foreach($news as $article): ?>
    <li class="news_p-item grid-xl margin-b_large">
        <p class="t-grot t-small t-uppercase margin-b_small"><?= $article->date()->toDate('j F Y') ?></p>
        <?php if($picture = $article->picture()->toFile()): ?>
        <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => null, 'class' => 'ratio-5_4 margin-b', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
        <?php endif ?>
        <div>
            <h3 class="t-cond t-large t-uppercase"><?= $article->title() ?></h3>
            <article class="margin-t_xsmall news_p-item--article t-grot t-small"><?= $article->editorial() ?></article>
            <a class="margin-t_med news_p-item--article t-grot t-small" href="<?= $article->url() ?>">Leer más /</a>
        </div>
    </li>
    <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>