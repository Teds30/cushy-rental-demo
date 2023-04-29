<?php

include_once('../../../functions/db_functions.php');

//TODO: Authorization & Verify sender

$sql = "INSERT INTO `cr_unit_inclusions`(
    `unit_id`,
    `inclusion_id`
    ) VALUES (
    " . $_POST['unit_id'] . ",
    " . $_POST['inclusion_id'] . "
    )
    ";

echo $sql;

$res = db_nonquery($sql, "Inserted new inclusion to a unit.", true);

return $res;
