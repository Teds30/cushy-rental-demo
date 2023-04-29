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


// fetch all units
function units_index()
{

    $sql = "SELECT * FROM `cr_units`";
    $res = db_query($sql, 'No units yet.');

    return $res;
}

// fetch a unit by id
function units_show($id)
{
    $sql = "SELECT * FROM `cr_units` WHERE id = '$id'";
    $res = db_query($sql, "No unit found with an id of $id.");

    return $res;
}