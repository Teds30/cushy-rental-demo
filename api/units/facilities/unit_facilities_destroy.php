<?php

include_once('../../../functions/db_functions.php');

$unit_id = $_POST['unit_id'];
$facility_id = $_POST['facility_id'];

//TODO: Authorization & Verify sender

// $sql = "UPDATE `cr_unit_facilities` SET status = 0 WHERE facility_id = '$facility_id' AND unit_id = '$unit_id'";
$sql = "DELETE FROM `cr_unit_facilities` WHERE facility_id = '$facility_id' AND unit_id = '$unit_id'";
$res = db_nonquery($sql, 'Successfully deleted a facility of a unit.');

return $res;
