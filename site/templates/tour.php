<?php snippet('header') ?>

<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large"><?= $page->title() ?></h2>

    <ul>
    <?php foreach($tour as $concert): ?>
        <li>
            <?php if($concert->sold_out() == 'false'): ?>
            <a href="<?= $concert->tickets() ?>" class="tour_p-item margin-b_med grid-xxl">
                <h3 class="t-cond t-body t-uppercase"><?= $concert->city() ?></h3>
                <p class="hide-d t-cond t-body t-uppercase"><?= $concert->date()->toDate('j M Y') ?></p>
                <p class="hide-m_t t-cond t-body t-uppercase"><?= $concert->date()->toDate('j M') ?></p>
                <p class="hide-m_t t-cond t-body t-uppercase"><?= $concert->date()->toDate('Y') ?></p>
                <p class="t-cond t-body t-uppercase"><?= $concert->venue() ?></p>
                <p class="t-cond t-body t-uppercase t-underline">Tickets</p>
            </a>
            <?php else: ?>
            <div class="tour_p-item margin-b_med grid-xxl">
                <h3 class="t-cond t-body t-uppercase t-through"><?= $concert->city() ?></h3>
                <p class="hide-d t-cond t-body t-uppercase t-through"><?= $concert->date()->toDate('j M Y') ?></p>
                <p class="hide-m_t t-cond t-body t-uppercase t-through"><?= $concert->date()->toDate('j M') ?></p>
                <p class="hide-m_t t-cond t-body t-uppercase t-through"><?= $concert->date()->toDate('Y') ?></p>
                <p class="t-cond t-body t-uppercase t-through"><?= $concert->venue() ?></p>
                <p class="t-cond t-body t-uppercase t-through">Sold Out</p>
            </div>
            <?php endif ?>
        </li>
    <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>