<?php snippet('header') ?>

<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall"><?= $page->title() ?></h2>
    <nav class="margin-t margin-b_large">
        <div class="flex">
            <?php foreach($children as $child): ?>
            <a href="<?= $child->url() ?>" class="t-grot t-small t-uppercase"><?= $child->title() ?></a>
            <span class="t-grot t-small t-uppercase">&nbsp•&nbsp</span>
            <?php endforeach ?>
            <a href="<?= $forum ?>" target="_blank" class="t-grot t-small t-uppercase">Foro</a>
        </div>
    </nav>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>