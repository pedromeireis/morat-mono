<?php

return function ($site) {
    $home_gallery = $site->home_picture()->toFiles();

    return [
        'home_gallery' => $home_gallery,
    ];
};