<?php


session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <div class="container">

        <section class="header">
            <div class="left">
                <a href="<?php if ($_SESSION['USER_TYPE'] == 2) {
                                echo '/cr_demo/modules/landlord/pages/home_page.php';
                            } else {
                                echo '/cr_demo/modules/tenant/pages/home_page/home_page.php';
                            } ?>">
                    <i class="bi bi-chevron-left"></i>
                </a>
                <h1>Chats</h1>
            </div>
            <div class="right">
                <div class="user-img">
                    <img src="/cr_demo/assets/images/accounts/user1/user1.png" alt="">
                </div>
            </div>

        </section>
        <section class="chats-container">
            <div class="content">
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Search">
                </div>
                <h4>Recents</h4>
                <a class="btn-link" href="./chat.php?recipient=1">
                    <div class="convo-container">
                        <div class="convo-user-img">
                            <img src="/cr_demo/assets/images/accounts/user1/user1.png" alt="">
                        </div>
                        <div class="convo-text">
                            <p class="title name"><?= $_SESSION['USER_TYPE'] == 2 ? 'Teddy Marc' : 'Jano' ?></p>
                            <p class="title">Received po. Thank you!</p>
                        </div>
                        <div class="convo-date">
                            <p class="smaller-text">4 m</p>
                            <div class="times">
                                <span class="smaller-text">1</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </div>
</body>

</html>