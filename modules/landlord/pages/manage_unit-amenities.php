<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Units - Amenities</title>

    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <link rel="stylesheet" href="/cr_demo/css/manage_units/index.css">
    <link rel="stylesheet" href="../css/manage_unit-amenities/index.css">
</head>

<body>
    <nav class="nav">
        <div class="nav-back">
            <a href="#">
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>

        <div class="nav-title">
            <h2 class="title">Amenities</h2>
        </div>
    </nav>

    <div class="main-box_container">
        <p class="title">Choose unit amenities</p>

        <div class="checkbox-container">
            <div class="checkbox">
                <label class="checkbox-wrapper">
                    <input type="checkbox" class="checkbox-input" />
                    <span class="checkbox-tile">
                        <span class="checkbox-icon">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M30.9002 14.5601C30.9002 7.4033 24.8104 1.6001 17.3002 1.6001C9.78997 1.6001 3.7002 7.4033 3.7002 14.5601C3.7002 20.2049 7.47797 24.9857 12.7669 26.8001V30.4001H15.7891V27.4337C16.2878 27.5201 16.7864 27.5201 17.3002 27.5201C17.814 27.5201 18.3126 27.5201 18.8113 27.4337V30.4001H21.8335V26.8001C27.1224 24.9857 30.9002 20.2049 30.9002 14.5601ZM17.3002 24.6401C11.4673 24.6401 6.72242 20.1185 6.72242 14.5601C6.72242 9.0017 11.4673 4.4801 17.3002 4.4801C23.1331 4.4801 27.878 9.0017 27.878 14.5601C27.878 20.1185 23.1331 24.6401 17.3002 24.6401ZM11.2558 8.8001H23.3446V11.6801H11.2558V8.8001ZM18.4335 13.1201L13.9002 17.4401L15.7891 19.2401L13.9002 21.0401L16.1669 23.2001L20.7002 18.8801L18.8113 17.0801L20.7002 15.2801L18.4335 13.1201Z" fill="#5C6173" />
                            </svg>

                        </span>
                        <span class="checkbox-label">Own Submeter</span>
                    </span>
                </label>
            </div>
            <!-- next checkbox -->

            <div class="checkbox">
                <label class="checkbox-wrapper">
                    <input type="checkbox" class="checkbox-input" />
                    <span class="checkbox-tile">
                        <span class="checkbox-icon">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 25C9.99971 25.5499 9.84827 26.0892 9.56222 26.5589C9.27618 27.0286 8.86653 27.4106 8.37806 27.6632C7.88958 27.9158 7.34106 28.0293 6.79245 27.9912C6.24384 27.9532 5.71624 27.7651 5.26731 27.4475C4.81838 27.1298 4.46539 26.6949 4.24691 26.1903C4.02843 25.6856 3.95288 25.1306 4.0285 24.5859C4.10413 24.0412 4.32802 23.5277 4.67571 23.1017C5.02341 22.6756 5.48152 22.3533 6 22.17V19C6 18.7348 6.10536 18.4804 6.29289 18.2929C6.48043 18.1054 6.73478 18 7 18C7.26522 18 7.51957 18.1054 7.70711 18.2929C7.89464 18.4804 8 18.7348 8 19V22.17C8.58516 22.3769 9.09174 22.7602 9.44994 23.267C9.80815 23.7739 10.0003 24.3793 10 25Z" fill="#5C6173" />
                                <path d="M2 5C2 3.67392 2.52679 2.40215 3.46447 1.46447C4.40215 0.526784 5.67392 0 7 0C8.32609 0 9.59786 0.526784 10.5355 1.46447C11.4732 2.40215 12 3.67392 12 5V20.1C12.9647 21.0846 13.6172 22.332 13.8758 23.6859C14.1343 25.0399 13.9874 26.44 13.4534 27.7107C12.9194 28.9815 12.0222 30.0663 10.8741 30.8292C9.7261 31.592 8.37839 31.999 7 31.999C5.62162 31.999 4.27391 31.592 3.12587 30.8292C1.97784 30.0663 1.08058 28.9815 0.546599 27.7107C0.0126227 26.44 -0.134299 25.0399 0.124256 23.6859C0.382811 22.332 1.03533 21.0846 2 20.1V5ZM7 2C6.20435 2 5.44129 2.31607 4.87868 2.87868C4.31607 3.44129 4 4.20435 4 5V20.974L3.666 21.274C2.91115 21.949 2.37906 22.8374 2.14015 23.8215C1.90123 24.8055 1.96676 25.839 2.32806 26.785C2.68936 27.731 3.3294 28.545 4.16347 29.1193C4.99755 29.6936 5.98634 30.0011 6.999 30.0011C8.01167 30.0011 9.00046 29.6936 9.83454 29.1193C10.6686 28.545 11.3086 27.731 11.6699 26.785C12.0312 25.839 12.0968 24.8055 11.8579 23.8215C11.6189 22.8374 11.0869 21.949 10.332 21.274L10 20.972V5C10 4.20435 9.68393 3.44129 9.12132 2.87868C8.55871 2.31607 7.79565 2 7 2ZM17 4C17.2652 4 17.5196 4.10536 17.7071 4.29289C17.8946 4.48043 18 4.73478 18 5V7.586L19.292 6.292C19.4798 6.10423 19.7345 5.99874 20 5.99874C20.2656 5.99874 20.5202 6.10423 20.708 6.292C20.8958 6.47977 21.0013 6.73445 21.0013 7C21.0013 7.26555 20.8958 7.52023 20.708 7.708L18 10.414V14.268L21.338 12.342L22.328 8.642C22.3621 8.51514 22.4209 8.39625 22.501 8.29212C22.5811 8.18799 22.6809 8.10065 22.7948 8.03509C22.9086 7.96953 23.0343 7.92704 23.1645 7.91004C23.2948 7.89303 23.4271 7.90186 23.554 7.936C23.6809 7.97014 23.7997 8.02894 23.9039 8.10903C24.008 8.18912 24.0954 8.28894 24.1609 8.40278C24.2265 8.51663 24.269 8.64227 24.286 8.77254C24.303 8.9028 24.2941 9.03514 24.26 9.162L23.786 10.926L26.026 9.634C26.2556 9.50348 26.5274 9.46906 26.7823 9.53825C27.0371 9.60744 27.2542 9.77462 27.3863 10.0033C27.5183 10.232 27.5545 10.5036 27.487 10.7589C27.4195 11.0142 27.2538 11.2325 27.026 11.366L24.786 12.658L26.554 13.132C26.6809 13.1661 26.7997 13.2249 26.9039 13.305C27.008 13.3851 27.0954 13.4849 27.1609 13.5988C27.2265 13.7126 27.269 13.8383 27.286 13.9685C27.303 14.0988 27.2941 14.2311 27.26 14.358C27.2259 14.4849 27.1671 14.6037 27.087 14.7079C27.0069 14.812 26.9071 14.8994 26.7932 14.9649C26.6794 15.0305 26.5537 15.073 26.4235 15.09C26.2932 15.107 26.1609 15.0981 26.034 15.064L22.338 14.074L19 16L22.338 17.926L26.036 16.936C26.1636 16.8996 26.2973 16.889 26.429 16.9048C26.5608 16.9206 26.6882 16.9624 26.8036 17.0279C26.9191 17.0934 27.0203 17.1812 27.1015 17.2863C27.1826 17.3913 27.2421 17.5114 27.2763 17.6396C27.3106 17.7679 27.3189 17.9017 27.3009 18.0332C27.283 18.1647 27.239 18.2913 27.1716 18.4056C27.1042 18.5199 27.0146 18.6197 26.9083 18.6991C26.8019 18.7785 26.6808 18.8359 26.552 18.868L24.786 19.342L27.026 20.634C27.2538 20.7676 27.4195 20.9858 27.487 21.2411C27.5545 21.4964 27.5183 21.768 27.3863 21.9967C27.2542 22.2254 27.0371 22.3926 26.7823 22.4618C26.5274 22.5309 26.2556 22.4965 26.026 22.366L23.786 21.074L24.26 22.84C24.2964 22.9676 24.307 23.1013 24.2912 23.233C24.2755 23.3648 24.2336 23.4922 24.1681 23.6076C24.1026 23.7231 24.0148 23.8243 23.9098 23.9055C23.8047 23.9866 23.6846 24.0461 23.5564 24.0803C23.4281 24.1146 23.2943 24.1229 23.1628 24.105C23.0313 24.087 22.9047 24.043 22.7904 23.9756C22.6761 23.9082 22.5763 23.8186 22.4969 23.7123C22.4175 23.6059 22.3601 23.4848 22.328 23.356L21.34 19.66L18 17.732V21.586L20.708 24.292C20.801 24.385 20.8747 24.4954 20.925 24.6168C20.9754 24.7383 21.0013 24.8685 21.0013 25C21.0013 25.1315 20.9754 25.2617 20.925 25.3832C20.8747 25.5046 20.801 25.615 20.708 25.708C20.615 25.801 20.5046 25.8747 20.3832 25.9251C20.2617 25.9754 20.1315 26.0013 20 26.0013C19.8685 26.0013 19.7383 25.9754 19.6168 25.9251C19.4954 25.8747 19.385 25.801 19.292 25.708L18 24.414V27C18 27.2652 17.8946 27.5196 17.7071 27.7071C17.5196 27.8946 17.2652 28 17 28C16.7348 28 16.4804 27.8946 16.2929 27.7071C16.1054 27.5196 16 27.2652 16 27V5C16 4.73478 16.1054 4.48043 16.2929 4.29289C16.4804 4.10536 16.7348 4 17 4Z" fill="#5C6173" />
                            </svg>
                        </span>
                        <span class="checkbox-label">Air Condition</span>
                    </span>
                </label>
            </div>
            <!-- next checkbox -->

            <div class="checkbox">
                <label class="checkbox-wrapper">
                    <input type="checkbox" class="checkbox-input" />
                    <span class="checkbox-tile">
                        <span class="checkbox-icon">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_515_2503)">
                                    <path d="M5.5 27C5.5 26.7348 5.60536 26.4804 5.79289 26.2929C5.98043 26.1054 6.23478 26 6.5 26H26.5C26.7652 26 27.0196 26.1054 27.2071 26.2929C27.3946 26.4804 27.5 26.7348 27.5 27C27.5 27.2652 27.3946 27.5196 27.2071 27.7071C27.0196 27.8946 26.7652 28 26.5 28H6.5C6.23478 28 5.98043 27.8946 5.79289 27.7071C5.60536 27.5196 5.5 27.2652 5.5 27ZM28.482 6L28.53 6.002C28.9037 6.02744 29.269 6.12454 29.606 6.288C29.8487 6.40096 30.0571 6.57625 30.21 6.796C30.344 6.996 30.5 7.35 30.5 8V19.982L30.498 20.03C30.4724 20.4037 30.3753 20.7689 30.212 21.106C30.099 21.3487 29.9237 21.557 29.704 21.71C29.504 21.844 29.15 22 28.5 22H4.518L4.47 21.998C4.09634 21.9724 3.73107 21.8753 3.394 21.712C3.15135 21.599 2.94295 21.4237 2.79 21.204C2.656 21.004 2.5 20.65 2.5 20V8.018L2.502 7.97C2.52744 7.59631 2.62454 7.231 2.788 6.894C2.90104 6.65135 3.07631 6.44295 3.296 6.29C3.496 6.156 3.85 6 4.5 6H28.482ZM28.5 4H4.5C0.5 4 0.5 8 0.5 8V20C0.5 24 4.5 24 4.5 24H28.5C32.5 24 32.5 20 32.5 20V8C32.5 4 28.5 4 28.5 4Z" fill="#5C6173" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_515_2503">
                                        <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                                    </clipPath>
                                </defs>
                            </svg>

                        </span>
                        <span class="checkbox-label">Air Condition</span>
                    </span>
                </label>
            </div>
            <!-- next checkbox -->
        </div>

        <div class="checkbox-2-container">
            <div class="checkbox-container">
                <div class="checkbox">
                    <label class="checkbox-wrapper">
                        <input type="checkbox" class="checkbox-input" />
                        <span class="checkbox-tile">
                            <span class="checkbox-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.49701 5.00001L8.5 5L23.503 5C24.4296 5.00278 25.3175 5.3721 25.9727 6.02732C26.6279 6.68253 26.9972 7.5704 27 8.49702L27 8.5L27 14.4215C27.566 14.6696 28.0867 15.0225 28.5321 15.4679C29.4684 16.4042 29.9961 17.673 30 18.997L30 19L30 26C30 26.5523 29.5523 27 29 27C28.4477 27 28 26.5523 28 26V19.0014C27.9972 18.2062 27.6801 17.4444 27.1179 16.8821C26.5555 16.3198 25.7936 16.0027 24.9984 16H7.00156C6.20635 16.0027 5.44447 16.3198 4.88214 16.8821C4.31981 17.4445 4.00271 18.2064 4 19.0016V26C4 26.5523 3.55228 27 3 27C2.44772 27 2 26.5523 2 26V19L2 18.997C2.00392 17.673 2.53165 16.4042 3.46793 15.4679C3.91333 15.0225 4.43396 14.6696 5 14.4215V8.49702C5.00277 7.5704 5.37209 6.68253 6.02731 6.02732C6.68253 5.3721 7.5704 5.00278 8.49701 5.00001ZM7 14H25V8.50153C24.9984 8.1038 24.8397 7.72279 24.5585 7.44153C24.2772 7.16023 23.8961 7.00154 23.4983 7H8.50168C8.1039 7.00154 7.72283 7.16023 7.44153 7.44153C7.16022 7.72283 7.00153 8.10391 7 8.50169V14Z" fill="#5C6173" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.9972 11L9 11L14.0028 11C14.7419 11.0021 15.4523 11.2763 16 11.767C16.5477 11.2763 17.2581 11.0021 17.9972 11L18 11L23.0028 11C23.797 11.0022 24.5581 11.3187 25.1197 11.8803C25.6813 12.4419 25.9978 13.203 26 13.9972L26 14L26 15C26 15.5523 25.5523 16 25 16C24.4477 16 24 15.5523 24 15V14.0017C23.999 13.7363 23.8931 13.4822 23.7055 13.2945C23.5178 13.1069 23.2637 13.0011 22.9984 13H18.0016C17.7363 13.0011 17.4822 13.1069 17.2945 13.2945C17.1069 13.4822 17.001 13.7363 17 14.0017V15C17 15.5523 16.5523 16 16 16C15.4477 16 15 15.5523 15 15V14.0017C14.999 13.7363 14.8931 13.4822 14.7055 13.2945C14.5178 13.1069 14.2637 13.0011 13.9984 13H9.00165C8.73633 13.0011 8.48216 13.1069 8.29453 13.2945C8.1069 13.4822 8.00104 13.7363 8 14.0017V15C8 15.5523 7.55229 16 7 16C6.44772 16 6 15.5523 6 15V13.9972C6.00222 13.203 6.31872 12.4419 6.88032 11.8803C7.44192 11.3187 8.20298 11.0022 8.9972 11ZM4.4971 23L4.5 23L27.5029 23C28.1646 23.0019 28.7986 23.2656 29.2665 23.7335C29.7344 24.2014 29.9981 24.8354 30 25.4971L30 25.5L30 26C30 26.5523 29.5523 27 29 27C28.4477 27 28 26.5523 28 26V25.5017C27.9993 25.3689 27.9462 25.2417 27.8523 25.1477C27.7583 25.0537 27.631 25.0006 27.4981 25H4.50192C4.36901 25.0006 4.24172 25.0537 4.14772 25.1477C4.05374 25.2417 4.00067 25.369 4 25.5018V26C4 26.5523 3.55228 27 3 27C2.44772 27 2 26.5523 2 26V25.5L2 25.4971C2.00193 24.8354 2.26563 24.2014 2.73351 23.7335C3.20139 23.2656 3.83542 23.0019 4.4971 23Z" fill="#5C6173" />
                                </svg>


                            </span>
                            <span class="checkbox-label">Bed</span>
                        </span>
                    </label>
                </div>
                <!-- next checkbox -->

                <div class="checkbox">
                    <label class="checkbox-wrapper">
                        <input type="checkbox" class="checkbox-input" />
                        <span class="checkbox-tile">
                            <span class="checkbox-icon">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M27.8878 12.7519C27.9583 12.5918 27.9965 12.4193 28.0002 12.2445C28.0039 12.0696 27.9732 11.8957 27.9096 11.7327C27.8461 11.5697 27.7511 11.4209 27.63 11.2947C27.5089 11.1685 27.364 11.0674 27.2038 10.9972L9.7705 3.32253C8.44384 2.73853 6.8105 3.39053 6.24384 4.71186L3.29717 11.5839C3.01995 12.2339 3.01195 12.9674 3.27492 13.6233C3.5379 14.2792 4.05035 14.804 4.69984 15.0825L12.7505 18.5332L11.0972 22.6665H5.33317V18.6665H2.6665V29.3332H5.33317V25.3332H11.0972C12.1945 25.3332 13.1665 24.6745 13.5718 23.6559L15.2012 19.5839L22.1412 22.5572C22.4644 22.6959 22.8293 22.7013 23.1564 22.5722C23.4836 22.443 23.7465 22.1899 23.8878 21.8679L24.3038 20.9212L26.5718 21.8279L29.2385 15.1612L27.1905 14.3439L27.8878 12.7519ZM21.9758 19.5865L5.7505 12.6332L8.6945 5.76386L24.9105 12.9025L21.9758 19.5865Z" fill="#5C6173" />
                                </svg>

                            </span>
                            <span class="checkbox-label">CCTV</span>
                        </span>
                    </label>
                </div>
                <!-- next checkbox -->
            </div>

        </div>

        <button class="btn btn-primary btn-fill" type="submit">Save
        </button>

    </div>




</body>

</html>