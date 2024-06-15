<button id="newsletter_b-bg" class="p-fixed p-all v-hide" onclick="newsletterClose()"></button>
<div id="newsletter_b-form" class="p-fixed flex f-column bg-blue padding v-hide">
    <p class="t-cond t-large t-uppercase t-center c-black">Keep Updated</p>
    <p class="t-cond t-large t-uppercase t-center c-black">Subscribe to our Newsletter</p>
    <a href="<?= $site->newsletter() ?>" target="_blank" class="t-grot t-small t-uppercase t-center c-black padding">Subscribe</a>
    <p href="<?= $site->newsletter() ?>" class="t-grot t-small t-uppercase c-black">No te pierdas nada y sé el primeiro en saber todas las novedades del grupo</p>
</div>