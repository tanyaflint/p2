<?php
require('helpers.php');

if (isset($_GET['total'])){
    $numberOfWays = $_GET['numberOfWays'];
    $total = $_GET['total'];
    $service = $_GET['service'];
    $roundUp = $_GET['roundUp']; #Fix checkbox
}
