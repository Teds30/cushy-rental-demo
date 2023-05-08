<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Renters - Tenants List</title>

    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="../css/manage_units/index.css">
    <link rel="stylesheet" href="../css/manage_renters/index.css">
</head>

<body>

    <nav class="nav">
        <div class="nav-back">
            <a href="../../landlord/pages/my_unit-landlord.php">
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>

        <div class="nav-title">
            <h2 class="title">Manage Renters</h2>
        </div>
    </nav>

    <div class="filter">
        <div class="filter-1" id="filter1_bottom">
            <button class="title" onclick="func_filter(1)" id="tenants_btn">Tenants</button>
        </div>

        <div class="filter-2" id="filter2_bottom">
            <button class="title" onclick="func_filter(2)" id="inquiries_btn">Pending Inquiries</button>
        </div>
    </div>

    <div class="search-box">
        <input type="text" class="search-input" placeholder="Search">
    </div>

    <div class="tenants-main-box_container" id="tenants">
        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img2.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Leonardo Dicaprio</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>

        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img2.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Leonardo Dicaprio</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>

        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img2.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Leonardo Dicaprio</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>

        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img2.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Leonardo Dicaprio</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>

        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img2.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Leonardo Dicaprio</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>
    </div>


    <div class="inquiries-main-box_container" id="inquiries">
        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img3.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Jano The Cutie</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>

        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img2.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Leonardo Dicaprio</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>

        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img2.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Leonardo Dicaprio</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>

        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img4.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Scarlet Johansson</p>
                <p class="box-details-gender">Female</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>

        <div class="box-container">
            <div class="box-image">
                <img src="/cr_demo/modules/landlord/img/img5.jpg">
            </div>
            <div class="box-details">
                <p class="box-details-name">Tom Hiddleston</p>
                <p class="box-details-gender">Male</p>
                <p class="box-details-time">18/04/2023 | 1:00 pm</p>
            </div>
        </div>
    </div>


    <!-- javaScript Function -->
    <script>
        const func_filter = (num) => {

            if (num == 1) {

                // it display the div for filter
                document.getElementById("inquiries").style.display = "none";
                document.getElementById("tenants").style.display = "flex";


                // This is for the color od the text
                document.getElementById("filter1_bottom").style.borderBottom = "2px solid var(--accent)";
                document.getElementById("tenants_btn").style.color = "var(--accent)";

                // This is for the border-bottom
                document.getElementById("filter2_bottom").style.borderBottom = "none";
                document.getElementById("inquiries_btn").style.color = "var(--fc-body)";

            } else {

                // it display the div for filter
                document.getElementById("tenants").style.display = "none";
                document.getElementById("inquiries").style.display = "flex";

                // This is for the color od the text
                document.getElementById("filter2_bottom").style.borderBottom = "2px solid var(--accent)";
                document.getElementById("inquiries_btn").style.color = "var(--accent)";

                // This is for the border-bottom
                document.getElementById("filter1_bottom").style.borderBottom = "none";
                document.getElementById("tenants_btn").style.color = "var(--fc-body)";

            }

        };
    </script>
</body>

</html>