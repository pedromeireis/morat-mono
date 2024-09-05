<?php snippet('head') ?>

<header class="p-fixed grid-xxl padding">
    <a href="<?= $site->url() ?>" id="header-logo"><img src="<?= $kirby->url('assets') . '/media/morat-logo.svg' ?>" alt="Morat logo"></a>
    <button id="header-menu_button" class="hide-d" onclick="menuToggle(this)" data-status="close"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/menu-button.svg' ?>" alt="Header menu button"></button>
    <?php if($page != page('home')): ?>
    <nav id="header-menu_pages" class="hide-m_t j-end">
        <a href="<?= page('tour')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('tour') ? 't-underline' : null ?>"><?= page('tour')->title() ?></a>
        <span class="t-grot t-small t-uppercase">&nbsp&nbsp•&nbsp&nbsp</span>
        <a href="<?= page('fans')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('fans') || page('fans')->children()->has($page) ? 't-underline' : null ?>"><?= page('fans')->title() ?></a>
        <span class="t-grot t-small t-uppercase">&nbsp&nbsp•&nbsp&nbsp</span>
        <a href="<?= page('music')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('music') ? 't-underline' : null ?>"><?= page('music')->title() ?></a>
        <span class="t-grot t-small t-uppercase">&nbsp&nbsp•&nbsp&nbsp</span>
        <a href="<?= page('news')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('news') || page('news')->children()->has($page) ? 't-underline' : null ?>"><?= page('news')->title() ?></a>
    </nav>
    <?php endif ?>
</header>

<section id="menu" class="p-fixed p-all flex f-column j-end padding stop hide-d" data-status="close">
    <nav class="flex f-column j-between p-relative">
        <a href="<?= page('tour')->url() ?>" class="t-cond t-xlarge t-uppercase t-right"><?= page('tour')->title() ?></a>
        <a href="<?= page('fans')->url() ?>" class="t-cond t-xlarge t-uppercase t-right"><?= page('fans')->title() ?></a>
        <a href="<?= page('music')->url() ?>" class="t-cond t-xlarge t-uppercase t-right"><?= page('music')->title() ?></a>
        <a href="<?= page('news')->url() ?>" class="t-cond t-xlarge t-uppercase t-right"><?= page('news')->title() ?></a>
    </nav>

    <?php snippet('footer', ['role' => 'placeholder']) ?>
</section>