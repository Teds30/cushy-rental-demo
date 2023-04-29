<?php

include_once('../../functions/db_functions.php');

//TODO: Authorization & Verify sender

$sql = "INSERT INTO `cr_units`
    (
        `landlord_id`,
        `name`,
        `details`,
        `price`,
        `month_advance`,
        `month_deposit`,
        `location`,
        `target_gender`,
        `slots`
    ) VALUES (
        " . $_POST['landlord_id'] . ",
        '" . $_POST['name'] . "',
        '" . $_POST['details'] . "',
        " . $_POST['price'] . ",
        " . $_POST['month_advance'] . ",
        " . $_POST['month_deposit'] . ",
        '" . $_POST['location'] . "',
        " . $_POST['target_gender'] . ",
        " . $_POST['slots'] . "
    )
    ";

$res = db_nonquery($sql, "Inserted new unit.", true);

return $res;
