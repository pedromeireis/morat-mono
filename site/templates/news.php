<?php snippet('header') ?>
<?= css([
    'assets/css/snippets/article-block.css',
]) ?>

<main class="page">
    <h2 id="page-title" class="t-cond t-xlarge t-uppercase padding-t_xsmall"><?= $page->title() ?></h2>
    <nav class="flex f-wrap margin-t margin-b_large">
        <span class="t-grot t-small t-uppercase">Filtrar:&nbsp</span>
        <?php $i = 1;
              foreach($categories as $category): ?>

        <?php if(param('typology') != $category): ?>
        <a href="<?= $page->url(['params' => ['typology' => $category]]) ?>" class="t-grot t-small t-uppercase"><?= $category ?></a>
        <?php else: ?>
        <a href="<?= $page->url() ?>" class="t-grot t-small t-uppercase t-underline"><?= $category ?></a>
        <?php endif ?>

        <?php if($i < sizeOf($categories)): ?>
        <span class="t-grot t-small t-uppercase">&nbsp•&nbsp</span>
        <?php endif ?>

        <?php $i++;
              endforeach ?>
    </nav>

    <ul class="grid-xxl">
        <?php foreach($news as $article): ?>
        <li class="news_p-item grid-xl margin-b_large"><?php snippet('article-block', ['article' => $article, 'size' => 'large']) ?></li>
        <?php endforeach ?>
    </ul>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>