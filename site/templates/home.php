<?php snippet('header') ?>
<?= css([
    'assets/css/snippets/article-block.css',
]) ?>
<?= js([
    'assets/js/templates/home.js',
], ['defer' => true]) ?>

<main class="p-fixed p-all">
    <?php if($picture = $home_gallery->shuffle()->first()): ?>
    <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => 'home_p-hero', 'class' => 'p-fixed p-all flex', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
    <?php endif ?>

    <section id="home_p-menu" class="flex f-column j-center p-relative" onmouseenter="homeMenuHover()" onmouseleave="homeMenuUnover()">
        <div id="home_p-menu--tour"  class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('tour')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase margin-b_xsmall"><?= page('tour')->title() ?></a>
        </div>
        <div id="home_p-menu--music" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('music')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase margin-b_xsmall"><?= page('music')->title() ?></a>
        </div>
        <div id="home_p-menu--merch" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('merch')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase margin-b_xsmall"><?= page('merch')->title() ?></a>
        </div>
        <div id="home_p-menu--news" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('news')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase margin-b_xsmall"><?= page('news')->title() ?></a>
        </div>
        <div id="home_p-menu--fans" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('fans/videos')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase margin-b_xsmall"><?= page('fans')->title() ?></a>
        </div>
    </section>

    <!-- BOARDS -->
     <div id="home_p-menu--tour-board" class="home_p-board p-fixed p-all f-column">
        <p class="t-grot t-xsmall t-uppercase margin-b_small">Próximo concierto del tour:</p>
        <?php $i = 0;
              foreach(page('tour')->tour()->toStructure()->paginate(8) as $concert): ?>
            <?php if($i == 0): ?>
            <div class="home_p-tour_b--item flex margin-b_small">
                <p class="t-cond t-xlarge t-uppercase"><?= $concert->city() ?></p>
                <div class="t-cond t-large t-uppercase margin-l">
                    <?= $concert->date()->toDate('j M') ?><br>
                    <?= $concert->date()->toDate('Y') ?>
                </div>
            </div>
            <?php else: ?>
            <div class="home_p-tour_b--item grid-xxl">
                <p class="t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->city() ?></p>
                <p class="t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->date()->toDate('j M') ?></p>
                <p class="t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->date()->toDate('Y') ?></p>
                <p class="t-cond t-body t-uppercase <?= $concert->sold_out() == 'true' ? 't-through' : null ?>"><?= $concert->venue() ?></p>
            </div>
            <?php endif ?>
        <?php $i++;
              endforeach ?>
     </div>
     <div id="home_p-menu--music-board" class="home_p-board p-fixed p-all f-column j-center a-center">
        <?php if($song = page('music')->music()->toStructure()->first()): ?>
        <div class="flex f-column">
            <p class="t-grot t-xsmall t-uppercase t-center margin-b_small">Escucha el último lanzamiento</p>
            <?php if($picture = $song->cover()->toFile()): ?>
            <?php snippet('media-block', ['media' => $picture, 'sizes' => '50vw', 'id' => null, 'class' => 'flex ratio-1_1 margin-b', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
            <?php endif ?>
            <p class="t-cond t-large t-uppercase t-center margin-b_med"><?= $song->title() ?></p>
            <div class="flex j-center margin-b">
                <img class="icon-height f-margin" src="<?= $kirby->url('assets') . '/media/icons/spotify.svg' ?>" alt="Spotify">
                <img class="icon-height f-margin" src="<?= $kirby->url('assets') . '/media/icons/youtube.svg' ?>" alt="YouTube">
                <img class="icon-height f-margin" src="<?= $kirby->url('assets') . '/media/icons/apple_music.svg' ?>" alt="Apple Music">
                <img class="icon-height f-margin" src="<?= $kirby->url('assets') . '/media/icons/amazon_music.svg' ?>" alt="Amazon Music">
                <img class="icon-height f-margin" src="<?= $kirby->url('assets') . '/media/icons/soundcloud.svg' ?>" alt="SoundCloud">
                <img class="icon-height f-margin" src="<?= $kirby->url('assets') . '/media/icons/tidal.svg' ?>" alt="Tidal">
            </div>
            <p class="t-grot t-small t-uppercase t-center">Escúchalo en todas las plataformas</p>
        </div>
        <?php endif ?>
     </div>
     <div id="home_p-menu--merch-board" class="home_p-board p-fixed p-all f-column j-center a-center">
        <ul class="flex f-wrap j-evenly">
        <?php foreach(page('merch')->merch()->toStructure()->paginate(6) as $product): ?>
            <li class="home_p-merch_b--product flex f-column margin-b_med">
                <?php if($picture = $product->picture()->toFile()): ?>
                <?php snippet('media-block', ['media' => $picture, 'sizes' => '25vw', 'id' => null, 'class' => 'margin-b_small', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
                <?php endif ?>
                <p class="t-grot t-small t-uppercase t-center"><?= $product->product() ?><br><?= $product->price() ?>€</p>
            </li>
        <?php endforeach ?>
        </ul>
     </div>
     <div id="home_p-menu--news-board" class="home_p-board p-fixed p-all f-column j-center a-center">
        <?php foreach(page('news')->children()->listed()->paginate(1) as $article): ?>
        <?php snippet('article-block', ['article' => $article, 'size' => 'small']) ?>
        <?php endforeach ?>
     </div>
     <div id="home_p-menu--fans-board" class="home_p-board p-fixed p-all f-column a-center">
        <ul class="grid-xl">
        <?php foreach(page('fans/gallery')->files()->sortBy('sort', 'asc')->paginate(12) as $picture): ?>
        <?php snippet('media-block', ['media' => $picture, 'sizes' => '25vw', 'id' => null, 'class' => 'ratio-1_1 flex margin-b', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
        <?php endforeach ?>
        </ul>
     </div>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>