<?php 

$sites = [$_ENV['site1'], $_ENV['site2']];
$site = $sites[array_rand($sites)];
include "http://$site/index.html";

?>
