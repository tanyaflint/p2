<?php
require('logic.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Project 2</title>

    <meta charset='utf=8'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
    <link rel='stylesheet' href='main.css'>

</head>
<body>
<div class='container'>
    <div class="col-xs-10 col-sm-6">
    <h2>Bill Splitter</h2>
    <form method='GET' action='index.php' class='form-horizontal'>
        <div class="input-group">
            <span class='input-group-addon' id='basic-addon1'>Split how many ways?</span>
            <input type='text' class='form-control' name='numberOfWays' placeholder='eg. 3' aria-describedby='basic-addon1'>
        </div>

        <div class="input-group">
            <span class='input-group-addon' id='basic-addon2'>How much was the tab?</span>
            <input type='text' class='form-control' name='total' placeholder='eg. 49.99' aria-describedby='basic-addon2'>
        </div>

        <div class="input-group">
            <label class="input-group-addon" for="serviceSelect">How was the service? </label>
            <select name = "service" class="custom-select form-control" id="serviceSelect">
                <option selected value="20">Excellent (20% Tip)</option>
                <option value="18">Good (18% Tip)</option>
                <option value="15">Fair (15% Tip)</option>
                <option value="10">Bad (10% Tip)</option>
            </select>
        </div>

        <div class="input-group">
            <label class="form-check-label" for="defaultCheck1">Round up</label>
            <input name="roundUp" class="form-control form-check-input" type="checkbox" value="" id="defaultCheck1">
        </div>

        <input type='submit' class='btn btn-primary btn-sm'>
    </form>
    </div>
</div>
</body>
</html>