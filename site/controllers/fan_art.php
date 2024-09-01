<?php

return function ($site, $page) {
    $parent = $page->parent();
    $siblings = $page->siblings($self = true);
    $forum = page('fans')->forum();
    $fanclub = page('fans')->fanclub();
    $files = $page->files()->sortBy('sort', 'asc');

    return [
        'parent' => $parent,
        'siblings' => $siblings,
        'forum' => $forum,
        'fanclub' => $fanclub,
        'files' => $files,
    ];
};