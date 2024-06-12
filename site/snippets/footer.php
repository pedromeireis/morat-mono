<?php if($role == 'footer'): ?>
<footer class="<?= $page->intendedTemplate() == 'home' ? 'p-fixed' : 'p-relative' ?> padding flex">
<?php else: ?>
<div class="footer-placeholder padding flex">
<?php endif ?>
    
    <?php snippet('marquee-block', ['text' => $site->marquee(), 'm_text' => 't-grot t-small t-uppercase', 'width' => 'min-width: 100vw;', 'height' => 'height: 1.22rem;', 'm_style' => 'margin: 0 -1rem .5rem;']) ?>
    <div class="flex j-between">
        <img class="footer-circle" src="<?= $kirby->url('assets') . '/media/morat-circle3.svg' ?>" alt="Morat circle 1">
        <img class="footer-circle" src="<?= $kirby->url('assets') . '/media/morat-circle1.svg' ?>" alt="Morat circle 2">
        <img class="footer-circle" src="<?= $kirby->url('assets') . '/media/morat-circle2.svg' ?>" alt="Morat circle 3">
        <img class="footer-circle" src="<?= $kirby->url('assets') . '/media/morat-circle2.svg' ?>" alt="Morat circle 3">
        <img class="footer-circle" src="<?= $kirby->url('assets') . '/media/morat-circle2.svg' ?>" alt="Morat circle 1">
        <img class="footer-circle" src="<?= $kirby->url('assets') . '/media/morat-circle1.svg' ?>" alt="Morat circle 2">
        <img class="footer-circle" src="<?= $kirby->url('assets') . '/media/morat-circle3.svg' ?>" alt="Morat circle 3">
    </div>

<?php if($role == 'footer'): ?>
</footer>
<?php else: ?>
</div>
<?php endif ?>

</body>
</html>