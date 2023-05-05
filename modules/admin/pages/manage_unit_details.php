<!DOCTYPE html>
<?php

$selected = 'manage_units';

$unit_id = $_GET['unit_id'];


include '../../../api/units/units.php';
$q_unit = units_show($unit_id);
$unit = $q_unit['data'];

include '../../../api/users/users.php';
$q_user = users_show($unit['landlord_id']);
$user = $q_user['data'];

$q_amenities = unit_amenities($unit_id);
$amenities = $q_amenities['data'];

$q_facilities = unit_facilities($unit_id);
$facilities = $q_facilities['data'];

$q_rules = unit_rules($unit_id);
$rules = $q_rules['data'];


include '../../../api/amenities/amenities.php';

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
                    <!-- <h1>Manage Unit</h1> -->

                    <div class="breadcrumbs">
                        <span class="title">Manage Unit</span>
                        <span class="breadcrumb-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 6l6 6l-6 6"></path>
                            </svg></span>
                        <span><?= $unit['name'] ?></span>
                    </div>
                </div>

                <div class="unit-container">

                    <div class="unit-intro">
                        <p class="unit-price">PHP <?= number_format($unit['price']) ?></p>
                        <h1 class="unit-title"><?= $unit['name'] ?></h1>
                        <div class="user-info">
                            <div class="user-info-pic"><img src="/cr_demo/assets/images/accounts/user1/user1.png" alt=""></div>
                            <p class="title"><?= $user['first_name'] . ' ' . $user['last_name'] ?></p>
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
                        <p><?= $unit['details'] ?></p>
                    </div>
                    <div class="unit-section">
                        <p class="title">Gender</p>
                        <div>
                            <div class="icon-card">
                                <div class="icon-card-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.5 0.5C6.15685 0.5 7.5 1.84316 7.5 3.5C7.5 5.15684 6.15685 6.5 4.5 6.5C2.84316 6.5 1.5 5.15684 1.5 3.5C1.5 1.84316 2.84316 0.5 4.5 0.5ZM6.75 7.25H6.2175C5.15292 7.73952 3.89297 7.76066 2.7825 7.25H2.25C1.00734 7.25 0 8.25734 0 9.5V15.875C0 16.4963 0.503672 17 1.125 17H1.875V23.375C1.875 23.9963 2.37867 24.5 3 24.5H6C6.62133 24.5 7.125 23.9963 7.125 23.375V17H7.875C8.49633 17 9 16.4963 9 15.875V9.5C9 8.25734 7.99266 7.25 6.75 7.25Z" fill="#5C6173" />
                                        <path d="M16.6255 0.5C18.2823 0.5 19.6255 1.84316 19.6255 3.5C19.6255 5.15684 18.2823 6.5 16.6255 6.5C14.9686 6.5 13.6255 5.15684 13.6255 3.5C13.6255 1.84316 14.9686 0.5 16.6255 0.5ZM22.2169 17.1021L19.9669 8.10214C19.906 7.85874 19.7656 7.64267 19.5678 7.48827C19.3701 7.33387 19.1264 7.25 18.8755 7.25H18.343C17.2784 7.73952 16.0184 7.76066 14.908 7.25H14.3755C14.1246 7.25 13.8809 7.33387 13.6831 7.48827C13.4854 7.64267 13.3449 7.85874 13.2841 8.10214L11.0341 17.1021C10.8568 17.8112 11.3934 18.5 12.1255 18.5H14.7505V23.375C14.7505 23.9963 15.2541 24.5 15.8755 24.5H17.3755C17.9968 24.5 18.5005 23.9963 18.5005 23.375V18.5H21.1255C21.8563 18.5 22.3944 17.8123 22.2169 17.1021Z" fill="#5C6173" />
                                    </svg>
                                </div>
                                <p>All</p>
                            </div>
                        </div>
                    </div>
                    <div class="unit-section">
                        <p class="title">Amenities</p>
                        <div class="unit-attributes-container">
                            <div class="chip">
                                <div class="chip-icon"><i class="bi bi-thermometer-snow"></i>
                                </div>
                                <p>Air Condition</p>
                            </div>
                        </div>
                    </div>
                    <div class="unit-section">
                        <p class="title">Facilities</p>
                        <div class="unit-attributes-container">
                            <div class="chip">
                                <div class="chip-icon"><i class="fa-solid fa-toilet"></i></div>
                                <p>Owned Comfort Room</p>
                            </div>
                        </div>
                    </div>
                    <div class="unit-section">
                        <p class="title">Rules</p>
                        <div class="unit-attributes-container">
                            <div class="chip">
                                <div class="chip-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-smoking-no" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 13l0 4"></path>
                                        <path d="M16 5v.5a2 2 0 0 0 2 2a2 2 0 0 1 2 2v.5"></path>
                                        <path d="M3 3l18 18"></path>
                                        <path d="M17 13h3a1 1 0 0 1 1 1v2c0 .28 -.115 .533 -.3 .714m-3.7 .286h-13a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1h9"></path>
                                    </svg></i>
                                </div>
                                <p>No Smoking</p>
                            </div>
                        </div>
                    </div>
                    <div class="unit-section">
                        <p class="title">Subscription</p>
                        <p>1 day remaining</p>
                        <div class="col">

                            <div class="subs-card subs-gold">
                                <span><svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12.5" r="12" fill="currentColor" />
                                        <path d="M13.5455 14.2881L12.3772 17.501C12.3485 17.578 12.297 17.6445 12.2295 17.6915C12.162 17.7385 12.0817 17.7636 11.9995 17.7636C11.9172 17.7636 11.837 17.7385 11.7695 17.6915C11.702 17.6445 11.6504 17.578 11.6218 17.501L10.4535 14.2881C10.4331 14.2328 10.4009 14.1825 10.3592 14.1407C10.3175 14.099 10.2672 14.0668 10.2118 14.0464L6.999 12.8781C6.9219 12.8495 6.85541 12.798 6.80845 12.7305C6.7615 12.663 6.73633 12.5827 6.73633 12.5005C6.73633 12.4182 6.7615 12.338 6.80845 12.2704C6.85541 12.2029 6.9219 12.1514 6.999 12.1228L10.2118 10.9545C10.2672 10.9341 10.3175 10.9019 10.3592 10.8602C10.4009 10.8184 10.4331 10.7682 10.4535 10.7128L11.6218 7.49997C11.6504 7.42288 11.702 7.35638 11.7695 7.30943C11.837 7.26247 11.9172 7.2373 11.9995 7.2373C12.0817 7.2373 12.162 7.26247 12.2295 7.30943C12.297 7.35638 12.3485 7.42288 12.3772 7.49997L13.5455 10.7128C13.5659 10.7682 13.598 10.8184 13.6398 10.8602C13.6815 10.9019 13.7318 10.9341 13.7872 10.9545L17 12.1228C17.0771 12.1514 17.1436 12.2029 17.1905 12.2704C17.2375 12.338 17.2626 12.4182 17.2626 12.5005C17.2626 12.5827 17.2375 12.663 17.1905 12.7305C17.1436 12.798 17.0771 12.8495 17 12.8781L13.7872 14.0464C13.7318 14.0668 13.6815 14.099 13.6398 14.1407C13.598 14.1825 13.5659 14.2328 13.5455 14.2881Z" fill="#FEDF37" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                GOLD
                            </div>
                            <div class="btn btn-secondary">
                                Remove
                            </div>

                        </div>

                    </div>
                    <hr>
                    <h2>Unit Management</h2>

                    <div class="list-section">
                        <div>
                            <div class="title">List Unit</div>
                            <p class="">Make this unit available for listings</p>
                        </div>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <p class="title">Unit Verification</p>
                    <div class="tf-short">
                        <input type="text" placeholder="Verdict">
                    </div>
                    <div class="btn-container">
                        <button class=" btn btn-primary">Approve application</button>
                        <button class="btn btn-secondary">Deny application</button>
                    </div>


                </div>

            </div>
        </section>
    </main>
</body>

</html>