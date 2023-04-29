<?php

include_once('../../functions/db_functions.php');

//TODO: Authorization & Verify sender

$sql = "UPDATE `cr_units` SET
    `landlord_id` = " . $_POST['landlord_id'] . ",
    `name` = '" . $_POST['name'] . "',
    `details` = '" . $_POST['details'] . "',
    `price` = " . $_POST['price'] . ",
    `month_advance` = " . $_POST['month_advance'] . ",
    `month_deposit` = " . $_POST['month_deposit'] . ",
    `location` = '" . $_POST['location'] . "',
    `target_gender` = " . $_POST['target_gender'] . ",
    `slots` = " . $_POST['slots'] . ",
    `is_listed` = " . $_POST['is_listed'] . "
    WHERE id = " . $_GET['id'] . "
    ";

// return $sql;
$res = db_nonquery($sql, "Updated unit.");

return $res;
