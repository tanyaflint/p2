<?php
require('helpers.php');
require('Splitter.php');

use DWA\Splitter;

$total = isset($_GET['total']) ? $_GET['total'] : '';
$roundUp = isset($_GET['roundUp']) ? true : false;
$numberOfWays = '';
$service = '20';
$haveResults = false;
$resultTotal = '';

if ($total) {
    $numberOfWays = $_GET['numberOfWays'];
    $service = $_GET['service'];

    #Initiate a Splitter object
    $splitter = new Splitter($total, $service);

    $resultTotal = $splitter->splitBill($numberOfWays);
    $resultTotal = $splitter->roundUp($resultTotal, $roundUp);
    $resultTotal = $splitter->displayAsCurrency($resultTotal);

    $haveResults = true;
}
