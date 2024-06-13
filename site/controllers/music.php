<?php

return function ($page) {
    $music = $page->music()->toStructure();
    $years = $music->pluck('year', null, true);
    $highlight = $music->first();

    return [
        'music' => $music,
        'years' => $years,
        'highlight' => $highlight,
    ];
};