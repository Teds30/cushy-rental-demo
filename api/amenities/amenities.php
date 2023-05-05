<?php
include_once('../../../connection/connection.php');
include_once('../../../functions/db_functions.php');

// fetch all amenities
function amenities_index()
{

    $sql = "SELECT * FROM `cr_amenities`";
    $res = db_query($sql, 'No amenities yet.');

    return $res;
}

// fetch a amenity by id
function amenities_show($id)
{
    $sql = "SELECT * FROM `cr_amenities` WHERE id = '$id'";
    $res = db_queryOnce($sql, "No amenity found with an id of $id.");

    return $res;
}
