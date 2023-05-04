<!DOCTYPE html>
<?php

$selected = 'unit_verification';



?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Verification</title>
    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <main>

        <?php include '../layout/sidebar.php' ?>
        <section>

            <?php include '../layout/topbar.php' ?>
            <div class="container">

                <div class="title-container">

                    <h1>Unit Verification</h1>

                </div>

                <div class="table-container">

                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Search an inclusion">
                    </div>
                    <div class="filter-container">
                        <button class="btn btn-plain">Status<span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 9l6 6l6 -6"></path>
                                </svg></span></button>
                    </div>

                    <div class="tabs-container">
                        <div id="tab-0" class="tab tab-selected" onclick="openTab(0)">All</div>
                        <div id="tab-1" class="tab" onclick="openTab(1)">Pending</div>
                        <div id="tab-2" class="tab" onclick="openTab(2)">Verified</div>
                        <div id="tab-3" class="tab" onclick="openTab(3)">Denied</div>
                    </div>
                    <div class="tab-contents-container">
                        <div id="tab-content-0" class="tab-content" style="display:block">
                            <a class="card-row-container btn-link" href="manage_unit_details.php">
                                <div class="card-row">
                                    <div class="cr-unit">
                                        <div class="cr-unit-img"><img src="/cr_demo/assets/images/units/unit1/unit_1_1.jpg" alt="unit"></div>
                                        <div class="cr-unit-details">
                                            <p class="title">Unit Title</p>
                                            <p class="caption">Tya Els • 2 hours ago</p>
                                        </div>
                                    </div>
                                    <div class="cr-status status-chip status-chip-pending ">PENDING</div>
                                </div>
                            </a>
                            <a class="card-row-container btn-link" href="manage_unit_details.php">
                                <div class="card-row">
                                    <div class="cr-unit">
                                        <div class="cr-unit-img"><img src="/cr_demo/assets/images/units/unit1/unit_1_1.jpg" alt="unit"></div>
                                        <div class="cr-unit-details">
                                            <p class="title">Unit Title</p>
                                            <p class="caption">Tya Els • 2 hours ago</p>
                                        </div>
                                    </div>
                                    <div class="cr-status status-chip status-chip-success ">VERIFIED</div>
                                </div>
                            </a>
                        </div>


                        <div id="tab-content-1" class="tab-content">
                            <a class="card-row-container btn-link" href="manage_unit_details.php">
                                <div class="card-row">
                                    <div class="cr-unit">
                                        <div class="cr-unit-img"><img src="/cr_demo/assets/images/units/unit1/unit_1_1.jpg" alt="unit"></div>
                                        <div class="cr-unit-details">
                                            <p class="title">Unit Title</p>
                                            <p class="caption">Tya Els • 2 hours ago</p>
                                        </div>
                                    </div>
                                    <div class="cr-status status-chip status-chip-pending ">PENDING</div>
                                </div>
                            </a>
                        </div>
                        <div id="tab-content-2" class="tab-content">
                            <a class="card-row-container btn-link" href="manage_unit_details.php">
                                <div class="card-row">
                                    <div class="cr-unit">
                                        <div class="cr-unit-img"><img src="/cr_demo/assets/images/units/unit1/unit_1_1.jpg" alt="unit"></div>
                                        <div class="cr-unit-details">
                                            <p class="title">Unit Title</p>
                                            <p class="caption">Tya Els • 2 hours ago</p>
                                        </div>
                                    </div>
                                    <div class="cr-status status-chip status-chip-success ">VERIFIED</div>
                                </div>
                            </a>
                        </div>
                        <div id="tab-content-3" class="tab-content"></div>
                    </div>


                </div>
            </div>
        </section>
    </main>
    <script src="../js/tabs.js"></script>
</body>

</html>