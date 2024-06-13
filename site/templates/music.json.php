<?php

$music = $page->music()->toStructure();
$json = [];

foreach($music as $song) {

  $json[] = [
    'id'   => (string)$song->id(),
    'title'   => (string)$song->title(),
    'youtube_share' => (string)$song->youtube_share(),
    'youtube' => (string)$song->youtube(),
    'spotify' => (string)$song->spotify(),
    'apple_music' => (string)$song->apple_music(),
    'amazon_music' => (string)$song->amazon(),
    'soundcloud' => (string)$song->souncloud(),
    'tidal' => (string)$song->tidal(),
  ];

}

echo json_encode($json);