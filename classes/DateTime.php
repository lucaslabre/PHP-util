<?php
$date = new DateTime();
$interval = new DateInterval('P5Y');
$date->sub($interval);

var_dump($date);
