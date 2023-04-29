<?php

include_once('../../functions/db_functions.php');

$id = $_POST['id'];

//TODO: Authorization & Verify sender

$sql = "DELETE FROM `cr_units` WHERE id = '$id'";
$res = db_nonquery($sql, 'Successfully deleted unit.');

return $res;
