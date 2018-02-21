<?php
require('helpers.php');

$total = isset($_GET['total']) ? $_GET['total'] : '';
$roundUp = isset($_GET['roundUp']) ? true : false;
$numberOfWays = '';
$service = '20';
$haveResults = false;

if ($total) {
    $numberOfWays = $_GET['numberOfWays'];
    $service = $_GET['service'];

    $newTotal = ($total / $numberOfWays) * (($service / 100) + 1);
    $newTotal = $roundUp ? ceil($newTotal) : round($newTotal, 2);
    $newTotal = money_format('$%i', $newTotal);

    $haveResults = true;
}
