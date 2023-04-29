<?php

include_once('../../../functions/db_functions.php');

//TODO: Authorization & Verify sender

$sql = "INSERT INTO `cr_unit_rules`(
    `unit_id`,
    `rule_id`
    ) VALUES (
    " . $_POST['unit_id'] . ",
    " . $_POST['rule_id'] . "
    )
    ";

echo $sql;

$res = db_nonquery($sql, "Inserted new rule to a unit.", true);

return $res;
