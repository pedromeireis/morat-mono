<?php snippet('header') ?>
<?= css([
    'assets/css/snippets/article-block.css',
]) ?>

<main class="page grid-xxl">
    <a id="article_p-back" href="<?= $parent->url() ?>" class="margin-b_med"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/back.svg' ?>" alt="Back to News"></a>

    <article id="article_p-article" class="grid-xl margin-b_xlarge">
        <div class="padding-t_xsmall margin-b_med">
            <p class="t-grot t-small t-uppercase margin-b_small"><?= $date ?></p>
            <h2 class="t-cond t-large t-uppercase"><?= $title ?></h2>
            <div id="article_p-share" class="margin-t flex a-center">
                <span id="article_p-share--x" class="flex button"><a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-via="MoratBanda" data-show-count="false"></a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></span>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $page_url ?>" target="_blank"><img class="icon-height" src="<?= $kirby->url('assets') . '/media/icons/facebook.svg' ?>" alt="Share on Facebook"></a>
                <a href="mailto:?subject=Article from MORAT&amp;body=<?= $page_url ?>" target="_blank"><img class="icon-height" src="<?= $kirby->url('assets') . '/media/icons/email.svg' ?>" alt="Share by email"></a>
            </div>
        </div>
        
        <?php if($picture = $page->picture()->toFile()): ?>
        <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => null, 'class' => 'flex ratio-4_5', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
        <?php endif ?>

        <div class="margin-t t-grot t-small k-text"><?= $editorial ?></div>
    </article>

    <nav id="article_p-related">
        <p class="t-grot t-small t-uppercase margin-b_small">Otras Noticias</p>
        <ul class="grid-xl">
            <?php foreach($related as $article): ?>
            <li class="article_p-related margin-b_large"><?php snippet('article-block', ['article' => $article, 'size' => 'small']) ?></li>
            <?php endforeach ?>
        </ul>
    </nav>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>