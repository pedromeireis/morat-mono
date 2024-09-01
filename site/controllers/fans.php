<?php

return function ($page) {
    $children = $page->children();
    $forum = $page->forum();
    $fanclub = $page->fanclub();
    $map = $page->files()->first();
    $markers = $map->markers()->toStructure();
    $countries = $markers->pluck('country', null, true);

    return [
        'children' => $children,
        'forum' => $forum,
        'fanclub' => $fanclub,
        'map' => $map,
        'markers' => $markers,
        'countries' => $countries,
    ];
};