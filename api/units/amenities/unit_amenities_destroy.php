<?php

include_once('../../../functions/db_functions.php');

$unit_id = $_POST['unit_id'];
$amenity_id = $_POST['amenity_id'];

//TODO: Authorization & Verify sender

// $sql = "UPDATE `cr_unit_amenities` SET status = 0 WHERE amenity_id = '$amenity_id' AND unit_id = '$unit_id'";
$sql = "DELETE FROM `cr_unit_amenities` WHERE amenity_id = '$amenity_id' AND unit_id = '$unit_id'";
$res = db_nonquery($sql, 'Successfully deleted an amenity of a unit.');

return $res;
