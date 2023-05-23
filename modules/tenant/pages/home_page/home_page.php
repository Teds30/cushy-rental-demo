<?php

session_start();


include '../../../../api/units/units.php';
$q_units = units_index();
$units = $q_units['data'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cushy Rental</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../../../css/index.css">

    <!-- Manage Unit -->
    <link rel="stylesheet" href="../../../../css/manage_units/index.css">

    <!-- Home Page CSS -->
    <link rel="stylesheet" href="../../../tenant/css/home_page/home_page.css">

    <!-- CSS BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="/cr_demo/css/layout/bottom_nav.css">

</head>

<body>

    <div class="main-container">

        <img src="../../../../assets/logo/cr_light.svg" alt="">
        <h2>CushyRental</h2>

        <div class="top_unit">

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <a href="#"><img src="../../logo/images.jpeg" class="d-block w-100" alt="..."></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img src="../../logo/images (4).jpeg" class="d-block w-100" alt="..."></a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"><img src="../../logo/images (5).jpeg" class="d-block w-100" alt="..."></a>
                    </div>

                </div>

            </div>

        </div>

        <div class="recommended-section">

            <p class="smaller-text">Recommended for you</p>

            <div class="recommended-lists">

                <?php foreach ($units as $unit) : ?>
                    <div class="recommended-lists-item">

                        <a href="../unit_details/unit_details.php?id=<?= $unit['id'] ?>">

                            <div class="image">
                                <img src="../../logo/images (4).jpeg" alt="">
                            </div>

                            <div class="title-price">

                                <h2 class="title">PHP <?= $unit['price'] ?></h2>
                                <p class="smaller-text"><?= $unit['name'] ?></p>

                                <div class="book-mark">

                                    <form method="POST" action="#">

                                        <button type="submit">

                                            <svg width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.5 23.3087V2.26711C0.5 1.28757 1.28705 0.5 2.25 0.5H15.75C16.7129 0.5 17.5 1.28757 17.5 2.26711V23.3087L9.25336 18.4615L9 18.3126L8.74664 18.4615L0.5 23.3087Z" fill="white" stroke="#03AF76" />
                                            </svg>

                                        </button>

                                    </form>

                                </div>

                            </div>
                            <div class="ratings">

                                <p class="smaller-text">RATING</p>

                                <div class="stars">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                </div>

                            </div>

                            <div class="ammenities-container">

                                <div class="ammenities">

                                    <div class="chip">
                                        <div class="chip-icon">
                                            <i class="bi bi-wifi"></i>
                                        </div>
                                        <span class="pre-title" style="font-size: 8px; font-family: 'Inter';">WiFi</span>
                                    </div>

                                </div>
                                <div class="more">

                                    <div class="chip">
                                        <span class="pre-title" style="font-size: 8px; font-family: 'Inter';">+ 3 More</span>
                                    </div>

                                </div>

                            </div>
                        </a>

                    </div>

                <?php endforeach ?>

            </div>

            <p class="smaller-text" style="text-align: center; padding: 10px;">No More Units Found</p>

        </div>

        <div class="b-nav-container">
            <a class="b-nav-item b-active link-reset">
                <div class="b-nav-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_1161_6296" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                            <path d="M24 0H0V24H24V0Z" fill="white" />
                        </mask>
                        <g mask="url(#mask0_1161_6296)">
                            <path d="M15.6775 23.0848C15.6775 23.0848 14.7562 23.0406 14.7562 22.0156V18.5951C14.7562 18.5951 14.7663 17.7545 13.7269 17.7545H10.2124C10.2124 17.7545 9.44489 17.7545 9.45389 18.5951V22.0156C9.45389 23.0656 8.5058 23.0848 8.5058 23.0848H6.51562C6.51562 23.0848 1.73438 22.7704 1.73438 18.5951V9.55387C1.73438 9.55387 1.72927 8.3849 4.15823 6.6906C4.26848 6.58851 10.867 1.65426 10.867 1.65426C10.867 1.65426 11.9905 0.782853 13.3185 1.65426C14.6466 2.52567 19.7423 6.6906 19.7423 6.6906C22.2144 8.38499 22.2656 9.55387 22.2656 9.55387V18.5951C22.2656 18.5951 22.265 23.0848 17.4844 23.0848H15.6775Z" fill="#03B077" />
                        </g>
                    </svg>

                </div>
                <div class="b-nav-label">Home</div>
            </a>
            <a class="b-nav-item link-reset" href="../../../chat/pages/chats_home.php">
                <div class="b-nav-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 1.50024C21.3978 1.50024 22 1.50024 22.5 2.00024C23 2.50024 23 3.10242 23 3.50024V15.5002C23 15.8981 23 16.5002 22.5 17.0002C22 17.5002 21.3978 17.5002 21 17.5002H17.25C16.7843 17.5002 16.3824 17.5323 15.9659 17.7406C15.5493 17.9489 15.2794 18.1277 15 18.5002L13.5 20.5002L12 22.5002L10.5 20.5002L9 18.5002C8.5 18.0002 8.36657 17.9489 7.95 17.7406C7.53343 17.5323 6.96574 17.5002 6.5 17.5002H3C2.60218 17.5002 2 17.5002 1.5 17.0002C1 16.5002 1 15.8981 1 15.5002V12.5002V9.50024V3.50024C1 3.10242 1 2.50024 1.5 2.00024C2 1.50024 2.5 1.50024 3 1.50024H12H21ZM3 0.500244C2.20435 0.500244 1.26261 0.737635 0.7 1.30024C0.137391 1.86285 0 2.70459 0 3.50024V15.5002C0 16.2959 0.137391 17.2376 0.7 17.8002C1.26261 18.3629 2.20435 18.5002 3 18.5002H6.75C6.98287 18.5002 7.21254 18.5545 7.42082 18.6586C7.6291 18.7627 7.81028 18.9139 7.95 19.1002L10.8 22.8997C10.9397 23.086 11.1209 23.2372 11.3292 23.3414C11.5375 23.4455 11.7671 23.4997 12 23.4997C12.2329 23.4997 12.4625 23.4455 12.6708 23.3414C12.8791 23.2372 13.0603 23.086 13.2 22.8997L16.05 19.1002C16.1897 18.9139 16.3709 18.7627 16.5792 18.6586C16.7875 18.5545 17.0171 18.5002 17.25 18.5002H21C21.7957 18.5002 22.6374 18.3629 23.2 17.8002C23.7626 17.2376 24 16.2959 24 15.5002V3.50024C24 2.70459 23.7626 1.86285 23.2 1.30025C22.6374 0.737637 21.7957 0.500244 21 0.500244H3Z" fill="#959CB0" />
                    </svg>

                </div>
                <div class="b-nav-label">Chats</div>
            </a>
            <a class="b-nav-item b-nav-item-search-container link-reset" href="/cr_demo/modules/tenant/pages/search/search.html">
                <div class="b-nav-icon b-nav-item-search">



                    <div class="curve">

                    </div>
                    <div class="search-container">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </span>
                    </div>


                </div>

                <div class="b-nav-label">Search</div>
            </a>
            <a class="b-nav-item link-reset" href="/cr_demo/modules/tenant/pages/notification/notification.php">
                <div class="b-nav-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 3.42857C9.5 2.78447 9.76339 2.16676 10.2322 1.71131C10.7011 1.25587 11.337 1 12 1C12.663 1 13.2989 1.25587 13.7678 1.71131C14.2366 2.16676 14.5 2.78447 14.5 3.42857C15.9355 4.08796 17.1593 5.1144 18.0401 6.39786C18.9209 7.68133 19.4255 9.17345 19.5 10.7143V14.3571C19.5941 15.1121 19.8693 15.835 20.3035 16.4677C20.7377 17.1004 21.3188 17.6253 22 18H2C2.68117 17.6253 3.26226 17.1004 3.69648 16.4677C4.13071 15.835 4.40593 15.1121 4.5 14.3571V10.7143C4.57445 9.17345 5.07913 7.68133 5.95994 6.39786C6.84075 5.1144 8.06449 4.08796 9.5 3.42857Z" stroke="#959CB0" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 18V19.25C8 20.2446 8.42143 21.1984 9.17157 21.9017C9.92172 22.6049 10.9391 23 12 23C13.0609 23 14.0783 22.6049 14.8284 21.9017C15.5786 21.1984 16 20.2446 16 19.25V18" stroke="#959CB0" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                </div>
                <div class="b-nav-label">Notification</div>
            </a>
            <a class="b-nav-item link-reset" href="/cr_demo/modules/landlord/pages/profile_page.php">
                <div class="b-nav-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2221_3853)">
                            <mask id="mask0_2221_3853" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                <path d="M24 0H0V24H24V0Z" fill="white" />
                            </mask>
                            <g mask="url(#mask0_2221_3853)">
                                <path d="M12.1396 22.7772C11.9614 22.7772 11.7857 22.7759 11.6167 22.7735C10.4735 22.7566 9.33202 22.6759 8.19775 22.5318C7.29232 22.4165 6.39672 22.2612 5.53572 22.07C4.76983 21.9 4.17359 21.7325 3.80829 21.6219C3.41267 21.5021 3.19507 21.4214 3.19301 21.4206C3.1216 21.3989 3.05208 21.3715 2.98512 21.3385C2.81934 21.2589 2.66544 21.1566 2.52785 21.0345C2.33537 20.8636 2.17977 20.6553 2.07054 20.4222C1.92773 20.1059 1.85673 19.7619 1.86265 19.415C1.8814 19.1083 2.01053 18.8277 2.24702 18.5809C2.46849 18.3611 2.72816 18.1835 3.01329 18.0568C3.2554 17.9448 3.50664 17.8539 3.76428 17.7849C3.96631 17.7302 4.10177 17.7073 4.1029 17.7071C4.11194 17.7057 5.02511 17.5685 6.47908 17.4329C7.33267 17.3532 8.20286 17.2899 9.0655 17.2444C10.1436 17.1875 11.2127 17.1587 12.2429 17.1587C14.8657 17.1587 17.2564 17.3432 19.3487 17.7072C19.8172 17.8211 20.2764 17.9708 20.7221 18.155C21.1226 18.3243 21.444 18.5047 21.6768 18.6913C21.968 18.9246 22.1215 19.1681 22.1329 19.4152C22.1359 19.4804 22.1397 19.5452 22.1433 19.6078C22.1582 19.7951 22.1617 19.9831 22.1538 20.1709C22.1468 20.3482 22.1046 20.5223 22.0295 20.6831C21.8551 21.0423 21.4797 21.3142 20.8483 21.539C20.4256 21.764 19.8433 21.9639 19.1177 22.1338C18.369 22.3024 17.6116 22.4296 16.8489 22.5149C16.0918 22.6045 15.2688 22.6727 14.4026 22.7177C13.6498 22.7568 12.8674 22.7775 12.14 22.7775L12.1396 22.7772ZM6.95328 18.214C5.71892 18.3022 4.9489 18.3917 4.9413 18.3926C4.60968 18.4412 4.28349 18.5216 3.96724 18.6326C3.72107 18.7149 3.48978 18.8363 3.2823 18.9922C3.07089 19.1615 2.95526 19.3541 2.93867 19.5644C2.93867 20.1473 3.26027 20.4664 3.53009 20.6314C3.71181 20.741 3.91235 20.8159 4.12146 20.8521C4.12915 20.8545 4.90394 21.0962 6.21878 21.3418C8.01343 21.6722 9.83305 21.8484 11.6577 21.8686C11.7984 21.8701 11.94 21.8709 12.0785 21.8709C14.7451 21.8709 17.2297 21.5743 19.6744 20.9642C20.2902 20.7106 20.6128 20.559 20.7803 20.3841C20.9468 20.2102 20.9654 20.0122 20.9991 19.6529L21.0003 19.6402C20.9996 19.6285 20.9994 19.6168 20.9992 19.6052C21.0027 19.5568 20.9933 19.5084 20.9718 19.465C20.9502 19.4215 20.9175 19.3846 20.8768 19.3582C20.7988 19.262 20.5826 19.134 20.4028 19.0499C20.0479 18.8828 19.68 18.7449 19.3028 18.6374C18.971 18.5381 18.632 18.4649 18.2889 18.4184C16.3846 18.1643 14.2308 18.0354 11.8873 18.0355C9.87494 18.0354 8.09351 18.1325 6.95328 18.214ZM10.5725 15.6928C10.1096 15.598 9.65724 15.4575 9.22202 15.2735C8.79413 15.0923 8.38479 14.8702 7.99971 14.6101C7.61758 14.3517 7.26098 14.0575 6.93476 13.7314C6.60865 13.4051 6.31442 13.0485 6.05608 12.6664C5.79599 12.2813 5.57379 11.872 5.39261 11.444C5.20859 11.0087 5.06815 10.5563 4.97332 10.0933C4.87599 9.61603 4.827 9.13017 4.82711 8.64308C4.827 8.15597 4.87599 7.6701 4.97332 7.19281C5.06815 6.72984 5.2086 6.2774 5.39261 5.84211C5.57378 5.41419 5.79598 5.00483 6.05608 4.61975C6.31442 4.23762 6.60865 3.88101 6.93476 3.5548C7.26097 3.22867 7.61757 2.93443 7.99971 2.67608C8.38478 2.41602 8.79413 2.19386 9.22202 2.01271C9.65733 1.82871 10.1098 1.68826 10.5728 1.59341C11.05 1.49609 11.5358 1.44711 12.0228 1.4472C12.5099 1.44708 12.9958 1.49604 13.473 1.59336C13.936 1.6882 14.3885 1.82865 14.8238 2.01266C15.2517 2.19381 15.6611 2.41599 16.0461 2.67608C16.4283 2.93443 16.7849 3.22867 17.1111 3.5548C17.4372 3.881 17.7314 4.2376 17.9898 4.61975C18.2499 5.00483 18.4721 5.41419 18.6532 5.84211C18.8372 6.2774 18.9777 6.72984 19.0725 7.19281C19.1698 7.6701 19.2188 8.15597 19.2187 8.64308C19.2188 9.13017 19.1698 9.61603 19.0725 10.0933C18.9777 10.5563 18.8372 11.0087 18.6532 11.444C18.472 11.872 18.2499 12.2813 17.9898 12.6664C17.7314 13.0486 17.4372 13.4052 17.1111 13.7314C16.7849 14.0575 16.4283 14.3517 16.0461 14.6101C15.661 14.8702 15.2517 15.0924 14.8238 15.2735C14.3885 15.4576 13.936 15.598 13.473 15.6928C12.9958 15.7902 12.5099 15.8392 12.0228 15.839C11.5357 15.8392 11.0499 15.7902 10.5726 15.6928H10.5725ZM5.90955 8.64313C5.9114 10.2639 6.55607 11.8177 7.70213 12.9638C8.84819 14.1098 10.402 14.7544 12.0228 14.7562C15.3935 14.7562 18.1359 12.014 18.1359 8.64308C18.1341 7.02235 17.4894 5.46853 16.3434 4.3225C15.1974 3.17648 13.6435 2.53184 12.0228 2.53002C10.4021 2.53184 8.84822 3.17648 7.70218 4.32252C6.55614 5.46855 5.91148 7.02238 5.90964 8.64313H5.90955Z" fill="#959CB0" />
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_2221_3853">
                                <rect width="24" height="24" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>



                </div>
                <div class="b-nav-label">Profile</div>
            </a>
        </div>
        <!-- JavaScript BootStrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>

</html>