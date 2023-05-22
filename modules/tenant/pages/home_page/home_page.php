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

        <!-- JavaScript BootStrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>

</html>