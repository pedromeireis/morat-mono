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
        
        'assets/css/snippets/marquee-block.css',
    ]) ?>

    <?= js([
        'assets/js/main.js',
    ], ['defer' => true]) ?>
</head>
<body data-template="<?= $page->intendedTemplate() ?>">