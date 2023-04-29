<?php

include_once('../../../functions/db_functions.php');

$unit_id = $_POST['unit_id'];
$facility_id = $_POST['facility_id'];
$is_shared = $_POST['is_shared'];

//TODO: Authorization & Verify sender

$sql = "UPDATE `cr_unit_facilities` SET is_shared = '$is_shared'  WHERE facility_id = '$facility_id' AND unit_id = '$unit_id'";
$res = db_nonquery($sql, 'Successfully updated facility of a unit.');

return $res;
