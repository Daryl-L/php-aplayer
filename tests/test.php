<?php

require_once __DIR__ . '/../vendor/autoload.php';

$aplayer = new Daryl\Aplayer();
$aplayer->setSongType('song');
$aplayer->out();