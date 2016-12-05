<?php
$apiEndpoint = getenv('API_ENDPOINT') ?: 'http://alpha.nodopiano.it/wp-json/wp/v2/';
return [
    'url' => $apiEndpoint,
    'driver' => 'Nodopiano\Corda\Api\WordPress',
];
