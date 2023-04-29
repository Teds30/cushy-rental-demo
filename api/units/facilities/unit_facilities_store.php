<?php

include_once('../../../functions/db_functions.php');

//TODO: Authorization & Verify sender

$sql = "INSERT INTO `cr_unit_facilities`(
    `unit_id`,
    `facility_id`,
    `is_shared`
    ) VALUES (
    " . $_POST['unit_id'] . ",
    " . $_POST['facility_id'] . ",
    " . $_POST['is_shared'] . "
    )
    ";

echo $sql;

$res = db_nonquery($sql, "Inserted new facility to a unit.", true);

return $res;
