<button id="newsletter_b-bg" class="p-fixed p-all v-hide" onclick="newsletterClose()"></button>
<div id="newsletter_b-form" class="p-fixed flex f-column bg-blue padding v-hide">
    <button onclick="newsletterClose()" class="p-absolute padding-small"><img class="icon-small" src="<?= $kirby->url('assets') . '/media/icons/newsletter-cross.svg' ?>" alt="Close Newsletter"></button>
    <p class="t-cond t-large t-uppercase t-center c-black">Mantenete Informado</p>
    <p class="t-cond t-large t-uppercase t-center c-black">Suscríbete a nuestra Newsletter</p>
    <a href="<?= $site->newsletter() ?>" target="_blank" class="t-cond t-large t-uppercase t-center c-black padding">Suscríbete</a>
    <p href="<?= $site->newsletter() ?>" class="t-grot t-xsmall t-uppercase c-black t-center">No te pierdas nada y sé el primero en saber todas las novedades del grupo</p>
</div>