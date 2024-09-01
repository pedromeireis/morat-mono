<?php

return function ($site, $page) {
    $parent = $page->parent();
    $siblings = $page->siblings($self = true);
    $forum = page('fans')->forum();
    $fanclub = page('fans')->fanclub();
    $yt_videos = $page->yt_videos()->toStructure();

    return [
        'parent' => $parent,
        'siblings' => $siblings,
        'forum' => $forum,
        'fanclub' => $fanclub,
        'yt_videos' => $yt_videos,
    ];
};