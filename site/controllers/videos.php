<?php

return function ($site, $page) {
    $parent = $page->parent();
    $siblings = $page->siblings($self = true);
    $forum = page('fans')->forum();
    $yt_videos = $page->yt_videos()->toStructure();

    return [
        'parent' => $parent,
        'siblings' => $siblings,
        'forum' => $forum,
        'yt_videos' => $yt_videos,
    ];
};