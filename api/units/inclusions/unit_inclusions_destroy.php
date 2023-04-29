<?php

include_once('../../../functions/db_functions.php');

$unit_id = $_POST['unit_id'];
$inclusion_id = $_POST['inclusion_id'];

//TODO: Authorization & Verify sender

// $sql = "UPDATE `cr_unit_inclusions` SET status = 0 WHERE inclusion_id = '$inclusion_id' AND unit_id = '$unit_id'";
$sql = "DELETE FROM `cr_unit_inclusions` WHERE inclusion_id = '$inclusion_id' AND unit_id = '$unit_id'";
$res = db_nonquery($sql, 'Successfully deleted an inclusion of a unit.');

return $res;
