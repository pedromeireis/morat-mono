<?php

return function ($page) {
    $galeria = $page->galeria_inesperada()->toStructure()->sortBy('date', 'asc');

    return [
        'galeria' => $galeria,
    ];
};