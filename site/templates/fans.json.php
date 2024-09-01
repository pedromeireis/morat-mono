<?php

$clubs = $page->locations()->toStructure();
$json = [];

foreach($clubs as $club) {
  $json[] = [
    'num' => (string)$club->id(),
    'city' => (string)$club->city(),
    'year' => (string)$club->year(),
    'lat' => (float)$club->location()->toLocation()->lat()->value(),
    'lon' => (float)$club->location()->toLocation()->lon()->value(),
    'instagram' => (string)$club->instagram(),
    'threads' => (string)$club->threads(),
    'facebook' => (string)$club->facebook(),
    'twitter' => (string)$club->twitter(),
    'tiktok' => (string)$club->tiktok(),
  ];
}

echo json_encode($json);