<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Units- Edit Unit</title>

    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="../css/manage_units/index.css">
    <link rel="stylesheet" href="../css/manage_unit-edit_unit/index.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav class="nav">
        <div class="nav-back">
            <a href="#">
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>

        <div class="nav-title">
            <h2 class="title">Edit Unit</h2>
        </div>

        <button class="btn btn-primary" type="submit">Save
        </button>
    </nav>

    <div class="image-container">

        <div class="picture-details_container">
            <p>1 of 5</p>

        </div>

        <div class="edit-images_container">
            <a href="" class="btn-secondary btn btn-link">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.3774 2.425C19.4942 2.54216 19.5598 2.70083 19.5598 2.86625C19.5598 3.03167 19.4942 3.19035 19.3774 3.3075L18.0736 4.6125L15.5736 2.1125L16.8774 0.807503C16.9946 0.690334 17.1535 0.624512 17.3193 0.624512C17.485 0.624512 17.6439 0.690334 17.7611 0.807503L19.3774 2.42375V2.425ZM17.1899 5.495L14.6899 2.995L6.17364 11.5125C6.10484 11.5813 6.05305 11.6652 6.02239 11.7575L5.01614 14.775C4.99789 14.83 4.9953 14.889 5.00866 14.9454C5.02201 15.0018 5.05079 15.0534 5.09177 15.0944C5.13276 15.1354 5.18433 15.1641 5.24073 15.1775C5.29713 15.1908 5.35613 15.1883 5.41114 15.17L8.42864 14.1638C8.52084 14.1335 8.60473 14.0821 8.67364 14.0138L17.1899 5.495Z" fill="#5C6173" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 16.875C1.25 17.3723 1.44754 17.8492 1.79917 18.2008C2.15081 18.5525 2.62772 18.75 3.125 18.75H16.875C17.3723 18.75 17.8492 18.5525 18.2008 18.2008C18.5525 17.8492 18.75 17.3723 18.75 16.875V9.375C18.75 9.20924 18.6842 9.05027 18.5669 8.93306C18.4497 8.81585 18.2908 8.75 18.125 8.75C17.9592 8.75 17.8003 8.81585 17.6831 8.93306C17.5658 9.05027 17.5 9.20924 17.5 9.375V16.875C17.5 17.0408 17.4342 17.1997 17.3169 17.3169C17.1997 17.4342 17.0408 17.5 16.875 17.5H3.125C2.95924 17.5 2.80027 17.4342 2.68306 17.3169C2.56585 17.1997 2.5 17.0408 2.5 16.875V3.125C2.5 2.95924 2.56585 2.80027 2.68306 2.68306C2.80027 2.56585 2.95924 2.5 3.125 2.5H11.25C11.4158 2.5 11.5747 2.43415 11.6919 2.31694C11.8092 2.19973 11.875 2.04076 11.875 1.875C11.875 1.70924 11.8092 1.55027 11.6919 1.43306C11.5747 1.31585 11.4158 1.25 11.25 1.25H3.125C2.62772 1.25 2.15081 1.44754 1.79917 1.79917C1.44754 2.15081 1.25 2.62772 1.25 3.125V16.875Z" fill="#5C6173" />
                </svg>
                <span>
                    Edit Images
                </span>



            </a>
        </div>
    </div>





    <div class="details-container">
        <p class="title">Unit Name</p>

        <textarea name="" id="" cols="30" rows="8" placeholder="Description"></textarea>

        <p class="title">Unit Description</p>

        <textarea name="" id="" cols="30" rows="8" placeholder="Description"></textarea>

        <hr>

        <p class="title">Pricing Details</p>

        <p class="strong">Price</p>

        <div class="search-box">
            <input type="text" class="search-input" placeholder="5000">
        </div>

        <div class="deposit-month_container">
            <div class="deposit-box">
                <p class="title"> Deposit</p>

                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="month-box">
                <p class="strong">Month</p>


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


            </div>
        </div>

        <div class="advance-payment-box">
            <p class="title">Advanced Payment</p>

            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>

        <hr>

        <div class="location-box">
            <p class="title">Location</p>
            <p class="strong">Rawis, Legazpi City • <span>Edit</span></p>
        </div>

        <hr>

        <div class="feature-box_container">
            <p class="title">Features</p>

            <div class="feature-box_sub-container">
                <div class="feature-box">
                    <div class="feature-box-inner">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#9B50D6" />
                            <path d="M6 15.3333C6 14.9797 6.14048 14.6406 6.39052 14.3905C6.64057 14.1405 6.97971 14 7.33333 14H8.66667C9.02029 14 9.35943 14.1405 9.60948 14.3905C9.85952 14.6406 10 14.9797 10 15.3333V16.6667C10 17.0203 9.85952 17.3594 9.60948 17.6095C9.35943 17.8595 9.02029 18 8.66667 18H7.33333C6.97971 18 6.64057 17.8595 6.39052 17.6095C6.14048 17.3594 6 17.0203 6 16.6667V15.3333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 15.3333C14 14.9797 14.1405 14.6406 14.3905 14.3905C14.6406 14.1405 14.9797 14 15.3333 14H16.6667C17.0203 14 17.3594 14.1405 17.6095 14.3905C17.8595 14.6406 18 14.9797 18 15.3333V16.6667C18 17.0203 17.8595 17.3594 17.6095 17.6095C17.3594 17.8595 17.0203 18 16.6667 18H15.3333C14.9797 18 14.6406 17.8595 14.3905 17.6095C14.1405 17.3594 14 17.0203 14 16.6667V15.3333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 7.33333C10 6.97971 10.1405 6.64057 10.3905 6.39052C10.6406 6.14048 10.9797 6 11.3333 6H12.6667C13.0203 6 13.3594 6.14048 13.6095 6.39052C13.8595 6.64057 14 6.97971 14 7.33333V8.66667C14 9.02029 13.8595 9.35943 13.6095 9.60948C13.3594 9.85952 13.0203 10 12.6667 10H11.3333C10.9797 10 10.6406 9.85952 10.3905 9.60948C10.1405 9.35943 10 9.02029 10 8.66667V7.33333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 14V13.3333C8 12.9797 8.14048 12.6406 8.39052 12.3905C8.64057 12.1405 8.97971 12 9.33333 12H14.6667C15.0203 12 15.3594 12.1405 15.6095 12.3905C15.8595 12.6406 16 12.9797 16 13.3333V14" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 10V12" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <p class="title">Amenities</p>
                    </div>


                    <a href="/cr_demo/modules/landlord/pages/manage_unit-amenities.php">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8295 4.4545C8.26884 4.01517 8.98116 4.01517 9.4205 4.4545L16.1705 11.2045C16.6098 11.6438 16.6098 12.3562 16.1705 12.7955L9.4205 19.5455C8.98116 19.9848 8.26884 19.9848 7.8295 19.5455C7.39017 19.1062 7.39017 18.3938 7.8295 17.9545L13.784 12L7.8295 6.0455C7.39017 5.60616 7.39017 4.89384 7.8295 4.4545Z" fill="#959CB0" />
                        </svg>
                    </a>

                </div>

                <div class="feature-box">
                    <div class="feature-box-inner">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#5075D6" />
                            <path d="M6 15.3333C6 14.9797 6.14048 14.6406 6.39052 14.3905C6.64057 14.1405 6.97971 14 7.33333 14H8.66667C9.02029 14 9.35943 14.1405 9.60948 14.3905C9.85952 14.6406 10 14.9797 10 15.3333V16.6667C10 17.0203 9.85952 17.3594 9.60948 17.6095C9.35943 17.8595 9.02029 18 8.66667 18H7.33333C6.97971 18 6.64057 17.8595 6.39052 17.6095C6.14048 17.3594 6 17.0203 6 16.6667V15.3333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 15.3333C14 14.9797 14.1405 14.6406 14.3905 14.3905C14.6406 14.1405 14.9797 14 15.3333 14H16.6667C17.0203 14 17.3594 14.1405 17.6095 14.3905C17.8595 14.6406 18 14.9797 18 15.3333V16.6667C18 17.0203 17.8595 17.3594 17.6095 17.6095C17.3594 17.8595 17.0203 18 16.6667 18H15.3333C14.9797 18 14.6406 17.8595 14.3905 17.6095C14.1405 17.3594 14 17.0203 14 16.6667V15.3333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 7.33333C10 6.97971 10.1405 6.64057 10.3905 6.39052C10.6406 6.14048 10.9797 6 11.3333 6H12.6667C13.0203 6 13.3594 6.14048 13.6095 6.39052C13.8595 6.64057 14 6.97971 14 7.33333V8.66667C14 9.02029 13.8595 9.35943 13.6095 9.60948C13.3594 9.85952 13.0203 10 12.6667 10H11.3333C10.9797 10 10.6406 9.85952 10.3905 9.60948C10.1405 9.35943 10 9.02029 10 8.66667V7.33333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 14V13.3333C8 12.9797 8.14048 12.6406 8.39052 12.3905C8.64057 12.1405 8.97971 12 9.33333 12H14.6667C15.0203 12 15.3594 12.1405 15.6095 12.3905C15.8595 12.6406 16 12.9797 16 13.3333V14" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 10V12" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <p class="title">Facilities</p>
                    </div>


                    <a href="/cr_demo/modules/landlord/pages/manage_unit-facilities.php">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8295 4.4545C8.26884 4.01517 8.98116 4.01517 9.4205 4.4545L16.1705 11.2045C16.6098 11.6438 16.6098 12.3562 16.1705 12.7955L9.4205 19.5455C8.98116 19.9848 8.26884 19.9848 7.8295 19.5455C7.39017 19.1062 7.39017 18.3938 7.8295 17.9545L13.784 12L7.8295 6.0455C7.39017 5.60616 7.39017 4.89384 7.8295 4.4545Z" fill="#959CB0" />
                        </svg>
                    </a>

                </div>

                <div class="feature-box">
                    <div class="feature-box-inner">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#50D6BD" />
                            <path d="M6 15.3333C6 14.9797 6.14048 14.6406 6.39052 14.3905C6.64057 14.1405 6.97971 14 7.33333 14H8.66667C9.02029 14 9.35943 14.1405 9.60948 14.3905C9.85952 14.6406 10 14.9797 10 15.3333V16.6667C10 17.0203 9.85952 17.3594 9.60948 17.6095C9.35943 17.8595 9.02029 18 8.66667 18H7.33333C6.97971 18 6.64057 17.8595 6.39052 17.6095C6.14048 17.3594 6 17.0203 6 16.6667V15.3333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 15.3333C14 14.9797 14.1405 14.6406 14.3905 14.3905C14.6406 14.1405 14.9797 14 15.3333 14H16.6667C17.0203 14 17.3594 14.1405 17.6095 14.3905C17.8595 14.6406 18 14.9797 18 15.3333V16.6667C18 17.0203 17.8595 17.3594 17.6095 17.6095C17.3594 17.8595 17.0203 18 16.6667 18H15.3333C14.9797 18 14.6406 17.8595 14.3905 17.6095C14.1405 17.3594 14 17.0203 14 16.6667V15.3333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 7.33333C10 6.97971 10.1405 6.64057 10.3905 6.39052C10.6406 6.14048 10.9797 6 11.3333 6H12.6667C13.0203 6 13.3594 6.14048 13.6095 6.39052C13.8595 6.64057 14 6.97971 14 7.33333V8.66667C14 9.02029 13.8595 9.35943 13.6095 9.60948C13.3594 9.85952 13.0203 10 12.6667 10H11.3333C10.9797 10 10.6406 9.85952 10.3905 9.60948C10.1405 9.35943 10 9.02029 10 8.66667V7.33333Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8 14V13.3333C8 12.9797 8.14048 12.6406 8.39052 12.3905C8.64057 12.1405 8.97971 12 9.33333 12H14.6667C15.0203 12 15.3594 12.1405 15.6095 12.3905C15.8595 12.6406 16 12.9797 16 13.3333V14" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 10V12" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>


                        <p class="title">Inclusions</p>
                    </div>


                    <a href="/cr_demo/modules/landlord/pages/manage_unit-inclusions.php">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8295 4.4545C8.26884 4.01517 8.98116 4.01517 9.4205 4.4545L16.1705 11.2045C16.6098 11.6438 16.6098 12.3562 16.1705 12.7955L9.4205 19.5455C8.98116 19.9848 8.26884 19.9848 7.8295 19.5455C7.39017 19.1062 7.39017 18.3938 7.8295 17.9545L13.784 12L7.8295 6.0455C7.39017 5.60616 7.39017 4.89384 7.8295 4.4545Z" fill="#959CB0" />
                        </svg>
                    </a>

                </div>

                <div class="feature-box">
                    <div class="feature-box-inner">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="24" height="24" rx="4" fill="#D65050" />
                            <path d="M12 8.66436C11.6464 8.66436 11.3072 8.52401 11.0572 8.27418C10.8071 8.02435 10.6667 7.6855 10.6667 7.33218C10.6667 6.97887 10.8071 6.64002 11.0572 6.39019C11.3072 6.14035 11.6464 6 12 6C12.3536 6 12.6928 6.14035 12.9428 6.39019C13.1929 6.64002 13.3333 6.97887 13.3333 7.33218C13.3333 7.6855 13.1929 8.02435 12.9428 8.27418C12.6928 8.52401 12.3536 8.66436 12 8.66436ZM12 8.66436V9.33046M15.7133 15.7263C15.4634 15.9762 15.3231 16.3152 15.3233 16.6685C15.3235 17.0218 15.4641 17.3606 15.7143 17.6103C15.9645 17.86 16.3037 18.0002 16.6574 18C17.011 17.9998 17.3501 17.8593 17.6 17.6093M11.4087 11.4173C11.0785 11.5195 10.7805 11.7055 10.5436 11.957C10.3068 12.2086 10.1393 12.5172 10.0574 12.8528C9.97554 13.1883 9.98209 13.5393 10.0764 13.8715C10.1708 14.2038 10.3497 14.5059 10.5958 14.7485C10.8418 14.9911 11.1466 15.1658 11.4804 15.2556C11.8141 15.3454 12.1655 15.3473 12.5002 15.261C12.8349 15.1747 13.1415 15.0032 13.3901 14.7633C13.6387 14.5233 13.8208 14.2231 13.9187 13.8918M8.46667 15.8581L10.3333 14.526M15.5333 15.8581L13.6667 14.526M6 6L18 17.9896M6 16.6575C6 17.0108 6.14048 17.3496 6.39052 17.5995C6.64057 17.8493 6.97971 17.9896 7.33333 17.9896C7.68696 17.9896 8.02609 17.8493 8.27614 17.5995C8.52619 17.3496 8.66667 17.0108 8.66667 16.6575C8.66667 16.3041 8.52619 15.9653 8.27614 15.7155C8.02609 15.4656 7.68696 15.3253 7.33333 15.3253C6.97971 15.3253 6.64057 15.4656 6.39052 15.7155C6.14048 15.9653 6 16.3041 6 16.6575Z" stroke="#FBFBFC" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <p class="title">Rules</p>
                    </div>


                    <a href="/cr_demo/modules/landlord/pages/manage_unit-rules.php">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.8295 4.4545C8.26884 4.01517 8.98116 4.01517 9.4205 4.4545L16.1705 11.2045C16.6098 11.6438 16.6098 12.3562 16.1705 12.7955L9.4205 19.5455C8.98116 19.9848 8.26884 19.9848 7.8295 19.5455C7.39017 19.1062 7.39017 18.3938 7.8295 17.9545L13.784 12L7.8295 6.0455C7.39017 5.60616 7.39017 4.89384 7.8295 4.4545Z" fill="#959CB0" />
                        </svg>
                    </a>

                </div>

            </div>

            <hr>

            <p class="title">Target Gender</p>

            <div class="gender-box-container">
                <div class="checkbox-container">

                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <svg width="16" height="32" viewBox="0 0 16 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.9999 0C10.209 0 11.9999 1.79087 11.9999 4C11.9999 6.20913 10.209 8 7.9999 8C5.79078 8 3.9999 6.20913 3.9999 4C3.9999 1.79087 5.79078 0 7.9999 0ZM15.4551 22.1362L12.4551 10.1362C12.374 9.81166 12.1867 9.52356 11.923 9.3177C11.6593 9.11183 11.3344 9.00001 10.9999 9H10.2899C8.87046 9.65269 7.19053 9.68087 5.7099 9H4.9999C4.66538 9.00001 4.34047 9.11183 4.0768 9.3177C3.81313 9.52356 3.62585 9.81166 3.54471 10.1362L0.544713 22.1362C0.308338 23.0816 1.02384 24 1.9999 24H5.4999V30.5C5.4999 31.3284 6.17146 32 6.9999 32H8.9999C9.82834 32 10.4999 31.3284 10.4999 30.5V24H13.9999C14.9743 24 15.6918 23.0831 15.4551 22.1362Z" fill="currentColor" />
                                    </svg>

                                </span>
                                <span class="checkbox-label">Female</span>
                            </span>
                        </label>
                    </div>
                    <!-- next checkbox -->

                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <svg width="12" height="32" viewBox="0 0 12 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 0C8.20913 0 10 1.79087 10 4C10 6.20913 8.20913 8 6 8C3.79088 8 2 6.20913 2 4C2 1.79087 3.79088 0 6 0ZM9 9H8.29C6.87056 9.65269 5.19063 9.68087 3.71 9H3C1.34313 9 0 10.3431 0 12V20.5C0 21.3284 0.671563 22 1.5 22H2.5V30.5C2.5 31.3284 3.17156 32 4 32H8C8.82844 32 9.5 31.3284 9.5 30.5V22H10.5C11.3284 22 12 21.3284 12 20.5V12C12 10.3431 10.6569 9 9 9Z" fill="currentColor" />
                                    </svg>

                                </span>
                                <span class="checkbox-label">Female</span>
                            </span>
                        </label>
                    </div>
                    <!-- next checkbox -->

                    <div class="checkbox">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" class="checkbox-input" />
                            <span class="checkbox-tile">
                                <span class="checkbox-icon">
                                    <svg width="30" height="32" viewBox="0 0 30 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.49951 0C8.70864 0 10.4995 1.79087 10.4995 4C10.4995 6.20913 8.70864 8 6.49951 8C4.29039 8 2.49951 6.20913 2.49951 4C2.49951 1.79087 4.29039 0 6.49951 0ZM9.49951 9H8.78951C7.37007 9.65269 5.69014 9.68087 4.20951 9H3.49951C1.84264 9 0.499512 10.3431 0.499512 12V20.5C0.499512 21.3284 1.17107 22 1.99951 22H2.99951V30.5C2.99951 31.3284 3.67107 32 4.49951 32H8.49951C9.32795 32 9.99951 31.3284 9.99951 30.5V22H10.9995C11.828 22 12.4995 21.3284 12.4995 20.5V12C12.4995 10.3431 11.1564 9 9.49951 9Z" fill="currentColor" />
                                        <path d="M22.0001 0C24.2093 0 26.0001 1.79087 26.0001 4C26.0001 6.20913 24.2093 8 22.0001 8C19.791 8 18.0001 6.20913 18.0001 4C18.0001 1.79087 19.791 0 22.0001 0ZM29.4553 22.1362L26.4553 10.1362C26.3742 9.81166 26.1869 9.52356 25.9232 9.3177C25.6596 9.11183 25.3347 9.00001 25.0001 9H24.2901C22.8707 9.65269 21.1908 9.68087 19.7101 9H19.0001C18.6656 9.00001 18.3407 9.11183 18.077 9.3177C17.8134 9.52356 17.6261 9.81166 17.545 10.1362L14.545 22.1362C14.3086 23.0816 15.0241 24 16.0001 24H19.5001V30.5C19.5001 31.3284 20.1717 32 21.0001 32H23.0001C23.8286 32 24.5001 31.3284 24.5001 30.5V24H28.0001C28.9746 24 29.6921 23.0831 29.4553 22.1362Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <span class="checkbox-label">Female</span>
                            </span>
                        </label>
                    </div>
                </div>

            </div>

        </div>

        <hr>

        <p class="title">Slot</p>

        <div class="available-slot-container">
            <p class="strong">Available Slot</p>
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
        </div>

        <p class="title">Unit Management</p>

        <div class="list-unit-container">
            <div>
                <p class="strong">List Unit</p>
                <p class="caption">Make this unit available for listings</p>
            </div>
            <div>
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>

        </div>

        <button class="btn-outlined-danger btn">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1693_4723)">
                    <path d="M3.125 1.25C2.79348 1.25 2.47554 1.3817 2.24112 1.61612C2.0067 1.85054 1.875 2.16848 1.875 2.5V3.75C1.875 4.08152 2.0067 4.39946 2.24112 4.63388C2.47554 4.8683 2.79348 5 3.125 5H3.75V16.25C3.75 16.913 4.01339 17.5489 4.48223 18.0178C4.95107 18.4866 5.58696 18.75 6.25 18.75H13.75C14.413 18.75 15.0489 18.4866 15.5178 18.0178C15.9866 17.5489 16.25 16.913 16.25 16.25V5H16.875C17.2065 5 17.5245 4.8683 17.7589 4.63388C17.9933 4.39946 18.125 4.08152 18.125 3.75V2.5C18.125 2.16848 17.9933 1.85054 17.7589 1.61612C17.5245 1.3817 17.2065 1.25 16.875 1.25H12.5C12.5 0.918479 12.3683 0.600537 12.1339 0.366117C11.8995 0.131696 11.5815 0 11.25 0L8.75 0C8.41848 0 8.10054 0.131696 7.86612 0.366117C7.6317 0.600537 7.5 0.918479 7.5 1.25H3.125ZM6.875 6.25C7.04076 6.25 7.19973 6.31585 7.31694 6.43306C7.43415 6.55027 7.5 6.70924 7.5 6.875V15.625C7.5 15.7908 7.43415 15.9497 7.31694 16.0669C7.19973 16.1842 7.04076 16.25 6.875 16.25C6.70924 16.25 6.55027 16.1842 6.43306 16.0669C6.31585 15.9497 6.25 15.7908 6.25 15.625V6.875C6.25 6.70924 6.31585 6.55027 6.43306 6.43306C6.55027 6.31585 6.70924 6.25 6.875 6.25ZM10 6.25C10.1658 6.25 10.3247 6.31585 10.4419 6.43306C10.5592 6.55027 10.625 6.70924 10.625 6.875V15.625C10.625 15.7908 10.5592 15.9497 10.4419 16.0669C10.3247 16.1842 10.1658 16.25 10 16.25C9.83424 16.25 9.67527 16.1842 9.55806 16.0669C9.44085 15.9497 9.375 15.7908 9.375 15.625V6.875C9.375 6.70924 9.44085 6.55027 9.55806 6.43306C9.67527 6.31585 9.83424 6.25 10 6.25ZM13.75 6.875V15.625C13.75 15.7908 13.6842 15.9497 13.5669 16.0669C13.4497 16.1842 13.2908 16.25 13.125 16.25C12.9592 16.25 12.8003 16.1842 12.6831 16.0669C12.5658 15.9497 12.5 15.7908 12.5 15.625V6.875C12.5 6.70924 12.5658 6.55027 12.6831 6.43306C12.8003 6.31585 12.9592 6.25 13.125 6.25C13.2908 6.25 13.4497 6.31585 13.5669 6.43306C13.6842 6.55027 13.75 6.70924 13.75 6.875Z" fill="#EB5858" />
                </g>
                <defs>
                    <clipPath id="clip0_1693_4723">
                        <rect width="20" height="20" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            Delete Unit
        </button>
    </div>

    <script src="/cr_demo/js/stepper.js"></script>
</body>

</html>