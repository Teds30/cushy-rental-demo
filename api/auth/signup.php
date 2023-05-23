<?php

session_start();
$config = include('../../config/config.php');

include_once($config['app_path'] . '/functions/db_functions.php');

$con = include($config['app_path'] . '/connection/connection.php');

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$firstname = mysqli_real_escape_string($con, $_POST['first_name']);
$lastname = mysqli_real_escape_string($con, $_POST['last_name']);
$phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
$user_type = mysqli_real_escape_string($con, $_POST['user_type']);

$callback_url = $_GET['callback_url'];

$user_type_id = null;
if ($user_type == 'tenant') {
    $user_type_id = 3;
} else if ($user_type == 'landlord') {
    $user_type_id = 2;
}

$out = null;
if ($user_type_id != 2 && $user_type_id != 3) {
    $out['data'] = null;
    $out['msg'] = 'Failed to create account.';
    echo json_encode($out);
    return $out;
}


$sql = "INSERT INTO `cr_users` (email, password, first_name, middle_name, last_name,gender,phone_number,user_type_id) VALUES('$email', md5('$password'), '$firstname', '', '$lastname', '$gender', '$phone_number', '$user_type_id');";

$res = db_nonquery($sql, "Successfully created account.", true);

if ($res) {
    $_SESSION['USER_ID'] = $res['inserted_id'];
    $_SESSION['USER_TYPE'] = $user_type_id;
    $_SESSION['USER_FIRST_NAME'] = $firstname;
    $_SESSION['USER_LAST_NAME'] = $lastname;

    if ($_SESSION['USER_TYPE'] == 1) {

        header("Location: " . $config['protocol'] . 'localhost/cr_demo/modules/admin/pages/manage_units.php');
    } else if ($_SESSION['USER_TYPE'] == 2) {
        header("Location: " . $config['protocol'] . 'localhost/cr_demo/modules/landlord/pages/home_page.php');
    } else if ($_SESSION['USER_TYPE'] == 3) {
        header("Location: " . $config['protocol'] . 'localhost/cr_demo/modules/tenant/pages/home_page/home_page.php');
    }
    // header("Location: " . $config['protocol'] . $callback_url);
}

return $res;
