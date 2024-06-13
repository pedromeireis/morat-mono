<?php

return function ($page) {
    $news = $page->children()->listed();
    $categories = $page->categories()->split(',');

    if($typology = param('typology')) {
        $news = $news->filterBy('category', $typology);
    };

    return [
        'news' => $news,
        'categories' => $categories,
    ];
};