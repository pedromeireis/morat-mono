<?php

return function ($page) {
    $tour = $page->tour()->toStructure();
    // $years = $tour->pluck('date', null, true);

    return [
        'tour' => $tour,
    ];
};