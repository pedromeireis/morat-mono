<?php snippet('header') ?>
<?= js([
    'assets/js/templates/videos.js',
], ['defer' => true]) ?>

<main class="page">
    <a id="page-title" href="<?= $parent->url() ?>"><h2 class="t-cond t-xlarge t-uppercase padding-t_xsmall"><?= $parent->title() ?></h2></a>
    <nav class="margin-t margin-b_large">
        <div class="flex">
            <?php foreach($siblings as $sibling): ?>
            <a href="<?= $sibling->url() ?>" class="t-grot t-small t-uppercase <?= $sibling == $page ? 't-underline' : null ?>"><?= $sibling->title() ?></a>
            <span class="t-grot t-small t-uppercase">&nbsp•&nbsp</span>
            <?php endforeach ?>
            <a href="<?= $forum ?>" target="_blank" class="t-grot t-small t-uppercase">Foro</a>
            <span class="t-grot t-small t-uppercase">&nbsp•&nbsp</span>
            <a href="<?= $fanclub ?>" target="_blank" class="t-grot t-small t-uppercase">La Tea Fan Club</a>
        </div>
    </nav>

    <section id="videos_p-gallery--container p-fixed p-all">
        <div id="videos_p-gallery" class="p-fixed p-all flex f-nowrap a-center hide-scrollbar" onscroll="videosScroll()">
        <?php foreach($yt_videos as $video): ?>
            <div class="videos_p-gallery--item"><?= video($video->link()) ?></div>
        <?php endforeach ?>
        </div>

        <button onclick="videosNav('prev')" class="videos_p-gallery--nav-button p-fixed" style="cursor: w-resize;"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/arrow-prev.svg' ?>" alt="Overlay previous element"></button>
        <button onclick="videosNav('next')" class="videos_p-gallery--nav-button p-fixed" style="cursor: e-resize;"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/arrow-next.svg' ?>" alt="Overlay next element"></button>
    </section>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>