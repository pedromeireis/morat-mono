<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Pedro Meireis">
    <meta name="email" content="hello@meireis.com">
    <meta name="copyright" content="<?= $site->copyright() ?>">
    <meta property="og:type" content="website">
    <meta name="url" content="<?= $site->url() ?>">
    <meta property="og:url" content="<?= $site->url() ?>">
    <meta property="og:locale" content="en_US">

    <?php snippet('head_seo') ?>

    <!-- FAVICON -->

    <?= css([
        'assets/css/normalize.css',
        'assets/css/typography.css',
        'assets/css/elements.css',
        'assets/css/styles.css',
        'assets/css/grid.css',

        'assets/css/snippets/header.css',
        'assets/css/templates/' . $page->template()->name() . '.css',
        'assets/css/snippets/footer.css',
        
        'assets/css/snippets/newsletter-block.css',
        'assets/css/snippets/marquee-block.css',
    ]) ?>

    <?= js([
        'assets/js/main.js',
        'assets/js/snippets/header.js',
        'assets/js/snippets/newsletter-block.js',
    ], ['defer' => true]) ?>

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $kirby->url('assets') . '/favicon/apple-touch-icon.png' ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $kirby->url('assets') . '/favicon/favicon-32x32.png' ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $kirby->url('assets') . '/favicon/favicon-16x16.png' ?>">
    <link rel="manifest" href="<?= $kirby->url('assets') . '/favicon/site.webmanifest' ?>">
    <link rel="mask-icon" href="<?= $kirby->url('assets') . '/favicon/safari-pinned-tab.svg' ?>" color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#000000">

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>

    <!-- MAPBOX -->
    <link href="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.css" rel="stylesheet">
    <script src="https://api.mapbox.com/mapbox-gl-js/v3.6.0/mapbox-gl.js"></script>

</head>
<body data-url="<?= $site->url() ?>" data-template="<?= $page->intendedTemplate() ?>">
<?php snippet('newsletter-block') ?>