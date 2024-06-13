<?php

return function ($page) {
    $tour = $page->tour()->toStructure();

    return [
        'tour' => $tour,
    ];
};