<?php

return function ($page) {
    $merch = $page->merch()->toStructure();

    return [
        'merch' => $merch,
    ];
};