<?php

return function ($page) {
    $children = $page->children();
    $forum = $page->forum();

    return [
        'children' => $children,
        'forum' => $forum,
    ];
};