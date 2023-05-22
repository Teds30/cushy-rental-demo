<?php

session_start();

$config = include('../../config/config.php');

include_once($config['app_path'] . '/functions/db_functions.php');
$con = include($config['app_path'] . '/connection/connection.php');

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$callback_url = $_GET['callback_url'];

$sql = "SELECT * FROM `cr_users` WHERE email = '$email' AND password = md5('$password')";
$res = $con->query($sql) or die($con->error);

$data = null;
$out = null;

$data = $res->fetch_assoc();

$out['data'] = $data;
$out['msg'] = '';

if (!$data) $out['msg'] = 'Account does not exist.';

echo json_encode($out);

if ($data) {
    $_SESSION['USER_ID'] = $data['id'];
    header("Location: " . $config['protocol'] . $callback_url);
}

return $out;
