<?php

include_once('../../../functions/db_functions.php');

$unit_id = $_POST['unit_id'];
$rule_id = $_POST['rule_id'];

//TODO: Authorization & Verify sender

// $sql = "UPDATE `cr_unit_rules` SET status = 0 WHERE rule_id = '$rule_id' AND unit_id = '$unit_id'";
$sql = "DELETE FROM `cr_unit_rules` WHERE rule_id = '$rule_id' AND unit_id = '$unit_id'";
$res = db_nonquery($sql, 'Successfully deleted a rule of a unit.');

return $res;
