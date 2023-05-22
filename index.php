<?php


?>

<?php

header('Location: ./modules/tenant/pages/sign-in/sign-in.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './layout/header.php' ?>

</head>

<style>
    body {
        padding: var(--padding);
    }
</style>

<body>
    <h1>Typography</h1>
    <p>Use typography to make writing legible and beautiful. Material's default type scale includes contrasting and flexible styles to support a wide range of use cases.</p>
    <br>
    <h2>Best practices</h2>
    <p>Strive to maintain a minimum font size that most people can read easily. Differences in device displays, including pixel density and brightness, can influence the appropriate minimum font size. Other factors — such as the reader’s proximity to the display, their eyesight and whether they’re in motion, and environmental lighting conditions — all impact legibility.</p>

    <br>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="stepper">
        <div class="input-group-prepend">
            <button class="stepper-btn stepper-btn-minus">
                <i class="fa fa-minus"></i>
            </button>
        </div>
        <input class="form-control stepper-input" min="0" name="quantity" value="1" type="number">
        <div class="input-group-append">
            <button class="stepper-btn stepper-btn-plus">
                <i class="fa fa-plus"></i>
            </button>
        </div>
    </div>
    <script src="/cr_demo/js/stepper.js"></script>
    <h2>Font Family</h2>
    <div class="card">
        <h2>Inter</h2>
        <h1>Aa</h1>
    </div>

    <br>
    <hr>
    <br>
    <h1>Colors</h1>

    <div class="quantity-container">
        input
    </div>

    <div class="colors">
        <div class="box t1"></div>
        <div class="box t2"></div>
        <div class="box t3"></div>
        <div class="box t4"></div>
    </div>
    <div class="colors">
        <div class="box l1"></div>
        <div class="box l2"></div>
        <div class="box l3"></div>
        <div class="box l4"></div>
    </div>
    <div class="colors">
        <div class="box a1"></div>
        <div class="box a2"></div>
        <div class="box a3"></div>
        <div class="box a4"></div>
        <div class="box a5"></div>
    </div>

</body>

</html>