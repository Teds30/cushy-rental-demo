<?php

session_start();

$id = $_GET['id'];

include '../../../../api/units/units.php';
$q_unit = units_show($id);
$unit = $q_unit['data'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIT DETAILS</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../../../../css/index.css">

    <!-- Manage Unit -->
    <link rel="stylesheet" href="../../../../css/manage_units/index.css">

    <!-- UNIT DETAILS CSS -->
    <link rel="stylesheet" href="../../css/unit_details/unit_details.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <nav class="nav-top">

        <div class="nav-back">

            <a href="/cr_demo/modules/tenant/pages/units_after_search/units_after_search.php">
                <i class="bi bi-chevron-left"></i>
            </a>

        </div>

        <div class="nav-title">

            <h2 class="title" style="margin: 0 0 0 0"><?= $unit['name'] ?></h2>

        </div>

    </nav>

    <div class="main-content">

        <div class="content-photo">

            <div id="carouselExample" class="carousel slide">

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

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>

            <div class="book-marks">

                <span>

                    <svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.5 23.1295V2.25C0.5 1.28349 1.28349 0.5 2.25 0.5H15.75C16.7165 0.5 17.5 1.28349 17.5 2.25V23.1295L9.25194 18.3181L9 18.1711L8.74806 18.3181L0.5 23.1295Z" fill="white" stroke="#03AF76" />
                    </svg>

                </span>

            </div>

            <div class="photo-count">

                <div class="chip">

                    <div class="chip-icon">

                        <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.80955 0.875004L1.81083 0.875L10.5879 0.875002C11.0527 0.876349 11.498 1.06102 11.8266 1.38868C12.1552 1.71634 12.3404 2.16035 12.3418 2.62373L12.3418 2.625L12.3418 3.0625H11.4642V2.6256C11.4634 2.39365 11.3706 2.17143 11.2061 2.0074C11.0415 1.84335 10.8186 1.75083 10.5859 1.75H1.81153C1.57886 1.75083 1.35594 1.84335 1.1914 2.0074C1.02687 2.17145 0.934072 2.39371 0.933245 2.6257V9.6243C0.934072 9.85629 1.02687 10.0786 1.1914 10.2426C1.35595 10.4067 1.57889 10.4992 1.81158 10.5H2.24962V11.375H1.81083L1.80955 11.375C1.34481 11.3737 0.899484 11.189 0.570858 10.8613C0.242233 10.5337 0.0570155 10.0896 0.0556659 9.62627L0.0556641 9.625V2.62373C0.0570137 2.16035 0.242233 1.71634 0.570858 1.38868C0.899483 1.06102 1.34481 0.876349 1.80955 0.875004Z" fill="var(--bg-layer1)" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.95004 3.9375C3.49581 3.9375 3.12758 4.30464 3.12758 4.75754V11.43C3.12758 11.8829 3.49581 12.25 3.95004 12.25H12.3973C12.8515 12.25 13.2198 11.8829 13.2198 11.43V4.75754C13.2198 4.30464 12.8515 3.9375 12.3973 3.9375H3.95004ZM2.25 4.75754C2.25 3.82139 3.01113 3.0625 3.95004 3.0625H12.3973C13.3362 3.0625 14.0973 3.8214 14.0973 4.75754V11.43C14.0973 12.3661 13.3362 13.125 12.3973 13.125H3.95004C3.01113 13.125 2.25 12.3661 2.25 11.43V4.75754Z" fill="var(--bg-layer1)" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2826 5.60791C10.056 5.60791 9.87758 5.78899 9.87758 6.00576C9.87758 6.22253 10.056 6.40361 10.2826 6.40361C10.5093 6.40361 10.6877 6.22254 10.6877 6.00576C10.6877 5.78899 10.5093 5.60791 10.2826 5.60791ZM9 6.00576C9 5.29983 9.57723 4.73291 10.2826 4.73291C10.988 4.73291 11.5653 5.29983 11.5653 6.00576C11.5653 6.71169 10.988 7.27861 10.2826 7.27861C9.57723 7.27861 9 6.71169 9 6.00576Z" fill="var(--bg-layer1)" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.60252 7.45289C5.84709 7.23814 6.16426 7.1239 6.49002 7.13322C6.81577 7.14254 7.12585 7.27472 7.35767 7.50309L7.35819 7.5036L9.65289 9.7716L10.2729 9.15785L10.274 9.15683C10.5009 8.93372 10.8026 8.80232 11.121 8.78801C11.4393 8.77369 11.7517 8.87747 11.9978 9.07931L11.9988 9.08011L13.9383 10.68C14.125 10.834 14.1511 11.1098 13.9966 11.296C13.8422 11.4821 13.5656 11.5082 13.3788 11.3542L11.4404 9.75509C11.4402 9.75498 11.4405 9.7552 11.4404 9.75509C11.3619 9.69088 11.262 9.65756 11.1605 9.66212C11.0591 9.66668 10.963 9.70847 10.8906 9.77944C10.8905 9.77957 10.8907 9.77931 10.8906 9.77944L7.63897 12.998C7.46699 13.1682 7.18916 13.1672 7.01843 12.9957C6.8477 12.8243 6.84871 12.5473 7.02069 12.377L9.03007 10.3881L6.74088 8.12553C6.74081 8.12545 6.74096 8.1256 6.74088 8.12553C6.66716 8.05301 6.56838 8.01082 6.46485 8.00786C6.36125 8.0049 6.26037 8.04122 6.18258 8.1095C6.18255 8.10952 6.1826 8.10948 6.18258 8.1095L2.9791 10.9276C2.79738 11.0875 2.5201 11.0702 2.35977 10.889C2.19944 10.7078 2.21677 10.4313 2.39849 10.2715L5.60252 7.45289Z" fill="var(--bg-layer1)" />
                            <path d="M0.555664 0.5H13.597V6.97935C13.597 10.5806 10.6776 13.5 7.07631 13.5C3.47506 13.5 0.555664 10.5806 0.555664 6.97935V0.5Z" stroke="var(--bg-layer1)" />
                        </svg>

                    </div>

                    <span class="pre-text" style="font-weight: 400; color: var(--bg-layer1);">14</span>

                </div>

            </div>

        </div>

        <div class="content">

            <div class="content-title">

                <div class="unit-title">

                    <h2 class="title">PHP <?= $unit['price'] ?> <span class="pre-title" style="color: var(--fc-body-light);">/ MONTH</span></h2>

                </div>

                <div class="unit-details">

                    <!-- <h2 class="smaller-text">2 Bedrooms Boarding House Fully Furnished for rent in Legazpi City</h2> -->
                    <h2 class="smaller-text"><?= $unit['details'] ?></h2>

                </div>

                <div class="rating">

                    <div class="stars">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                    </div>

                    <span class="pre-title" style="font-size: 14px; color: var(--fc-body-light); font-family: 'Inter';">4/5 <span class="pre-title" style="color: var(--border-color);">|</span> 3 Slots</span>

                </div>

            </div>

            <div class="unit-view-map">

                <div class="unit-address">

                    <div class="icon">

                        <i class="bi bi-geo-alt" style="color: var(--fc-body);"></i>

                    </div>

                    <div class="address">

                        <h2 class="smaller-text" style="margin: 0 0 0 0; font-family: 'Inter';"><?= $unit['address'] ?></h2>

                    </div>

                </div>

                <div class="map-btn">

                    <a href="#" style="text-decoration: none;"><span class="smaller-text" style="font-size: 14px; color: var(--accent); font-family: 'Inter';">View Map</span></a>

                </div>

            </div>

            <div class="target-gender">

                <div class="target-gender-title">

                    <h2 class="title">Target Tenant</h2>

                </div>

                <div class="target-gender-icon">

                    <div class="chip">
                        <div class="chip-icon">
                            <span>

                                <svg width="8" height="20" viewBox="0 0 8 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 0C5.1307 0 6.25 1.1193 6.25 2.5C6.25 3.8807 5.1307 5 3.75 5C2.3693 5 1.25 3.8807 1.25 2.5C1.25 1.1193 2.3693 0 3.75 0ZM5.625 5.625H5.18125C4.2941 6.03293 3.24414 6.05055 2.31875 5.625H1.875C0.839453 5.625 0 6.46445 0 7.5V12.8125C0 13.3303 0.419727 13.75 0.9375 13.75H1.5625V19.0625C1.5625 19.5803 1.98223 20 2.5 20H5C5.51777 20 5.9375 19.5803 5.9375 19.0625V13.75H6.5625C7.08027 13.75 7.5 13.3303 7.5 12.8125V7.5C7.5 6.46445 6.66055 5.625 5.625 5.625Z" fill="#8A93A6" />
                                </svg>

                            </span>

                            <span>

                                <svg width="8" height="20" viewBox="0 0 8 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 0C5.1307 0 6.25 1.1193 6.25 2.5C6.25 3.8807 5.1307 5 3.75 5C2.3693 5 1.25 3.8807 1.25 2.5C1.25 1.1193 2.3693 0 3.75 0ZM5.625 5.625H5.18125C4.2941 6.03293 3.24414 6.05055 2.31875 5.625H1.875C0.839453 5.625 0 6.46445 0 7.5V12.8125C0 13.3303 0.419727 13.75 0.9375 13.75H1.5625V19.0625C1.5625 19.5803 1.98223 20 2.5 20H5C5.51777 20 5.9375 19.5803 5.9375 19.0625V13.75H6.5625C7.08027 13.75 7.5 13.3303 7.5 12.8125V7.5C7.5 6.46445 6.66055 5.625 5.625 5.625Z" fill="#8A93A6" />
                                </svg>

                            </span>
                        </div>

                        <span class="pre-title" style="font-size: 12px; font-family: 'Inter';">All</span>

                    </div>

                </div>

            </div>

            <div class="description">

                <div class="description-title">

                    <h2 class="title">Description</h2>

                </div>

                <div class="description-details">

                    <p><?= $unit['details'] ?></p>

                </div>

                <div class="description-view-more">

                    <button class="link" style="color: var(--accent);">Read More</button>

                </div>

            </div>

            <div class="unit-reviews">

                <div class="unit-reviews-title">

                    <h2 class="title">Unit Ratings</h2>

                </div>

                <div class="review-list">


                    <div class="reviews">

                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <a href="#">

                                        <div class="user">

                                            <div class="user-photo">

                                                <img src="../../logo/images (4).jpeg" style="height: 35px; width: 35pxs;" alt="">

                                            </div>

                                            <div class="user-name">

                                                <h2 class="title" style="margin: 0 0 0 0;">John Lenon</h2>
                                                <h2 class="smaller-text">Yesterday</h2>

                                            </div>

                                        </div>

                                        <div class="rating">

                                            <div class="stars">

                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>

                                            </div>

                                            <div class="rate">

                                                <p class="smaller-text" style="margin: 0 0 0 0;">5/5</p>

                                            </div>

                                        </div>

                                        <div class="user-review">

                                            <div class="review">

                                                <p class="smaller-text" style="margin: 0 0 0 0;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maximmollitia, molestiae quas vel sint commodi repudiandaeasdasdasdasdasdasdasdasda...</p>

                                            </div>

                                        </div>

                                    </a>
                                </div>

                                <div class="carousel-item">
                                    <a href="#">

                                        <div class="user">

                                            <div class="user-photo">

                                                <img src="../../logo/images (4).jpeg" style="height: 35px; width: 35pxs;" alt="">

                                            </div>

                                            <div class="user-name">

                                                <h2 class="title" style="margin: 0 0 0 0;">John Otilla</h2>
                                                <h2 class="smaller-text">Yesterday</h2>

                                            </div>

                                        </div>

                                        <div class="rating">

                                            <div class="stars">

                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>

                                            </div>

                                            <div class="rate">

                                                <p class="smaller-text" style="margin: 0 0 0 0;">5/5</p>

                                            </div>

                                        </div>

                                        <div class="user-review">

                                            <div class="review">

                                                <p class="smaller-text" style="margin: 0 0 0 0;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maximmollitia, molestiae quas vel sint commodi repudiandaeasdasdasdasdasdasdasdasda...</p>

                                            </div>

                                        </div>

                                    </a>
                                </div>

                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="review-more">

                <button class="btn-fill btn-outlined" onclick="func_reviews(2)">
                    Read all reviews
                </button>

            </div>

            <div class="ammenities">

                <div class="ammenities-title">

                    <h2 class="title">Amenities</h2>

                </div>

                <div class="ammenities-list">

                    <div class="chip">

                        <div class="chip-icon">

                            <i class="bi bi-wifi"></i>

                        </div>

                        <span class="smaller-text">WiFi</span>

                    </div>

                </div>

            </div>

            <div class="facilities">

                <div class="facilities-title">

                    <h2 class="title">Facilities</h2>

                </div>

                <div class="facilities-list">

                    <div class="chip">

                        <div class="chip-icon">

                            <span>

                                <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.375 1.875C14.7188 1.875 15 1.59375 15 1.25V0.625C15 0.28125 14.7188 0 14.375 0H0.625C0.28125 0 0 0.28125 0 0.625V1.25C0 1.59375 0.28125 1.875 0.625 1.875H1.25V7.99609C0.460938 8.39062 0 8.86328 0 9.375C0 12 1.35156 14.3047 3.39063 15.6445L2.55469 18.3867C2.30859 19.1875 2.91016 20 3.75 20H11.25C12.0898 20 12.6914 19.1875 12.4453 18.3867L11.6094 15.6445C13.6484 14.3047 15 12 15 9.375C15 8.86328 14.5391 8.39062 13.75 7.99609V1.875H14.375ZM3.125 2.8125C3.125 2.64062 3.26563 2.5 3.4375 2.5H5.3125C5.48438 2.5 5.625 2.64062 5.625 2.8125V3.4375C5.625 3.60938 5.48438 3.75 5.3125 3.75H3.4375C3.26563 3.75 3.125 3.60938 3.125 3.4375V2.8125ZM7.5 10.625C4.48828 10.625 2.04688 10.0664 2.04688 9.375C2.04688 8.68359 4.48828 8.125 7.5 8.125C10.5117 8.125 12.9531 8.68359 12.9531 9.375C12.9531 10.0664 10.5117 10.625 7.5 10.625Z" fill="currentColor" />
                                </svg>

                            </span>

                        </div>

                        <span class="smaller-text">Confort Room</span>

                    </div>

                </div>

            </div>

            <div class="unit-rules">

                <div class="unit-rules-title">

                    <h2 class="title">Unit Rules</h2>

                </div>

                <div class="facilities-list">

                    <div class="chip">

                        <div class="chip-icon">

                            <span>

                                <svg width="8" height="20" viewBox="0 0 8 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 0C5.1307 0 6.25 1.1193 6.25 2.5C6.25 3.8807 5.1307 5 3.75 5C2.3693 5 1.25 3.8807 1.25 2.5C1.25 1.1193 2.3693 0 3.75 0ZM5.625 5.625H5.18125C4.2941 6.03293 3.24414 6.05055 2.31875 5.625H1.875C0.839453 5.625 0 6.46445 0 7.5V12.8125C0 13.3303 0.419727 13.75 0.9375 13.75H1.5625V19.0625C1.5625 19.5803 1.98223 20 2.5 20H5C5.51777 20 5.9375 19.5803 5.9375 19.0625V13.75H6.5625C7.08027 13.75 7.5 13.3303 7.5 12.8125V7.5C7.5 6.46445 6.66055 5.625 5.625 5.625Z" fill="currentColor" />
                                </svg>


                            </span>

                        </div>

                        <span class="smaller-text">Not Allowed</span>

                    </div>

                </div>

            </div>

            <div class="payment-inclusions">

                <div class="payment-inclusions-title">

                    <h2 class="title">Unit Inclusions</h2>

                </div>

                <div class="payment-inclusions-list">

                    <div class="chip">
                        <div class="chip-icon">
                            <span>

                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.1172 0.282593C14.0879 0.282593 14.0469 0.282593 14.0117 0.289624C13.7422 0.339429 13.4199 0.588452 13.209 1.1574C12.9863 1.72576 12.9395 2.53611 13.1328 3.40388C13.332 4.26111 13.7422 4.99998 14.1992 5.45115C14.6445 5.90232 15.0488 6.02537 15.3184 5.97849C15.5996 5.93748 15.9102 5.67966 16.1211 5.11716C16.3438 4.55232 16.4023 3.73084 16.2031 2.87009C15.998 2.00291 15.5938 1.27107 15.1367 0.822827C14.75 0.42439 14.3926 0.282593 14.1172 0.282593ZM20.8789 7.87107C20.2344 7.88865 19.4199 8.05857 18.6289 8.39255C17.7148 8.79099 17.0117 9.32419 16.625 9.8281C16.2383 10.3144 16.2031 10.6836 16.3262 10.9004C16.4551 11.1172 16.8125 11.3222 17.498 11.3515C18.1836 11.3926 19.1094 11.2226 20.0176 10.8359C20.9258 10.4433 21.6406 9.90427 22.0273 9.41209C22.4141 8.92576 22.4434 8.5449 22.3203 8.3281C22.1973 8.10544 21.834 7.91209 21.1484 7.88865C21.0547 7.87107 20.9727 7.87107 20.8789 7.87107ZM12.8926 13.3144C12.5059 13.3203 12.1543 13.3672 11.8379 13.4492C11.1465 13.625 10.748 13.9414 10.6191 14.3222C10.4727 14.7031 10.6191 15.1601 11.0762 15.6523C11.5566 16.1328 12.3477 16.5957 13.332 16.8535C14.3105 17.1113 15.2539 17.1054 15.957 16.9179C16.666 16.7363 17.0645 16.414 17.1934 16.039C17.3281 15.6582 17.1934 15.207 16.7188 14.709C16.2559 14.2285 15.4648 13.7656 14.4805 13.5136C13.9238 13.3672 13.3789 13.3086 12.8926 13.3144ZM22.3086 16.7187L18.6875 18.4355C18.9336 18.4472 19.5488 18.4648 19.5488 18.4648L19.9355 18.9746L23.1406 17.3047L22.3086 16.7187ZM19.1152 16.7246L15.752 18.3183C16.0742 18.3359 16.8359 18.3476 17.1406 18.3652L20.0586 16.9824L19.1152 16.7246ZM24.541 17.3574L20.4102 19.5488L21.2598 20.6445L25.625 18.0312L24.541 17.3574ZM8.20508 17.8906C8.02766 17.8903 7.85076 17.9099 7.67773 17.9492C3.48828 18.916 1.01562 18.998 0.283203 18.998H0.0546875V25.2969C0.0546875 25.2969 0.734375 25.1972 1.86523 25.1914C4.05078 25.1914 7.90039 25.5664 11.6504 27.7578C11.8496 27.8808 12.2773 27.9277 12.8105 27.9277C14.2344 27.9277 16.3965 27.5879 16.8945 27.4004C21.9102 25.5195 27.9453 20.3574 27.9453 20.3574L26.041 18.6933C26.041 18.6933 21.3652 21.6758 20.7734 21.9629C15.4355 24.582 11.1113 22.9472 11.1113 22.9472C11.1113 22.9472 18.1367 23.123 20.3926 21.3476L19.0684 19.3554C19.0684 19.3554 14.2168 19.2207 12.4883 18.9922C11.5859 18.875 9.63477 17.8906 8.20508 17.8906Z" fill="currentColor" />
                                </svg>


                            </span>

                        </div>

                        <span class="pre-title" style="font-size: 12px; font-family: 'Inter';">Advance Deposit
                            1 Month/s</span>

                    </div>

                </div>

            </div>

            <div class="similar-units">

                <div class="similar-units-title">

                    <h2 class="title">Similar Units</h2>

                </div>

                <div class="similar-units-list">

                    <div class="units">

                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">

                                <div class="carousel-item active">

                                    <a href="#">

                                        <div class="recommended-lists">

                                            <div class="recommended-lists-item">

                                                <div class="image">
                                                    <img src="../../logo/images (4).jpeg" alt="">

                                                    <div class="book-mark">

                                                        <form action="">

                                                            <span>

                                                                <svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0.5 23.1295V2.25C0.5 1.28349 1.28349 0.5 2.25 0.5H15.75C16.7165 0.5 17.5 1.28349 17.5 2.25V23.1295L9.25194 18.3181L9 18.1711L8.74806 18.3181L0.5 23.1295Z" fill="white" stroke="#03AF76" />
                                                                </svg>


                                                            </span>

                                                        </form>

                                                    </div>

                                                </div>

                                                <div class="title-price">

                                                    <h2 class="title">PHP 5,0001</h2>
                                                    <p class="smaller-text">Bentong Boarding House</p>

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

                                                    <div class="ammenity">

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

                                            </div>

                                        </div>

                                    </a>

                                </div>

                                <div class="carousel-item item">

                                    <a href="#">

                                        <div class="recommended-lists">

                                            <div class="recommended-lists-item">

                                                <div class="image">
                                                    <img src="../../logo/images (4).jpeg" alt="">

                                                    <div class="book-mark">

                                                        <form action="">

                                                            <span>

                                                                <svg width="18" height="24" viewBox="0 0 18 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0.5 23.1295V2.25C0.5 1.28349 1.28349 0.5 2.25 0.5H15.75C16.7165 0.5 17.5 1.28349 17.5 2.25V23.1295L9.25194 18.3181L9 18.1711L8.74806 18.3181L0.5 23.1295Z" fill="white" stroke="#03AF76" />
                                                                </svg>


                                                            </span>

                                                        </form>

                                                    </div>

                                                </div>

                                                <div class="title-price">

                                                    <h2 class="title">PHP 5,0002</h2>
                                                    <p class="smaller-text">Bentong Boarding House</p>

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

                                                    <div class="ammenity">

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

                                            </div>

                                        </div>

                                    </a>

                                </div>

                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="reviews-section" id="reviews-section">

            <nav class="nav">

                <div class="nav-back">

                    <button onclick="func_reviews(1)">

                        <svg width="98" height="4" viewBox="0 0 98 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="1.82129" x2="98" y2="1.82129" stroke="#03B077" stroke-width="3" />
                        </svg>


                    </button>

                </div>

                <div class="nav-title">

                    <h2 class="title" style="margin: 0 0 0 0">Reviews</h2>

                </div>

            </nav>

            <div class="main-reviews">

                <div class="reviews-filter">

                    <div class="sort-by">

                        <p class="pre-title" style="color: var(--fc-body);">Sort by:</p>

                    </div>

                    <div class="filter-icons">

                        <form>

                            <button>

                                <div class="chip">

                                    <span class="pre-title" style="font-size: 12px; font-family: 'Inter';">All</span>

                                </div>

                            </button>

                        </form>

                        <form>

                            <button>

                                <div class="chip">

                                    <span class="pre-title" style="font-size: 12px; font-family: 'Inter';">5.0</span>

                                </div>

                            </button>

                        </form>

                        <form>

                            <button>

                                <div class="chip">

                                    <span class="pre-title" style="font-size: 12px; font-family: 'Inter';">4.0</span>

                                </div>

                            </button>

                        </form>

                        <form>

                            <button>

                                <div class="chip">

                                    <span class="pre-title" style="font-size: 12px; font-family: 'Inter';">3.0</span>

                                </div>

                            </button>

                        </form>

                        <form>

                            <button>

                                <div class="chip">

                                    <span class="pre-title" style="font-size: 12px; font-family: 'Inter';">2.0</span>

                                </div>

                            </button>

                        </form>

                        <form>

                            <button>

                                <div class="chip">

                                    <span class="pre-title" style="font-size: 12px; font-family: 'Inter';">1.0</span>

                                </div>

                            </button>

                        </form>

                    </div>

                </div>

                <div class="reviews-comments">

                    <div class="comments-item">

                        <div class="users-rate">

                            <div class="user-photo">

                                <img src="../../logo/images (5).jpeg" alt="">

                            </div>

                            <div class="user-name">

                                <h2 class="title">John C. Otilla</h2>

                                <div class="rate">

                                    <div class="stars">

                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>

                                    </div>

                                    <p class="pre-title" style="margin: 0 0 0 0">5.0</p>

                                </div>

                            </div>

                        </div>

                        <div class="comments">

                            <p class="smaller-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi repudiandae dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi repudiandae</p>

                        </div>

                        <div class="rates-to-all">

                            <div class="types">

                                <div class="environemt">

                                    <p class="pre-title" style="font-weight: 500; margin: 0 0 0 0;;">Environemt</p>

                                </div>

                                <div class="stars">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                </div>

                            </div>

                            <div class="types">

                                <div class="environemt">

                                    <p class="pre-title" style="font-weight: 500; margin: 0 0 0 0;;">Boarding House</p>

                                </div>

                                <div class="stars">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                </div>

                            </div>

                            <div class="types">

                                <div class="environemt">

                                    <p class="pre-title" style="font-weight: 500; margin: 0 0 0 0;;">Landlord</p>

                                </div>

                                <div class="stars">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="comments-item">

                        <div class="users-rate">

                            <div class="user-photo">

                                <img src="../../logo/images (5).jpeg" alt="">

                            </div>

                            <div class="user-name">

                                <h2 class="title">John C. Otilla</h2>

                                <div class="rate">

                                    <div class="stars">

                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>

                                    </div>

                                    <p class="pre-title" style="margin: 0 0 0 0">5.0</p>

                                </div>

                            </div>

                        </div>

                        <div class="comments">

                            <p class="smaller-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi repudiandae dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi repudiandae</p>

                        </div>

                        <div class="rates-to-all">

                            <div class="types">

                                <div class="environemt">

                                    <p class="pre-title" style="font-weight: 500; margin: 0 0 0 0;;">Environemt</p>

                                </div>

                                <div class="stars">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                </div>

                            </div>

                            <div class="types">

                                <div class="environemt">

                                    <p class="pre-title" style="font-weight: 500; margin: 0 0 0 0;;">Boarding House</p>

                                </div>

                                <div class="stars">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                </div>

                            </div>

                            <div class="types">

                                <div class="environemt">

                                    <p class="pre-title" style="font-weight: 500; margin: 0 0 0 0;;">Landlord</p>

                                </div>

                                <div class="stars">

                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <nav class="nav-bottom">

        <a href="#">

            <div class="chip call">
                <div class="chip-icon">
                    <span>

                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0257 19.9998C15.1541 19.9998 13.9297 19.6846 12.0963 18.6605C9.86683 17.4105 8.14237 16.2565 5.92495 14.0453C3.78701 11.9091 2.74662 10.5261 1.29052 7.87691C-0.354456 4.88581 -0.074042 3.31793 0.239415 2.64783C0.612706 1.84693 1.16371 1.36791 1.87591 0.892454C2.28043 0.627466 2.70852 0.400313 3.15474 0.213874C3.19939 0.194677 3.24092 0.176374 3.27798 0.159856C3.49901 0.0603008 3.8339 -0.0901474 4.25809 0.0705688C4.54119 0.17682 4.79392 0.394233 5.18953 0.784863C6.00086 1.58487 7.10957 3.36659 7.51858 4.2416C7.79319 4.83134 7.97493 5.22063 7.97537 5.65724C7.97537 6.16841 7.71818 6.56261 7.40606 6.98806C7.34756 7.06797 7.28952 7.14431 7.23325 7.21842C6.89345 7.66486 6.81888 7.79388 6.868 8.02424C6.96758 8.48719 7.71014 9.86533 8.93048 11.0828C10.1508 12.3002 11.4895 12.9957 11.9543 13.0948C12.1945 13.1462 12.3263 13.0685 12.7871 12.7167C12.8532 12.6663 12.921 12.614 12.992 12.5618C13.468 12.2078 13.844 11.9573 14.3432 11.9573H14.3459C14.7803 11.9573 15.1523 12.1457 15.7685 12.4564C16.5722 12.8618 18.4079 13.956 19.2129 14.7681C19.6045 15.1627 19.8229 15.4145 19.9296 15.6971C20.0903 16.1225 19.939 16.456 19.8403 16.6793C19.8238 16.7163 19.8055 16.7569 19.7863 16.802C19.5983 17.2474 19.3698 17.6745 19.1035 18.0779C18.6289 18.7878 18.148 19.3373 17.3451 19.711C16.9329 19.9059 16.4817 20.0047 16.0257 19.9998Z" fill="#03AF76" />
                        </svg>


                    </span>

                </div>

                <span class="smaler-text" style="font-size: 14px; font-family: 'Inter'; color: var(--accent)">Call Now</span>

            </div>


        </a>

        <a href="../../../chat/pages/chat.php">

            <div class="chip btn-primary call">

                <span class="smaler-text" style="font-size: 14px; font-family: 'Inter'; color: white">Inquire Now</span>

            </div>


        </a>

    </nav>

    <!-- JavaScript BootStrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <script>
        const func_reviews = (num) => {

            if (num == 2) {

                document.getElementById("reviews-section").style.display = "flex";

            } else {

                document.getElementById("reviews-section").style.display = "none";

            }

        }
    </script>

</body>

</html>