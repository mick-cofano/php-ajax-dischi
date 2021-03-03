<?php

// 2nd milestone:
// farà il json encode del mio database. => require_once
// ricordatevi dell'header (vedi le slide)

require_once __DIR__ . '/../database/database.php';

header('Content-type: application/json');

$json = json_encode($arrayDischi);
echo $json;
