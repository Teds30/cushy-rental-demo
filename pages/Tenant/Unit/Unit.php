<?php include '../../../layout/header.php' ?>

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

<div class="unit_container">
    <h1><?= $units['data'][0]['name'] ?></h1>
</div>

<?php include '../../../layout/footer.php' ?>