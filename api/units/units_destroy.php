<?php

include_once('../../functions/db_functions.php');

$id = $_POST['id'];

//TODO: Authorization & Verify sender

$sql = "UPDATE `cr_units` SET status = 0 WHERE id = '$id'";
$res = db_nonquery($sql, 'Successfully deleted unit.');

return $res;
