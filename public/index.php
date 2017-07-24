<?php

include "../vendor/autoload.php";
use Twitter\Search\Search;

$search = new Search();
$search->setToken("B2PIACMAuMrjvmHd7pBVoX2WI","3Ukc2ZiH6glxM61l5Yp6C1vpr61HVxiS7Jzmnen8unomOTvIpY");
$value = ["q" => "ExtremeSetup"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";