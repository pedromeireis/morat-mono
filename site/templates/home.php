<?php snippet('header') ?>
<?= js([
    'assets/js/templates/home.js',
], ['defer' => true]) ?>

<main class="p-fixed p-all">
    <?php if($picture = $home_gallery->shuffle()->first()): ?>
    <?php snippet('media-block', ['media' => $picture, 'sizes' => '100vw', 'id' => 'home_p-hero', 'class' => 'p-fixed p-all flex', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
    <?php endif ?>

    <section id="home_p-menu" class="flex f-column j-end p-relative" onmouseenter="homeMenuHover()" onmouseleave="homeMenuUnover()">
        <div id="home_p-menu--tour"  class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('tour')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase"><?= page('tour')->title() ?></a>
        </div>
        <div id="home_p-menu--fans" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('fans')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase"><?= page('fans')->title() ?></a>
        </div>
        <div id="home_p-menu--music" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('music')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase"><?= page('music')->title() ?></a>
        </div>
        <div id="home_p-menu--news" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('news')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase"><?= page('news')->title() ?></a>
        </div>
        <div id="home_p-menu--galeria_inesperada" class="home_p-menu-link--container stop" onmouseenter="homeBoardShow(this)" onmouseleave="homeBoardHide(this)">
            <a href="<?= page('galeria-inesperada')->url() ?>" class="home_p-menu-link t-cond t-xlarge t-uppercase"><?= page('galeria-inesperada')->title() ?></a>
        </div>
    </section>

    <!-- BOARDS -->
     <div id="home_p-menu--tour-board" class="home_p-board p-fixed p-all f-column">
        <p class="t-grot t-xsmall t-uppercase margin-b_small">Próximo concierto del tour:</p>
        <?php $i = 0;
              foreach(page('tour')->tour()->toStructure()->paginate(8) as $concert): ?>
            <?php if($i == 0): ?>
            <div id="home-tour-board--title" class="home_p-tour_b--item flex margin-b">
                <p class="t-cond t-xxlarge t-uppercase"><?= $concert->city() ?></p>
                <div class="t-cond t-large t-uppercase margin-l">
                    <?= $concert->date()->toDate('j M') ?><br>
                    <?= $concert->date()->toDate('Y') ?>
                </div>
            </div>
            <?php else: ?>
            <div class="home_p-tour_b--item grid-xxl margin-b_small">
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
            <?php snippet('media-block', ['media' => $picture, 'sizes' => '50vw', 'id' => null, 'class' => 'flex ratio-1_1 margin-b_med', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
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
            <p class="t-grot t-xsmall t-uppercase t-center">Escúchalo en todas las plataformas</p>
        </div>
        <?php endif ?>
     </div>
     <div id="home_p-menu--news-board" class="home_p-board p-fixed p-all f-column j-center a-center">
        <?php foreach(page('news')->children()->listed()->paginate(3) as $article): ?>
        <div class="home_p-news_b--article grid-m margin-b_med">
            <?php if($picture = $article->picture()->toFile()): ?>
            <?php snippet('media-block', ['media' => $picture, 'sizes' => '30vw', 'id' => null, 'class' => 'ratio-5_4', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
            <?php endif ?>
            <div class="flex f-column j-between">
                <p class="t-cond t-medium t-uppercase"><?= $article->title() ?></p>
                <p class="t-grot t-small t-uppercase">Leer más /</p>
            </div>
        </div>
        <?php endforeach ?>
     </div>
     <div id="home_p-menu--fans-board" class="home_p-board p-fixed p-all f-column j-center a-center">
        <ul class="grid-xl">
        <?php foreach(page('fans/gallery')->files()->sortBy('sort', 'asc')->paginate(12) as $picture): ?>
        <?php snippet('media-block', ['media' => $picture, 'sizes' => '25vw', 'id' => null, 'class' => 'ratio-1_1 flex margin-b', 'video_controls' => 'playsinline nocontrols autoplay muted loop']) ?>
        <?php endforeach ?>
        </ul>
     </div>
     <div id="home_p-menu--galeria_inesperada-board" class="home_p-board p-fixed p-all f-column">
        <p class="t-grot t-xsmall t-uppercase margin-b_small">Próxima Galeria Inesperada:</p>
        <?php $i = 0;
              foreach(page('galeria-inesperada')->galeria_inesperada()->toStructure()->paginate(6) as $event): ?>
            <?php if($i == 0): ?>
            <div id="home-tour-board--title" class="home_p-tour_b--item flex margin-b">
                <p class="t-cond t-xxlarge t-uppercase"><?= $event->city() ?></p>
                <div class="t-cond t-large t-uppercase margin-l">
                    <?= $event->date()->toDate('j M') ?>
                </div>
            </div>
            <?php else: ?>
            <div class="home_p-tour_b--item grid-xxl margin-b_small">
                <p class="t-cond t-body t-uppercase"><?= $event->city() ?></p>
                <p class="t-cond t-body t-uppercase"><?= $event->date()->toDate('j M') ?></p>
                <p class="t-cond t-body t-uppercase"><?= $event->date()->toDate('Y') ?></p>
                <p class="t-cond t-body t-uppercase"><?= $event->venue() ?></p>
            </div>
            <?php endif ?>
        <?php $i++;
              endforeach ?>
     </div>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>