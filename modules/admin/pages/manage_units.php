<!DOCTYPE html>
<?php

$selected = 'manage_units';

include '../../../api/units/units.php';
$q_units = units_index();
$units = $q_units['data'];

include '../../../api/users/users.php';
$q_users = users_index();
$users = $q_users['data'];


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Units</title>
    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <main>

        <?php include '../layout/sidebar.php' ?>
        <section>

            <?php include '../layout/topbar.php' ?>
            <div class="container">

                <h1>Manage Units</h1>

                <div class="table-container">

                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Search a unit">
                    </div>
                    <div class="filter-container">
                        <button class="btn btn-plain">Slots<span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 9l6 6l6 -6"></path>
                                </svg></span></button>
                        <button class="btn btn-plain">Subscription<span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 9l6 6l6 -6"></path>
                                </svg></span></button>
                        <button class="btn btn-plain">Status<span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M6 9l6 6l6 -6"></path>
                                </svg></span></button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>UNIT</th>
                                <th>PRICE</th>
                                <th>LOCATION</th>
                                <th>SLOTS</th>
                                <th>SUBSCRIPTION</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($units as $unit) : ?>
                                <tr>
                                    <td>
                                        <div class="td-picture-container">
                                            <div class="td-picture-box"><img src="/cr_demo/assets/images/units/unit1/unit_1_1.jpg" alt=""></div>
                                            <div class="td-picture-content">
                                                <p class="title"><?= $unit['name'] ?></p>
                                                <?php

                                                $q_user = users_show($unit['landlord_id']);
                                                $user = $q_user['data'];

                                                ?>
                                                <p><?= $user['first_name'] . ' ' . $user['last_name'] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $unit['price'] ?></td>
                                    <td>Rawis, Legazpi City</td>
                                    <td><?= $unit['slots'] ?></td>
                                    <td><?= $unit['subscription_id'] != 0 ? $unit['subscription_id'] : 'NONE' ?></td>
                                    <td>
                                        <div class="td-center">
                                            <?php if ($unit['is_listed'] == 1) : ?>
                                                <div class="status-chip status-chip-success">LISTED</div>
                                            <?php elseif ($unit['is_listed'] == 0) : ?>
                                                <div class="status-chip status-chip-pending">LISTED</div>
                                            <?php endif ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td-center"> <a href="manage_unit_details.php?unit_id=<?= $unit['id'] ?>" class="link">Manage</a></div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            <!-- <tr>
                                <td>
                                    <div class="td-picture-container">
                                        <div class="td-picture-box"><img src="/cr_demo/assets/images/units/unit1/unit_1_1.jpg" alt=""></div>
                                        <div class="td-picture-content">
                                            <p class="title">Tya Els Boarding House</p>
                                            <p>Tya Els</p>
                                        </div>
                                    </div>
                                </td>
                                <td>5,000</td>
                                <td>Rawis, Legazpi City</td>
                                <td>4</td>
                                <td>NONE</td>
                                <td>
                                    <div class="td-center">
                                        <div class="status-chip status-chip-success">LISTED</div>
                                    </div>
                                </td>
                                <td> <a href="manage_unit_details.php?unit_id=1" class="link">Manage</a> </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</body>

</html>