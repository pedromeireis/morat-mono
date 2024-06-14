<?php snippet('head') ?>

<header class="p-fixed grid-xxl padding">
    <button id="header-menu_button" class="hide-d" onclick="menuToggle(this)" data-status="close"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/menu-button.svg' ?>" alt="Header menu button"></button>
    <a href="<?= $site->url() ?>" id="header-logo"><img src="<?= $kirby->url('assets') . '/media/morat-logo.svg' ?>" alt="Morat logo"></a>
    <?php if($page != page('home')): ?>
    <nav id="header-menu_pages" class="hide-m_t j-end">
        <a href="<?= page('tour')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('tour') ? 't-underline' : null ?>"><?= page('tour')->title() ?></a>
        <span class="t-grot t-small t-uppercase">&nbsp&nbsp•&nbsp&nbsp</span>
        <a href="<?= page('music')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('music') ? 't-underline' : null ?>"><?= page('music')->title() ?></a>
        <span class="t-grot t-small t-uppercase">&nbsp&nbsp•&nbsp&nbsp</span>
        <a href="<?= page('merch')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('merch') ? 't-underline' : null ?>"><?= page('merch')->title() ?></a>
        <span class="t-grot t-small t-uppercase">&nbsp&nbsp•&nbsp&nbsp</span>
        <a href="<?= page('news')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('news') || page('news')->children()->has($page) ? 't-underline' : null ?>"><?= page('news')->title() ?></a>
        <span class="t-grot t-small t-uppercase">&nbsp&nbsp•&nbsp&nbsp</span>
        <a href="<?= page('fans/videos')->url() ?>" class="t-grot t-small t-uppercase <?= $page == page('fans') || page('fans')->children()->has($page) ? 't-underline' : null ?>"><?= page('fans')->title() ?></a>
    </nav>
    <?php endif ?>
</header>

<section id="menu" class="p-fixed p-all padding stop hide-d" data-status="close">
    <nav class="flex f-column j-center p-relative">
        <a href="<?= page('tour')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('tour')->title() ?></a>
        <a href="<?= page('music')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('music')->title() ?></a>
        <a href="<?= page('merch')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('merch')->title() ?></a>
        <a href="<?= page('news')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('news')->title() ?></a>
        <a href="<?= page('fans/videos')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('fans')->title() ?></a>
    </nav>

    <?php snippet('footer', ['role' => 'placeholder']) ?>
</section>