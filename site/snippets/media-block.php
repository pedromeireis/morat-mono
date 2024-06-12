<?php if($media->type() == 'image'): ?>
    <?php if($media->extension() != 'gif'): ?>
    <img id="<?= $id ?>" class="<?= $class ?>" src="<?= $media->resize(600)->url() ?>" srcset="<?= $media->srcset() ?>" sizes="<?= $sizes ?>" loading="lazy" alt="<?= $media->alt() ?>">
    <?php else: ?>
    <img id="<?= $id ?>" class="<?= $class ?>" src="<?= $media->url() ?>" loading="lazy" alt="<?= $media->alt() ?>">
    <?php endif ?>
<?php elseif($media->type() == 'video'): ?>
    <video id="<?= $id ?>" class="<?= $class ?>" src="<?= $media->url() ?>" preload="metadata" <?= $controls ?>></video>
<?php endif ?>