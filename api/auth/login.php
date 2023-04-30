<?php

session_start();

include_once('../../connection/connection.php');
$con = connection();

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$sql = "SELECT * FROM `cr_users` WHERE email = '$email' AND password = '$password'";
$res = $con->query($sql) or die($con->error);

$data = null;
$out = null;

while ($row = $res->fetch_assoc()) {
    $data[] = $row;
}

$out['data'] = $data;
$out['msg'] = '';

if (!$data) $out['msg'] = 'Account does not exist.';

echo json_encode($out);

return $out;
