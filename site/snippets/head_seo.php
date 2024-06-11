<!-- TITLE -->
<?php if($page->url() == $site->url()): ?>
    <?php if($site->seo_title()->isNotEmpty()): ?>
    <title><?= $site->seo_title() ?></title>
    <meta property="og:title" content="<?= $site->seo_title() ?>">
    <?php else: ?>
    <title><?= $site->title() ?></title>
    <meta property="og:title" content="<?= $site->title() ?>">
    <?php endif ?>
<?php else: ?>
    <?php if($page->seo_title()->isNotEmpty()): ?>
    <title><?= $page->seo_title() ?></title>
    <meta property="og:title" content="<?= $page->seo_title() ?>">
    <?php else: ?>
    <title><?= $page->title() ?> | <?= $site->title() ?></title>
    <meta property="og:title" content="<?= $page->title() ?> | <?= $site->title() ?>">
    <?php endif ?>
<?php endif ?>

<!-- DESCRIPTION -->
<?php if($page->url() == $site->url()): ?>
    <?php if($site->seo_description()->isNotEmpty()): ?>
    <meta name="description" content="<?= $site->seo_description() ?>">
    <meta property="og:description" content="<?= $site->seo_description() ?>">
    <?php else: ?>
    <meta name="description" content="<?= $site->title() ?>">
    <meta property="og:description" content="<?= $site->title() ?>">
    <?php endif ?>
<?php else: ?>
    <?php if($page->seo_description()->isNotEmpty()): ?>
    <meta name="description" content="<?= $page->seo_description() ?>">
    <meta property="og:description" content="<?= $page->seo_description() ?>">
    <?php else: ?>
    <meta name="description" content="<?= $page->title() ?> | <?= $site->title() ?>">
    <meta property="og:description" content="<?= $page->title() ?> | <?= $site->title() ?>">
    <?php endif ?>
<?php endif ?>

<!-- PICTURE -->
<?php if($page->url() == $site->url() && $site->seo_picture()->isNotEmpty()): ?>
    <meta name="image" content="<?= $site->seo_picture()->toFile()->url() ?>">
    <meta property="og:image" content="<?= $site->seo_picture()->toFile()->url() ?>">
<?php else: ?>
    <?php if($page->seo_picture()->isNotEmpty()): ?>
    <meta name="image" content="<?= $page->seo_picture()->toFile()->url() ?>">
    <meta property="og:image" content="<?= $page->seo_picture()->toFile()->url() ?>">
    <?php elseif($site->seo_picture()->isNotEmpty()): ?>
    <meta name="image" content="<?= $site->seo_picture()->toFile()->url() ?>">
    <meta property="og:image" content="<?= $site->seo_picture()->toFile()->url() ?>">
    <?php endif ?>
<?php endif ?>

<!-- KEYWORDS -->
<?php if($site->seo_keywords()->isNotEmpty()): ?>
<meta property="keywords" content="<?= $site->seo_keywords() ?>">
<meta property="og:keywords" content="<?= $site->seo_keywords() ?>">
<?php endif ?>

<!-- TWITTER -->
<meta name="twitter:card" content="summary">
<meta property="og:url" content="<?= $page->url() ?>">