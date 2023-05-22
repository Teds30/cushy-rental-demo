<!DOCTYPE html>
<?php

$selected = 'amenities';


include '.././../../functions/path.php';
include '../../../api/amenities/amenities.php';


$q_amenities = amenities_index();
$amenities = $q_amenities['data'];


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Amenities</title>
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

                    <h1>Manage Amenities</h1>
                    <a class="btn btn-primary btn-link" href="add_attribute.php?attribute=amenity">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg></span>
                        Add new
                    </a>
                </div>

                <div class="table-container">

                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Search an amenity">
                    </div>
                    <div class="filter-container">
                        <button class="btn btn-plain">Status<span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 9l6 6l6 -6"></path>
                                </svg></span></button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ICON</th>
                                <th>NAME</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="td-icon-container">
                                        <div id="tr-1" class="td-icon-action" onclick="showOptions(1)">
                                            <svg xmlns=" http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 6l6 6l-6 6"></path>
                                            </svg>
                                        </div>
                                        <div class="td-icon">
                                            <span>
                                                <!-- <i class='bx bx-cctv'></i> -->
                                                <?php echo file_get_contents(getBaseUrl() . '/assets/icons/cctv.svg') ?>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>CCTV</td>
                                <td>ACTIVE</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="td-details">
                                    <div id="data-1" class="attr-details">
                                        <p class="title">Editing Amenity</p>
                                        <div class="attr-section">

                                            <div class="attr-icon-container">
                                                <div class="attr-icon">
                                                    <!-- <i class='bx bx-cctv'></i> -->
                                                    <?php echo file_get_contents(getBaseUrl() . '/assets/icons/cctv.svg') ?>
                                                </div>
                                                <p>Change Icon</p>
                                            </div>
                                            <div class="vl"></div>
                                            <div class="attr-field">

                                                <div class="custom__inputs">
                                                    <label>
                                                        <input required="" type="text">
                                                        <span>Name</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="vl"></div>
                                            <div class="attr-field">
                                                Set Availability
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="btn-container" style="margin-top: 12px">
                                            <button class=" btn btn-primary">Update</button>
                                            <button class="btn btn-secondary">Cancel</button>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="td-icon-container">
                                        <div id="tr-2" class="td-icon-action" onclick="showOptions(2)">
                                            <svg xmlns=" http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 6l6 6l-6 6"></path>
                                            </svg>
                                        </div>
                                        <div class="td-icon">
                                            <span>
                                                <!-- <i class='bx bx-cctv'></i> -->
                                                <?php echo file_get_contents(getBaseUrl() . '/assets/icons/air_con.svg') ?>
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td>Air Condition</td>
                                <td>ACTIVE</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="td-details">
                                    <div id="data-2" class="attr-details">
                                        <p class="title">Editing Amenity</p>
                                        <div class="attr-section">

                                            <div class="attr-icon-container">
                                                <div class="attr-icon">
                                                    <!-- <i class='bx bx-cctv'></i> -->
                                                    <?php echo file_get_contents(getBaseUrl() . '/assets/icons/air_con.svg') ?>
                                                </div>
                                                <p>Change Icon</p>
                                            </div>
                                            <div class="vl"></div>
                                            <div class="attr-field">

                                                <div class="custom__inputs">
                                                    <label>
                                                        <input required="" type="text">
                                                        <span>Name</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="vl"></div>
                                            <div class="attr-field">
                                                Set Availability
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="btn-container" style="margin-top: 12px">
                                            <button class=" btn btn-primary">Update</button>
                                            <button class="btn btn-secondary">Cancel</button>
                                        </div>

                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <script src="../js/table.js"></script>
</body>

</html>