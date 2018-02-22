<?php
require('Form.php');
require('logic.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Bill Splitter</title>
    <meta charset='utf-8'>
    <link rel='stylesheet'
          href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
          integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u'
          crossorigin='anonymous'>
    <link rel='stylesheet' href='main.css' type='text/css'>
</head>
<body>
<div class='container'>
    <div class="col-xs-12 col-sm-6">
        <h2>Bill Splitter</h2>
        <p>Welcome! This tool will help you split a tab and tips</p>
        <form method='GET' action='index.php' class='form-horizontal'>
            <div class="input-group">
                <span class='input-group-addon' id='basic-addon1'>Split how many ways?</span>

                <input type='text'
                       class='form-control'
                       name='numberOfWays'
                       placeholder='eg. 3'
                       aria-describedby='basic-addon1'
                       value='<?= sanitize($numberOfWays) ?>'>
                <span class='input-group-addon' id='basic-addon3'>* Required</span>
            </div>
            <div class="input-group">
                <span class='input-group-addon' id='basic-addon2'>How much was the tab?</span>
                <input type='text'
                       class='form-control'
                       name='total'
                       placeholder='eg. 49.99'
                       aria-describedby='basic-addon2'
                       value='<?= sanitize($total) ?>'>
                <span class='input-group-addon' id='basic-addon4'>* Required</span>
            </div>
            <div class="input-group">
                <label class="input-group-addon" for="serviceSelect">How was the service? </label>
                <select name="service" class="custom-select form-control" id="serviceSelect">
                    <option <?php if ($service == '20') echo 'selected' ?> value="20">Excellent (20% Tip)</option>
                    <option <?php if ($service == '18') echo 'selected' ?> value="18">Good (18% Tip)</option>
                    <option <?php if ($service == '15') echo 'selected' ?> value="15">Fair (15% Tip)</option>
                    <option <?php if ($service == '10') echo 'selected' ?> value="10">Bad (10% Tip)</option>
                </select>
            </div>
            <div class="input-group">
                <label class="form-check-label" for="defaultCheck1">Round up</label>
                <input name="roundUp"
                       class="form-control form-check-input"
                       type="checkbox"
                       value="1"
                       id="defaultCheck1" <?= ($roundUp) ? 'checked' : '' ?>>
            </div>
            <input type='submit' class='btn btn-primary btn-md' value='Calculate'>
        </form>
        <?php if ($form->hasErrors) : ?>
            <div class='alert alert-danger'>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if ($haveResults): ?>
            <p class='alert alert-success'><?= 'Each person owes: ' . $resultTotal ?></p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>