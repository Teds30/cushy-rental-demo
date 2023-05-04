<!DOCTYPE html>
<?php

$selected = 'manage_users';

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page - Landlord</title>
    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <main>

        <?php include '../layout/sidebar.php' ?>
        <section>

            <?php include '../layout/topbar.php' ?>
            <div class="container">

                <h1>Manage Users</h1>

                <div class="table-container">

                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="Search a user">
                    </div>
                    <div class="filter-container">
                        <button class="btn btn-plain">Account<span> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                <th>USER</th>
                                <th>ACCOUNT</th>
                                <th>PHONE</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="td-center">
                                        <div class="td-picture"><img src="/cr_demo/assets/images/accounts/user1/user1.png" alt=""></div>
                                        <div class="td-picture-content">
                                            <p class="title">Tya Els</p>
                                            <p>tyaels@gg.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Landlord</td>
                                <td>+639123456789</td>
                                <td>VERIFIED</td>
                                <td>
                                    <div class="td-center"><a href="" class="link">Manage</a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>
</body>

</html>