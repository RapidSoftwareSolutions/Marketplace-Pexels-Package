<?php
$routes = [
    'metadata',
    'searchPhotos',
    'getPopularPhotos'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

