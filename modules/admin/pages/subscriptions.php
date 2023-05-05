<!DOCTYPE html>
<?php

$selected = 'subscriptions';


include '.././../../functions/path.php';

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Facilities</title>
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

                    <h1>Manage Subscriptions</h1>
                    <!-- <a class="btn btn-primary btn-link" href="add_attribute.php?attribute=facility">
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg></span>
                        Add new
                    </a> -->
                </div>


                <div class="subscriptions">
                    <div class="subcription-card">
                        <div class="subscription subscription-bronze">
                            <div class="subscription-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="currentColor" />
                                    <path d="M27.0919 27.5763L24.7553 34.0019C24.6981 34.1561 24.595 34.2891 24.46 34.383C24.325 34.4769 24.1644 34.5272 23.9999 34.5272C23.8355 34.5272 23.6749 34.4769 23.5399 34.383C23.4049 34.2891 23.3018 34.1561 23.2446 34.0019L20.908 27.5763C20.8672 27.4655 20.8028 27.365 20.7194 27.2815C20.6359 27.198 20.5353 27.1337 20.4246 27.0929L13.999 24.7563C13.8448 24.6991 13.7118 24.596 13.6179 24.461C13.524 24.3259 13.4736 24.1654 13.4736 24.0009C13.4736 23.8364 13.524 23.6759 13.6179 23.5409C13.7118 23.4059 13.8448 23.3028 13.999 23.2456L20.4246 20.909C20.5353 20.8682 20.6359 20.8038 20.7194 20.7204C20.8028 20.6369 20.8672 20.5363 20.908 20.4256L23.2446 13.9999C23.3018 13.8458 23.4049 13.7128 23.5399 13.6189C23.6749 13.5249 23.8355 13.4746 23.9999 13.4746C24.1644 13.4746 24.325 13.5249 24.46 13.6189C24.595 13.7128 24.6981 13.8458 24.7553 13.9999L27.0919 20.4256C27.1327 20.5363 27.1971 20.6369 27.2805 20.7204C27.364 20.8038 27.4646 20.8682 27.5753 20.909L34.0009 23.2456C34.1551 23.3028 34.2881 23.4059 34.382 23.5409C34.4759 23.6759 34.5263 23.8364 34.5263 24.0009C34.5263 24.1654 34.4759 24.3259 34.382 24.461C34.2881 24.596 34.1551 24.6991 34.0009 24.7563L27.5753 27.0929C27.4646 27.1337 27.364 27.198 27.2805 27.2815C27.1971 27.365 27.1327 27.4655 27.0919 27.5763Z" fill="currentColor" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                            </div>
                            BRONZE
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
                        <a class="link" href="manage_subscription.php?subscription=bronze">
                            View Details
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M13 18l6 -6"></path>
                                    <path d="M13 6l6 6"></path>
                                </svg></span>
                        </a>
                    </div>
                    <div class="subcription-card">
                        <div class="subscription subscription-silver">
                            <div class="subscription-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="currentColor" />
                                    <path d="M27.0919 27.5763L24.7553 34.0019C24.6981 34.1561 24.595 34.2891 24.46 34.383C24.325 34.4769 24.1644 34.5272 23.9999 34.5272C23.8355 34.5272 23.6749 34.4769 23.5399 34.383C23.4049 34.2891 23.3018 34.1561 23.2446 34.0019L20.908 27.5763C20.8672 27.4655 20.8028 27.365 20.7194 27.2815C20.6359 27.198 20.5353 27.1337 20.4246 27.0929L13.999 24.7563C13.8448 24.6991 13.7118 24.596 13.6179 24.461C13.524 24.3259 13.4736 24.1654 13.4736 24.0009C13.4736 23.8364 13.524 23.6759 13.6179 23.5409C13.7118 23.4059 13.8448 23.3028 13.999 23.2456L20.4246 20.909C20.5353 20.8682 20.6359 20.8038 20.7194 20.7204C20.8028 20.6369 20.8672 20.5363 20.908 20.4256L23.2446 13.9999C23.3018 13.8458 23.4049 13.7128 23.5399 13.6189C23.6749 13.5249 23.8355 13.4746 23.9999 13.4746C24.1644 13.4746 24.325 13.5249 24.46 13.6189C24.595 13.7128 24.6981 13.8458 24.7553 13.9999L27.0919 20.4256C27.1327 20.5363 27.1971 20.6369 27.2805 20.7204C27.364 20.8038 27.4646 20.8682 27.5753 20.909L34.0009 23.2456C34.1551 23.3028 34.2881 23.4059 34.382 23.5409C34.4759 23.6759 34.5263 23.8364 34.5263 24.0009C34.5263 24.1654 34.4759 24.3259 34.382 24.461C34.2881 24.596 34.1551 24.6991 34.0009 24.7563L27.5753 27.0929C27.4646 27.1337 27.364 27.198 27.2805 27.2815C27.1971 27.365 27.1327 27.4655 27.0919 27.5763Z" fill="currentColor" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                            </div>
                            SILVER
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
                        <a class="link">
                            View Details
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M13 18l6 -6"></path>
                                    <path d="M13 6l6 6"></path>
                                </svg></span>
                        </a>
                    </div>
                    <div class="subcription-card">
                        <div class="subscription subscription-gold">
                            <div class="subscription-icon">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="currentColor" />
                                    <path d="M27.0919 27.5763L24.7553 34.0019C24.6981 34.1561 24.595 34.2891 24.46 34.383C24.325 34.4769 24.1644 34.5272 23.9999 34.5272C23.8355 34.5272 23.6749 34.4769 23.5399 34.383C23.4049 34.2891 23.3018 34.1561 23.2446 34.0019L20.908 27.5763C20.8672 27.4655 20.8028 27.365 20.7194 27.2815C20.6359 27.198 20.5353 27.1337 20.4246 27.0929L13.999 24.7563C13.8448 24.6991 13.7118 24.596 13.6179 24.461C13.524 24.3259 13.4736 24.1654 13.4736 24.0009C13.4736 23.8364 13.524 23.6759 13.6179 23.5409C13.7118 23.4059 13.8448 23.3028 13.999 23.2456L20.4246 20.909C20.5353 20.8682 20.6359 20.8038 20.7194 20.7204C20.8028 20.6369 20.8672 20.5363 20.908 20.4256L23.2446 13.9999C23.3018 13.8458 23.4049 13.7128 23.5399 13.6189C23.6749 13.5249 23.8355 13.4746 23.9999 13.4746C24.1644 13.4746 24.325 13.5249 24.46 13.6189C24.595 13.7128 24.6981 13.8458 24.7553 13.9999L27.0919 20.4256C27.1327 20.5363 27.1971 20.6369 27.2805 20.7204C27.364 20.8038 27.4646 20.8682 27.5753 20.909L34.0009 23.2456C34.1551 23.3028 34.2881 23.4059 34.382 23.5409C34.4759 23.6759 34.5263 23.8364 34.5263 24.0009C34.5263 24.1654 34.4759 24.3259 34.382 24.461C34.2881 24.596 34.1551 24.6991 34.0009 24.7563L27.5753 27.0929C27.4646 27.1337 27.364 27.198 27.2805 27.2815C27.1971 27.365 27.1327 27.4655 27.0919 27.5763Z" fill="currentColor" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>


                            </div>
                            GOLD
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi.</p>
                        <a class="link">
                            View Details
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 12l14 0"></path>
                                    <path d="M13 18l6 -6"></path>
                                    <path d="M13 6l6 6"></path>
                                </svg></span>
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>
</body>

</html>