<?php

return function ($page) {
    $page_url = $page->url();
    $parent = $page->parent();
    
    $title = $page->title();
    $date = $page->date()->toDate('j F Y');
    $editorial = $page->editorial()->kti();

    $related = $page->siblings($self = false)->sortBy('date', 'desc')->paginate(3);

    return [
        'page_url' => $page_url,
        'parent' => $parent,
        'title' => $title,
        'date' => $date,
        'editorial' => $editorial,
        'related' => $related,
    ];
};