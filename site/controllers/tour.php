<?php

return function ($page) {
    $tour = $page->tour()->toStructure()->sortBy('date', 'asc');

    return [
        'tour' => $tour,
    ];
};