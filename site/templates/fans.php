<?php snippet('header') ?>
<?= js([
    'assets/js/templates/fans.js',
], ['defer' => true]) ?>

<main class="page">
    <a id="page-title" href="<?= $page->url() ?>"><h2 class="t-cond t-xlarge t-uppercase padding-t_xsmall"><?= $page->title() ?></h2></a>
    <nav class="margin-t margin-b_large">
        <div class="flex">
            <?php foreach($children as $child): ?>
            <a href="<?= $child->url() ?>" class="t-grot t-small t-uppercase"><?= $child->title() ?></a>
            <span class="t-grot t-small t-uppercase">&nbsp•&nbsp</span>
            <?php endforeach ?>
            <a href="<?= $forum ?>" target="_blank" class="t-grot t-small t-uppercase">Foro</a>
        </div>
    </nav>

    <section id="fans_p-map" class="p-relative margin-b_med">
        <img src="<?= $map->resize(600)->url() ?>" srcset="<?= $map->srcset() ?>" sizes="100vw" loading="lazy" alt="<?= $map->alt() ?>">
        <?php foreach($markers as $club): ?>
            <button id="marker-<?= $club->id() ?>" class="fans_p-marker p-absolute" style="<?= markerStyle($club) ?>" onclick="mapMarkerFind(this)" onmouseenter="mapMarkerHover(this)" onmouseleave="mapMarkerUnhover(this)"></button>
            <div data-status="close" class="fans_p-marker--label bg-blue c-black t-grot t-xsmall p-absolute stop" style="<?= markerStyle($club) ?>"><?= $club->city() ?></div>
        <?php endforeach ?>
    </section>

    <section id="fans_p-list">
    <?php foreach($countries as $country): ?>
    <dl class="margin-b_med">
        <dt class="t-cond t-body t-uppercase margin-b"><?= $country ?></dt>
        <?php foreach($markers->filter('country', $country) as $club): ?>
        <dd id="marker-<?= $club->id() ?>--club">
            <button class="fans_p-list--item grid-xxl c-white">
                <p class="t-cond t-body t-uppercase"><?= $club->city() ?></p>
                <p class="t-cond t-body t-uppercase t-right"><?= $club->date() ?></p>
                <div class="flex f-wrap j-between">
                <?php if($club->instagram()->isNotEmpty()): ?>
                    <a href="<?= $club->instagram() ?>" target="_blank" class="t-cond t-body t-uppercase">Instagram</a>
                <?php endif ?>
                <?php if($club->threads()->isNotEmpty()): ?>
                    <a href="<?= $club->threads() ?>" target="_blank" class="t-cond t-body t-uppercase">Threads</a>
                <?php endif ?>
                <?php if($club->facebook()->isNotEmpty()): ?>
                    <a href="<?= $club->facebook() ?>" target="_blank" class="t-cond t-body t-uppercase">Facebook</a>
                <?php endif ?>
                <?php if($club->twitter()->isNotEmpty()): ?>
                    <a href="<?= $club->twitter() ?>" target="_blank" class="t-cond t-body t-uppercase">X</a>
                <?php endif ?>
                <?php if($club->tiktok()->isNotEmpty()): ?>
                    <a href="<?= $club->tiktok() ?>" target="_blank" class="t-cond t-body t-uppercase">TikTok</a>
                <?php endif ?>
                </div>
            </button>
        </dd>
        <?php endforeach ?>
    </dl>
    <?php endforeach ?>
    </section>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>