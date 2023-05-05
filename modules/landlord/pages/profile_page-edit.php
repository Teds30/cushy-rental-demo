<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page - Landlord Customization</title>

    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="/cr_demo/css/manage_units/index.css">
    <link rel="stylesheet" href="../css/profile_page-edit/index.css">
</head>

<body>


    <div class="header">
        <a href="" class="chevron-btn">
            <i class="bi bi-chevron-left"></i>
        </a>
        <p>PROFILE</p>

        <a href="" class="camera-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15.75C13.6569 15.75 15 14.4069 15 12.75C15 11.0931 13.6569 9.75 12 9.75C10.3431 9.75 9 11.0931 9 12.75C9 14.4069 10.3431 15.75 12 15.75Z" fill="#8A93A6" />
                    <path d="M21.375 6.75H17.4844C17.3438 6.75 17.1694 6.65906 17.0334 6.51562L15.7547 4.50937C15.2344 3.75 15 3.75 14.1562 3.75H9.84375C9 3.75 8.71875 3.75 8.24672 4.50984L6.96656 6.51562C6.8625 6.62906 6.71625 6.75 6.5625 6.75V6C6.5625 5.90054 6.52299 5.80516 6.45267 5.73484C6.38234 5.66451 6.28696 5.625 6.1875 5.625H4.3125C4.21304 5.625 4.11766 5.66451 4.04734 5.73484C3.97701 5.80516 3.9375 5.90054 3.9375 6V6.75H2.625C2.32663 6.75 2.04048 6.86853 1.8295 7.0795C1.61853 7.29048 1.5 7.57663 1.5 7.875V19.125C1.5 19.4234 1.61853 19.7095 1.8295 19.9205C2.04048 20.1315 2.32663 20.25 2.625 20.25H21.375C21.6734 20.25 21.9595 20.1315 22.1705 19.9205C22.3815 19.7095 22.5 19.4234 22.5 19.125V7.875C22.5 7.57663 22.3815 7.29048 22.1705 7.0795C21.9595 6.86853 21.6734 6.75 21.375 6.75ZM12.2114 17.2453C11.3044 17.2879 10.4057 17.0551 9.63344 16.5776C8.86117 16.1 8.25144 15.3999 7.88437 14.5694C7.51729 13.7389 7.41005 12.8168 7.57674 11.9242C7.74342 11.0316 8.17623 10.2103 8.81829 9.56829C9.46035 8.92623 10.2816 8.49342 11.1742 8.32674C12.0668 8.16005 12.9889 8.26729 13.8194 8.63437C14.6499 9.00144 15.35 9.61117 15.8276 10.3834C16.3051 11.1557 16.5379 12.0544 16.4953 12.9614C16.4416 14.0802 15.973 15.1389 15.181 15.931C14.3889 16.723 13.3302 17.1916 12.2114 17.2453Z" fill="#8A93A6" />
                </svg>
        </a>
    </div>

    <div class="background-img">
        <svg width="100%" height="190" viewBox="0 0 360 190" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H360.327C360.327 0 406.841 110.249 360.327 164.865C285.814 252.359 0 76.2097 0 164.865C0 253.52 0 0 0 0Z" fill="#1D6156" />
        </svg>
    </div>

    <div class="profile-container">
        <div class="image">
            <img src="../img/user1.png" alt="">
        </div>

        <div>
            <div class="profile-details">
                <p class="profile-details_name">Teddy Marc Enaje</p>
                <p class="profile-details_landlord">Landlord</p>
            </div>
        </div>
    </div>

    <form class="form-container">
        <div class="custom__inputs">
            <label>
                <input required="" type="text">
                <span>Name</span>
            </label>
        </div>

        <div class="custom__inputs">
            <label>
                <input required="" type="text">
                <span>Middle Name</span>
            </label>
        </div>

        <div class="custom__inputs">
            <label>
                <input required="" type="text">
                <span>Last Name</span>
            </label>
        </div>

        <div class="custom__inputs">
            <label>
                <input required="" type="text">
                <span>Contact Number</span>
            </label>
        </div>

        <div class="custom__inputs">
            <label>
                <input required="" type="text">
                <span>Gender</span>
            </label>
        </div>

        <button class="btn btn-primary btn-fill" type="submit">Save
        </button>
    </form>


</body>

</html>