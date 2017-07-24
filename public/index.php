<?php

include "../vendor/autoload.php";
use Twitter\Search\Search;

$search = new Search();
$search->setToken();
$value = ["q" => "ExtremeSetup"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";