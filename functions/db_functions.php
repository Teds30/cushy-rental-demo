<?php

include_once('../../../connection/connection.php');

function db_query($sql = '', $msg)
{
    $con = connection();

    $res = $con->query($sql) or die($con->error);

    $data = null;
    $out = null;

    while ($row = $res->fetch_assoc()) {
        $data[] = $row;
    }

    $out['data'] = $data;
    $out['msg'] = '';

    if (!$data) $out['msg'] = $msg;

    // for postman testing
    // echo json_encode($out);

    return $out;
}

function db_nonquery($sql = '', $msg = '', $is_insert = false)
{
    $con = connection();

    $res = $con->query($sql) or die($con->error);

    $out = null;

    $out['msg'] = $msg;

    if ($is_insert && ($res === TRUE)) {

        $out['inserted_id'] = $con->insert_id;
    }

    // for postman testing
    echo json_encode($out);

    return $out;
}
