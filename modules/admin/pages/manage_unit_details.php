<!DOCTYPE html>
<?php

$selected = 'manage_units';

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Unit</title>
    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <main>

        <?php include '../layout/sidebar.php' ?>
        <section>

            <?php include '../layout/topbar.php' ?>
            <div class="container">

                <div>
                    <h1>Manage Unit</h1>

                    <div class="breadcrumbs">
                        <span class="title">Manage Unit</span>
                        <span class="breadcrumb-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 6l6 6l-6 6"></path>
                            </svg></span>
                        <span>Unit Title</span>
                    </div>
                </div>

                <div class="unit-container">
                    <div class="unit-intro">
                        <p class="unit-price">PHP 5,000</p>
                        <h1 class="unit-title">Tya Els Boarding House</h1>
                        <div class="user-info">
                            <div class="user-info-pic"><img src="/cr_demo/assets/images/accounts/user1/user1.png" alt=""></div>
                            <p class="title">Tya Els</p>
                            •
                            <p>created on April 4, 2023 </p>
                        </div>
                    </div>

                    <hr>

                    <div class="unit-section">
                        <p class="title">Location</p>
                        <p>Rawis, Legazpi City • <span><a href="" class="link">See on map</a></span></p>
                    </div>

                    <div class="unit-section">
                        <p class="title">Images</p>
                        <div class="unit-images">
                            <div class="unit-image"><img src="/cr_demo/assets/images/units/unit1/unit_1_1.jpg" alt=""></div>
                            <div class="unit-image"><img src="/cr_demo/assets/images/units/unit1/unit_1_1.jpg" alt=""></div>
                        </div>
                    </div>

                    <div class="unit-section">
                        <p class="title">Details</p>
                        <p>Renowned for their pan- African presence and with a reputation for delivering world-class Digital CustorT Experience and Technology Services, DSC's impact.</p>
                    </div>
                    <div class="unit-section">
                        <p class="title">Gender</p>
                        <p>//TODO:fill .</p>
                    </div>
                    <div class="unit-section">
                        <p class="title">Amenities</p>
                        <p>//TODO:fill .</p>
                    </div>
                    <div class="unit-section">
                        <p class="title">Facilities</p>
                        <p>//TODO:fill .</p>
                    </div>
                    <div class="unit-section">
                        <p class="title">Rules</p>
                        <p>//TODO:fill .</p>
                    </div>
                    <div class="unit-section">
                        <p class="title">Subscription</p>
                        <p>//TODO:fill .</p>
                    </div>

                </div>

            </div>
        </section>
    </main>
</body>

</html>