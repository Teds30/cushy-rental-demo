<?php

include_once('../../../functions/db_functions.php');

//TODO: Authorization & Verify sender

$sql = "INSERT INTO `cr_unit_amenities`(
    `unit_id`,
    `amenity_id`
    ) VALUES (
    " . $_POST['unit_id'] . ",
    " . $_POST['amenity_id'] . "
    )
    ";

echo $sql;

$res = db_nonquery($sql, "Inserted new amenity to a unit.", true);

return $res;
