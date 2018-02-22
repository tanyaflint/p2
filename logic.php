<?php
require('helpers.php');
require('Splitter.php');

use DWA\Splitter;
use DWA\Form;

$form = new DWA\Form($_GET);

$total = $form->get('total', '');
$roundUp = $form->has('roundUp');
$numberOfWays = '';
$service = '20';
$haveResults = false;
$resultTotal = '';

if ($form->isSubmitted()) {
    $numberOfWays = $form->get('numberOfWays');
    $service = $form->get('service');

    $errors = $form->validate(
        [
            'total' => 'required',
            'numberOfWays' => 'required|numeric',
        ]
    );

    if (!$form->hasErrors) {
        #Initiate a Splitter object
        $splitter = new Splitter($total, $service);

        $resultTotal = $splitter->splitBill($numberOfWays);
        $resultTotal = $splitter->roundAmount($resultTotal, $roundUp);
        $resultTotal = $splitter->displayAsCurrency($resultTotal);

        $haveResults = true;
    }
}
