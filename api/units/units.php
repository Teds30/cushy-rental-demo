<?php

include_once('../../../connection/connection.php');
include_once('../../../functions/db_functions.php');

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


// UNIT AMENITIES

//fetch all unit's amenities
function unit_amenities($id)
{
    $sql = "SELECT amenity_id FROM `cr_unit_amenities` WHERE unit_id = '$id'";
    $res = db_query($sql, "No amenities.");

    return $res;
}
//fetch all unit's facilities
function unit_facilities($id)
{
    $sql = "SELECT facility_id FROM `cr_unit_facilities` WHERE unit_id = '$id'";
    $res = db_query($sql, "No facilities.");

    return $res;
}
//fetch all unit's inclusions
function unit_inclusions($id)
{
    $sql = "SELECT inclusion_id FROM `cr_unit_inclusions` WHERE unit_id = '$id'";
    $res = db_query($sql, "No inclusions.");

    return $res;
}
//fetch all unit's rules
function unit_rules($id)
{
    $sql = "SELECT rule_id FROM `cr_unit_rules` WHERE unit_id = '$id'";
    $res = db_query($sql, "No rules.");

    return $res;
}
