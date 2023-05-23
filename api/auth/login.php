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
    $_SESSION['USER_TYPE'] = $data['user_type_id'];
    $_SESSION['USER_FIRST_NAME'] = $data['first_name'];
    $_SESSION['USER_LAST_NAME'] = $data['last_name'];

    if ($_SESSION['USER_TYPE'] == 1) {

        header("Location: " . $config['protocol'] . 'localhost/cr_demo/modules/admin/pages/manage_units.php');
    } else if ($_SESSION['USER_TYPE'] == 2) {
        header("Location: " . $config['protocol'] . 'localhost/cr_demo/modules/landlord/pages/home_page.php');
    } else if ($_SESSION['USER_TYPE'] == 3) {
        header("Location: " . $config['protocol'] . 'localhost/cr_demo/modules/tenant/pages/home_page/home_page.php');
    }
    // header("Location: " . $config['protocol'] . $callback_url);
}

return $out;
