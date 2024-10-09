<?php snippet('header') ?>

<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large"><?= $page->title() ?></h2>

    <ul>
    <?php foreach($galeria as $event): ?>
        <li>
            <?php if($event->link()->isNotEmpty()): ?>
            <a href="<?= $event->tickets() ?>" class="tour_p-item margin-b_med grid-xxl">
                <h3 class="t-cond t-body t-uppercase"><?= $event->city() ?></h3>
                <p class="t-cond t-body t-uppercase"><?= $event->country() ?></p>
                <p class="t-cond t-body t-uppercase"><?= $event->venue() ?></p>
                <p class="t-cond t-body t-uppercase"><?= $event->date()->toDate('j M') ?></p>
                <p class="t-cond t-body t-uppercase t-underline"><?= $event->status() ?></p>
            </a>
            <?php else: ?>
            <div class="tour_p-item margin-b_med grid-xxl">
                <h3 class="t-cond t-body t-uppercase"><?= $event->city() ?></h3>
                <p class="t-cond t-body t-uppercase"><?= $event->country() ?></p>
                <p class="t-cond t-body t-uppercase"><?= $event->venue() ?></p>
                <p class="t-cond t-body t-uppercase"><?= $event->date()->toDate('j M') ?></p>
                <p class="t-cond t-body t-uppercase"><?= $event->status() ?></p>
            </div>
            <?php endif ?>
        </li>
    <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>