<!DOCTYPE html>
<?php

$selected = 'subscriptions';

$subscription = $_GET['subscription'];

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Subscription</title>
    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="../css/index.css">
</head>

<body>
    <main>

        <?php include '../layout/sidebar.php' ?>
        <section>

            <?php include '../layout/topbar.php' ?>
            <div class="container">
                <div>

                    <a class="btn btn-primary btn-plain btn-link " href="subscriptions.php">
                        <span class="breadcrumb-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l14 0"></path>
                                <path d="M5 12l6 6"></path>
                                <path d="M5 12l6 -6"></path>
                            </svg></span>
                        <span class="title">Manage Subscriptions</span>
                    </a>
                </div>


                <div class="unit-container">

                    <h2>Bronze</h2>
                    <div class="sub-col-container">

                        <div class="sub-col1">

                            <p class="title">Basic Details</p>
                            <div class="custom__inputs" style="width: 380px;">
                                <label>
                                    <input required='' type="text">
                                    <span>Subscription Name</span>
                                </label>
                            </div>

                            <div class="custom__inputs" style="width: 380px">
                                <label>
                                    <input required='' type="text">
                                    <span>Details</span>
                                </label>
                            </div>

                            <div class="custom__inputs" style="width: 380px ">
                                <label>
                                    <input required='' type="text">
                                    <span>Price</span>
                                </label>
                            </div>
                        </div>

                        <div class="sub-col2">

                            <p class="title">Color</p>
                            <div class="color-picker-container">
                                <div class="color-box"></div>
                                <div class="color-content">
                                    <p class="title">#CD7F32</p>
                                    <a>CHOOSE COLOR</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h2>Features</h2>
                    <div class="features-container">

                        <div class="features">
                            <div class="feature">
                                <span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </span>

                                <span><button class="btn btn-plain btn-danger"><i class="bi bi-trash"></i></button></span>
                            </div>
                        </div>
                        <div class="feature-new">
                            <div class="custom__inputs">
                                <label>
                                    <input required='' type="text">
                                    <span>New feature</span>
                                </label>
                            </div>
                            <btn class="btn btn-primary">
                                <span><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 5l0 14"></path>
                                        <path d="M5 12l14 0"></path>
                                    </svg></span>
                                Add new
                            </btn>
                        </div>
                    </div>

                    <hr>

                    <p class="title">Management</p>
                    <div class="attr-field">
                        Set Availability
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <button class="btn btn-plain btn-danger-tinted"><span><i class="bi bi-archive"></i></span>Archive Subscription</button>

                    <div class="btn-container btn-container-left">
                        <button class="btn btn-secondary">Cancel</button>
                        <button class="btn btn-primary">Save</button>
                    </div>

                </div>
            </div>
        </section>
    </main>
</body>

</html>