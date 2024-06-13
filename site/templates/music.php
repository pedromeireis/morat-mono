<?php snippet('header') ?>

<?= js([
    'assets/js/templates/music.js',
], ['defer' => true]) ?>

<main class="page">
    <h2 class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_large"><?= $page->title() ?></h2>

    <section id="music_p-highlight" class="margin-b_large">
        <p class="t-grot t-small t-uppercase margin-b_xsmall">Último lanzamiento</p>
        <?= video($highlight->youtube()) ?>
        <div class="flex f-column">
            <p class="t-cond t-large t-uppercase"><?= $highlight->title() ?>, <?= $highlight->year() ?></p>
            <nav class="margin-t_med">
                <div class="flex j-center margin-b">
                    <?php if($highlight->spotify()->isNotEmpty()): ?>
                    <a href="<?= $highlight->spotify() ?>" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/spotify.svg' ?>" alt="Spotify"></a>
                    <?php endif ?>
                    <?php if($highlight->youtube()->isNotEmpty()): ?>
                    <a href="<?= $highlight->youtube() ?>" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/youtube.svg' ?>" alt="YouTube"></a>
                    <?php endif ?>
                    <?php if($highlight->apple_music()->isNotEmpty()): ?>
                    <a href="<?= $highlight->apple_music() ?>" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/apple_music.svg' ?>" alt="Apple Music"></a>
                    <?php endif ?>
                    <?php if($highlight->amazon()->isNotEmpty()): ?>
                    <a href="<?= $highlight->amazon() ?>" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/amazon_music.svg' ?>" alt="Amazon Music"></a>
                    <?php endif ?>
                    <?php if($highlight->soundcloud()->isNotEmpty()): ?>
                    <a href="<?= $highlight->soundcloud() ?>" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/soundcloud.svg' ?>" alt="SoundCloud"></a>
                    <?php endif ?>
                    <?php if($highlight->tidal()->isNotEmpty()): ?>
                    <a href="<?= $highlight->tidal() ?>" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/tidal.svg' ?>" alt="Tidal"></a>
                    <?php endif ?>
                </div>
                <p class="t-grot t-small t-uppercase t-center">Escúchalo en todas las plataformas</p>
            </nav>
        </div>
    </section>
    
    <section>
    <?php foreach($years as $year): ?>
    <ul class="music_p-year margin-b_large">
        <h3 class="t-cond t-xlarge t-uppercase padding-t_xsmall margin-b_med"><?= $year ?></h3>
        <?php $i = 1;
              foreach($music->filter('year', $year) as $song): ?>
        <li class="music_p-item grid-xxl margin-b_med" <?= $cover = $song->cover()->toFile() ? 'data-cover="' . $song->cover()->toFile()->url() . '"'  : null ?> onclick="musicOverlayOpen(this)">
            <p class="t-cond t-body t-uppercase"><?= $i ?></p>
            <p class="t-cond t-body t-uppercase"><?= $song->title() ?></p>
            <p class="t-cond t-body t-uppercase"><?= $song->duration() ?></p>
            <p class="t-cond t-body t-uppercase"><?= $song->artist() ?></p>
        </li>
        <?php $i++;
              endforeach ?>
    </ul>
    <?php endforeach ?>
    </section>

    <div id="music_p-overlay" class="p-fixed p-all padding flex f-column j-center" data-status="close">
            <button class="p-absolute" onclick="musicOverlayClose()"><img class="icon" src="<?= $kirby->url('assets') . '/media/icons/menu-button.svg' ?>" alt="Overlay close button"></button>
            
            <iframe width="100%" height="auto" src="" title="Song on YouTube" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            <nav class="p-absolute">
                <div class="flex j-center margin-b">
                    <a id="music_p-overlay--spotify" data-status="inactive" href="" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/spotify.svg' ?>" alt="Spotify"></a>
                    <a id="music_p-overlay--youtube" data-status="inactive" href="" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/youtube.svg' ?>" alt="YouTube"></a>
                    <a id="music_p-overlay--apple_music"  data-status="inactive" href="" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/apple_music.svg' ?>" alt="Apple Music"></a>
                    <a id="music_p-overlay--amazon_music"  data-status="inactive" href="" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/amazon_music.svg' ?>" alt="Amazon Music"></a>
                    <a id="music_p-overlay--soundcloud"  data-status="inactive" href="" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/soundcloud.svg' ?>" alt="SoundCloud"></a>
                    <a id="music_p-overlay--tidal"  data-status="inactive" href="" target="_blank" class="f-margin"><img src="<?= $kirby->url('assets') . '/media/icons/tidal.svg' ?>" alt="Tidal"></a>
                </div>
                <p data-status="inactive" class="t-grot t-small t-uppercase t-center">Escúchalo en todas las plataformas</p>
            </nav>
        </div>
</main>

<?php snippet('footer', ['role' => 'footer']) ?>