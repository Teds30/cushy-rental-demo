<?php

include_once('../../../connection/connection.php');
include_once('../../../functions/db_functions.php');

// fetch all users
function users_index()
{

    $sql = "SELECT * FROM `cr_users`";
    $res = db_query($sql, 'No users yet.');

    return $res;
}

// fetch a user by id
function users_show($id)
{
    $sql = "SELECT * FROM `cr_users` WHERE id = '$id'";
    // $res = db_query($sql, "No user found with an id of $id.");
    $res = db_queryOnce($sql, "No user found with an id of $id.");

    return $res;
}
