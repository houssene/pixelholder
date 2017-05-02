<?php


$app->get('/', 'CoreController@landing');

$app->get('/documentation', 'CoreController@documentation');

$app->get('/{width:[0-9]+}/{height:[0-9]+}', [
    'as' => 'canvas',
    'uses' => 'ImageController@canvas'
]);

$app->get('/{width: [0-9]+}/{height: [0-9]+}/{color: [A-Fa-f0-9]{6}}', [
    'as' => 'canvas.color',
    'uses' => 'ImageController@canvasColor'
]);
