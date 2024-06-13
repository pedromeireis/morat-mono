<?php

return function ($site, $page) {
    $parent = $page->parent();
    $siblings = $page->siblings($self = true);
    $forum = page('fans')->forum();
    $files = $page->files()->sortBy('sort', 'asc');

    return [
        'parent' => $parent,
        'siblings' => $siblings,
        'forum' => $forum,
        'files' => $files,
    ];
};