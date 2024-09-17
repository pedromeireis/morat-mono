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
    'instagram_user' => (string)$club->instagram_user(),
    'threads' => (string)$club->threads(),
    'threads_user' => (string)$club->threads_user(),
    'facebook' => (string)$club->facebook(),
    'facebook_user' => (string)$club->facebook_user(),
    'twitter' => (string)$club->twitter(),
    'twitter_user' => (string)$club->twitter_user(),
    'tiktok' => (string)$club->tiktok(),
    'tiktok_user' => (string)$club->tiktok_user(),
  ];
}

echo json_encode($json);