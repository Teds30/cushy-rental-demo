<?php

include('../../../api/units/units.php');
$units = units_show(1);
print_r($units);
echo '<br><hr><br>';
$amenities = unit_amenities(1);
print_r($amenities);
echo '<br><hr><br>';
$facilities = unit_facilities(1);
print_r($facilities);
echo '<br><hr><br>';
$inclusions = unit_inclusions(1);
print_r($inclusions);
echo '<br><hr><br>';
$rules = unit_rules(1);
print_r($rules);
echo '<br><hr><br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <title>Example</title>
</head>

<body>

    <div class="unit_container">
        <h1><?= $units['data'][0]['name'] ?></h1>
    </div>
</body>

</html>