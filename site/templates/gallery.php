<?php snippet('header') ?>
<?= css([
    'assets/css/templates/fans.css',
]) ?>
<?= js([
    'assets/js/templates/fans.js',
], ['defer' => true]) ?>

<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall"><?= $parent->title() ?></h2>
    <nav class="margin-t margin-b_large">
        <div class="flex">
            <?php foreach($siblings as $sibling): ?>
            <a href="<?= $sibling->url() ?>" class="t-grot t-small t-uppercase <?= $sibling == $page ? 't-underline' : null ?>"><?= $sibling->title() ?></a>
            <span class="t-grot t-small t-uppercase">&nbsp•&nbsp</span>
            <?php endforeach ?>
            <a href="<?= $forum ?>" target="_blank" class="t-grot t-small t-uppercase">Foro</a>
        </div>
    </nav>

    <section class="grid-xxl">
    <?php foreach($files as $picture): ?>
        <button class="fans_p-item" data-url="<?= $picture->url() ?>" data-type="<?= $picture->type() ?>" onclick="fansOverlayOpen(this)"><?php snippet('media-block', ['media' => $picture, 'sizes' => '50vw', 'id' => null, 'class' => 'ratio-1_1 margin-b', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?></button>
    <?php endforeach ?>
    </section>

    <div id="fans_p-overlay" class="p-fixed p-all padding flex f-column j-center" data-status="close">
        <button class="p-absolute" onclick="fansOverlayClose()"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/menu-button.svg' ?>" alt="Overlay close button"></button>
        
        <img class="fans_p-overlay--element hide" src="">
        <video class="fans_p-overlay--element hide" src="" playsinline nocontrols autoplay muted loop></video>

        <nav id="fans_p-overlay--nav">
            <button onclick="fansOverlayNav('prev')" class="p-absolute" style="cursor: w-resize;"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/arrow-prev.svg' ?>" alt="Overlay previous element"></button>
            <button onclick="fansOverlayNav('next')" class="p-absolute" style="cursor: e-resize;"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/arrow-next.svg' ?>" alt="Overlay next element"></button>
        </nav>
    </div>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>