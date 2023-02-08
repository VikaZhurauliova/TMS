<?php

use Generation\CsvGeneration;
use Generation\JsonGeneration;
use Generation\Writer;


require_once "JsonGeneration.php";
require_once "CsvGeneration.php";
require_once "Writer.php";


$content = [
    'name' => 'Vika',
    'age'=> '23',
    'city' => 'Minsk'
];

$jsonObject = new JsonGeneration($content);
$csvObject = new CsvGeneration($content );
