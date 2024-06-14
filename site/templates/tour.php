<?php snippet('header') ?>

<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large"><?= $page->title() ?></h2>

    <ul>
    <?php foreach($tour as $concert): ?>
        <li class="tour_p-item margin-b_med <?= $concert->sold_out() == 'true' ? '--inactive' : null ?> grid-xxl">
            <h3 class="t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->city() ?></h3>
            <p class="hide-d t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->date()->toDate('j M Y') ?></p>
            <p class="hide-m_t t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->date()->toDate('j M') ?></p>
            <p class="hide-m_t t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->date()->toDate('Y') ?></p>
            <p class="t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->venue() ?></p>
            <?php if($concert->sold_out() == 'false'): ?>
            <a href="<?= $concert->tickets() ?>" class="t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?> t-underline">Tickets</a>
            <?php else: ?>
            <p class="t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>">Sold Out</p>
            <?php endif ?>
        </li>
    <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>