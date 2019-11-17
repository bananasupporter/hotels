<?php


require_once 'BodyCreator.php';

header('Content-Type: application/json');

$bodyCreator = new BodyCreator();
echo $bodyCreator->createBody();





