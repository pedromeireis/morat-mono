<?php snippet('head') ?>

<header class="p-fixed grid-xxl padding">
    <button id="header-menu_button" class="hide-d" onclick="menuToggle(this)" data-status="close"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/menu-button.svg' ?>" alt="Header menu button"></button>
    <a href="<?= $site->url() ?>" id="header-logo"><img src="<?= $kirby->url('assets') . '/media/morat-logo.svg' ?>" alt="Morat logo"></a>
    <nav class="hide-m_t"></nav>
</header>

<section id="menu" class="p-fixed p-all padding stop" data-status="close">
    <nav class="flex f-column j-center p-relative">
        <a href="<?= page('tour')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('tour')->title() ?></a>
        <a href="<?= page('music')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('music')->title() ?></a>
        <a href="<?= page('merch')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('merch')->title() ?></a>
        <a href="<?= page('news')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('news')->title() ?></a>
        <a href="<?= page('fans')->url() ?>" class="t-cond t-xlarge t-uppercase"><?= page('fans')->title() ?></a>
    </nav>

    <?php snippet('footer', ['role' => 'placeholder']) ?>
</section>