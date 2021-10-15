<?php

require_once "vendor/autoload.php";
use Lucas\DigitalCep\Search;

$busca = new Search;
$resultado = $busca->getAddressFromZipcode('21852370');

print_r($resultado);