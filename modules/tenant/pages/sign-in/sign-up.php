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

            <div class="facebook-google">

                <div class="facebook">

                    <a href="">

                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#0A66C2" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>

                        <span>Facebook</span>

                    </a>

                </div>

                <div class="google">

                    <a href="">

                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_27_853)">
                                <path d="M21.4856 11.2057C21.4856 10.3044 21.4125 9.64668 21.2542 8.9646H10.9619V13.0328H17.0033C16.8815 14.0437 16.2238 15.5663 14.7621 16.5894L14.7416 16.7256L17.9959 19.2466L18.2213 19.2691C20.2919 17.3568 21.4856 14.5431 21.4856 11.2057Z" fill="#4285F4" />
                                <path d="M10.9619 21.9245C13.9216 21.9245 16.4064 20.95 18.2213 19.2692L14.7621 16.5895C13.8364 17.2351 12.594 17.6857 10.9619 17.6857C8.06301 17.6857 5.60262 15.7735 4.72556 13.1304L4.597 13.1413L1.2132 15.76L1.16895 15.8831C2.9716 19.464 6.6744 21.9245 10.9619 21.9245Z" fill="#34A853" />
                                <path d="M4.72589 13.1303C4.49447 12.4482 4.36053 11.7174 4.36053 10.9622C4.36053 10.207 4.49447 9.47621 4.71371 8.79413L4.70758 8.64886L1.28137 5.98804L1.16927 6.04136C0.426313 7.52737 0 9.19609 0 10.9622C0 12.7283 0.426313 14.397 1.16927 15.883L4.72589 13.1303Z" fill="#FBBC05" />
                                <path d="M10.9619 4.23869C13.0203 4.23869 14.4088 5.12785 15.2006 5.87089L18.2943 2.85018C16.3943 1.08405 13.9216 0 10.9619 0C6.6744 0 2.9716 2.46039 1.16895 6.04135L4.71338 8.79412C5.60262 6.15102 8.06301 4.23869 10.9619 4.23869Z" fill="#EB4335" />
                            </g>
                            <defs>
                                <clipPath id="clip0_27_853">
                                    <rect width="22" height="22" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <span style="position: relative; right: 20px">Google</span>

                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>