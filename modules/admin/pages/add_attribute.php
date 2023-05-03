<?php

$attribute = $_GET['attribute'];

$attr_content = '';



if ($attribute == 'amenity') {
    $attr_content = 'Amenities';
} else if ($attribute == 'inclusion') {
    $attr_content = 'Inclusions';
} else if ($attribute == 'facility') {
    $attr_content = 'Facilities';
} else if ($attribute == 'rule') {
    $attr_content = 'Rules';
}


$selected = strtolower($attr_content);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new <?= $attribute ?></title>
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

                    <a class="btn btn-primary btn-plain btn-link " href="manage_<?= strtolower($attr_content) ?>.php">
                        <span class="breadcrumb-arrow"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l14 0"></path>
                                <path d="M5 12l6 6"></path>
                                <path d="M5 12l6 -6"></path>
                            </svg></span>
                        <span class="title">Manage <?= $attr_content ?></span>
                    </a>
                </div>

                <div class="unit-container">

                    <h2>Add a new <?= $attribute ?></h2>

                    <p class="title">Basic Details</p>
                    <div class="custom__inputs">
                        <label>
                            <input required='' type="text">
                            <span><?= ucfirst($attribute) ?> Name</span>
                        </label>
                    </div>

                    <?php if ($attribute == 'facility') : ?>

                        <div class="custom-select" style="width:200px;">
                            <select>
                                <option value="0">Switch</option>
                                <option value="1">Owned/Shared</option>
                            </select>
                        </div>
                    <?php endif ?>

                    <div class="upload-icon-container">
                        <div class="upload-icon"></div>
                        <a href="">Select Icon</a>
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