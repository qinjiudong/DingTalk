<?php

require_once '../vendor/autoload.php';

use Qjd\DingTalk\DingTalk;

$DingTalk = new DingTalk('asasas');
$result = $DingTalk->send('test');

var_dump($result);