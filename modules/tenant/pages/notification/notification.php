<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTIFICATION</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../../../css/index.css">

    <!-- Manage Unit -->
    <link rel="stylesheet" href="../../../../css/manage_units/index.css">

    <link rel="stylesheet" href="../../css/notification/notification.css">

</head>

<body>

    <nav class="nav">

        <div class="nav-back">

            <a href="<?php if ($_SESSION['USER_TYPE'] == 2) {
                            echo '/cr_demo/modules/landlord/pages/home_page.php';
                        } else {
                            echo '/cr_demo/modules/tenant/pages/home_page/home_page.php';
                        } ?>">

                <i class="bi bi-chevron-left"></i>

            </a>

        </div>

        <div class="nav-title">

            <h2 class="title">Notification</h2>

        </div>

    </nav>

    <div class="main-content">

        <div class="new-notifs">

            <div class="day-indicator">

                <p class="smaller-text">Today: May 8, 2023</p>

            </div>

            <div class="notif">

                <a href="">

                    <div class="new-notif">

                        <div class="active"></div>

                    </div>

                    <div class="notif-message">

                        <h3 class="title">Payment Due Today</h3>
                        <p class="caption">John C. Otilla needs to pay this....</p>
                        <span class="pre-title">July 23, 2023 | 12:00 AM</span>

                    </div>

                    <div class="user-photo">

                        <img src="../../logo/images (4).jpeg" alt="">

                    </div>

                </a>

            </div>

        </div>

        <div class="old-notifs">

            <div class="day-indicator">

                <p class="smaller-text">Today: May 8, 2023</p>

            </div>

            <div class="notif">

                <a href="">

                    <!-- <div class="new-notif">

                        <div class="active"></div>
    
                    </div> -->

                    <div class="notif-message">

                        <h3 class="title">Payment Due Today</h3>
                        <p class="caption">John C. Otilla needs to pay this....</p>
                        <span class="pre-title">July 23, 2023 | 12:00 AM</span>

                    </div>

                    <div class="user-photo">

                        <img src="../../logo/images (4).jpeg" alt="">

                    </div>

                </a>

            </div>

        </div>

    </div>

</body>

</html>