<?php

return function ($page) {
    $children = $page->children();
    $forum = $page->forum();
    $fanclub = $page->fanclub();
    $countries = [];

    return [
        'children' => $children,
        'forum' => $forum,
        'fanclub' => $fanclub,
        'countries' => $countries,
    ];
};