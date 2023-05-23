<?php

session_start();


$config = include('../../../../config/config.php');

if (isset($_SESSION['user_type'])) {
}

$user_type = null;

if (!isset($_GET['user_type'])) {
    header("Location: sign-up.php?user_type=tenant");
}
$user_type = $_GET['user_type'];

$callback_url = null;
if (isset($_GET['callback_url'])) {
    $callback_url = $_GET['callback_url'];
} else {
    $callback_url = $_SERVER["HTTP_HOST"] . '/cr_demo/modules/tenant/pages/home_page/home_page.php';
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../../../css/index.css">

    <!-- Manage Unit -->
    <link rel="stylesheet" href="../../../../css/manage_units/index.css">

    <!-- Home Page CSS -->
    <link rel="stylesheet" href="../../../tenant/css/sign-in/sign-in.css">

</head>

<body>

    <div class="main-content">



        <div class="sign-up">

            <form action="/cr_demo/api/auth/signup.php?callback_url=<?= $callback_url ?>" method="post">

                <div class="create-account-title">

                    <h2>Create account</h2>

                </div>

                <div class="user">

                    <a href="sign-up.php?user_type=tenant" style="text-decoration: none;" class="<?= ($user_type == 'tenant') ? 'btn-primary' : 'btn-plain' ?>  btn btn-fill ">Tenant</a>
                    <a href="sign-up.php?user_type=landlord" style="text-decoration: none;" class="<?= ($user_type == 'tenant') ? 'btn-plain' : 'btn-primary' ?>  btn btn-fill ">Landlord</a>

                </div>

                <div class="lastname-firstname">

                    <div class="custom__inputs">

                        <label>

                            <input required="true" type="text" name="first_name">
                            <span>First Name</span>

                        </label>

                    </div>

                    <div class="custom__inputs">

                        <label>

                            <input required="true" type="text" name="last_name">
                            <span>Last Name</span>

                        </label>

                    </div>

                </div>

                <select name="gender" id="gender" required='false'>

                    <option value="">Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                    <option value="0">Not to specify</option>

                </select>

                <div class="custom__inputs">

                    <label>

                        <input required="true" type="text" name="phone_number">
                        <span>Phone Number</span>

                    </label>

                </div>

                <div class="custom__inputs">

                    <label>

                        <input required="true" type="text" name="email">
                        <span>Email</span>

                    </label>

                </div>

                <div class="custom__inputs">

                    <label>

                        <input required="true" type="password" name="password">
                        <span>Password</span>

                    </label>

                </div>

                <div class="custom__inputs">

                    <label>

                        <input required="true" type="password" name="confirm_password">
                        <span>Confirm Password</span>

                    </label>

                </div>

                <div class="remember-forgot">

                    <div class="remember-me">

                        <input type="checkbox" id="remember">
                        <label for="remember" class="title">I have read and agree to the <a href="" style="color: #B3A599;">Terms of Service</a></label>

                    </div>

                </div>

                <input type="hidden" name="user_type" value="<?= $user_type ?>">
                <button class="submit btn btn-fill btn-primary" type="submit">Submit</button>

            </form>

        </div>

    </div>

    </div>

</body>

</html>