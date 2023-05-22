<?php

$user_id = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chats</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="/cr_demo/css/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <nav>
        <div class="nav-back">
            <a href="./chats_home.php">
                <i class="bi bi-chevron-left"></i>
            </a>
        </div>
        <div class="nav-title">
            <p class="title">Jano</p>
            <p class="smaller-text">Tya Els Boarding House</p>
        </div>
        <div class="nav-action">
            <i class="bi bi-three-dots-vertical"></i>
        </div>

    </nav>


    <section class="container">
        <!-- <div class="notif-container">
            <div class="notif-msg">
                <div class="notif-msg-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="12" fill="#5893EB" fill-opacity="0.1" />
                        <g clip-path="url(#clip0_537_2413)">
                            <path d="M12 19.875C9.91142 19.875 7.90838 19.0453 6.43153 17.5685C4.95468 16.0916 4.125 14.0886 4.125 12C4.125 9.91142 4.95468 7.90838 6.43153 6.43153C7.90838 4.95468 9.91142 4.125 12 4.125C14.0886 4.125 16.0916 4.95468 17.5685 6.43153C19.0453 7.90838 19.875 9.91142 19.875 12C19.875 14.0886 19.0453 16.0916 17.5685 17.5685C16.0916 19.0453 14.0886 19.875 12 19.875ZM12 21C14.3869 21 16.6761 20.0518 18.364 18.364C20.0518 16.6761 21 14.3869 21 12C21 9.61305 20.0518 7.32387 18.364 5.63604C16.6761 3.94821 14.3869 3 12 3C9.61305 3 7.32387 3.94821 5.63604 5.63604C3.94821 7.32387 3 9.61305 3 12C3 14.3869 3.94821 16.6761 5.63604 18.364C7.32387 20.0518 9.61305 21 12 21Z" fill="#5893EB" />
                            <path d="M10.8773 15.375C10.8773 15.2273 10.9064 15.081 10.9629 14.9445C11.0194 14.808 11.1023 14.684 11.2068 14.5795C11.3112 14.475 11.4352 14.3922 11.5717 14.3356C11.7082 14.2791 11.8545 14.25 12.0023 14.25C12.15 14.25 12.2963 14.2791 12.4328 14.3356C12.5693 14.3922 12.6933 14.475 12.7978 14.5795C12.9022 14.684 12.9851 14.808 13.0416 14.9445C13.0982 15.081 13.1273 15.2273 13.1273 15.375C13.1273 15.6734 13.0087 15.9595 12.7978 16.1705C12.5868 16.3815 12.3006 16.5 12.0023 16.5C11.7039 16.5 11.4177 16.3815 11.2068 16.1705C10.9958 15.9595 10.8773 15.6734 10.8773 15.375ZM10.9875 8.61938C10.9725 8.47746 10.9876 8.33396 11.0316 8.19822C11.0757 8.06247 11.1478 7.9375 11.2432 7.83142C11.3387 7.72534 11.4554 7.64052 11.5858 7.58245C11.7162 7.52439 11.8573 7.49438 12 7.49438C12.1427 7.49438 12.2838 7.52439 12.4142 7.58245C12.5446 7.64052 12.6613 7.72534 12.7568 7.83142C12.8522 7.9375 12.9244 8.06247 12.9684 8.19822C13.0125 8.33396 13.0275 8.47746 13.0125 8.61938L12.6188 12.5648C12.6055 12.7198 12.5346 12.8641 12.42 12.9694C12.3055 13.0746 12.1556 13.1329 12 13.1329C11.8445 13.1329 11.6946 13.0746 11.58 12.9694C11.4654 12.8641 11.3945 12.7198 11.3813 12.5648L10.9875 8.61938Z" fill="#5893EB" />
                        </g>
                        <defs>
                            <clipPath id="clip0_537_2413">
                                <rect width="18" height="18" fill="white" transform="translate(3 3)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <p><span class="title">Jano</span> is requesting a rental for this unit.</p>
            </div>
            <div class="notif-actions">
                <button class="btn btn-outlined-danger btn-fill">Reject</button>
                <button class="btn btn-primary btn-fill">Confirm</button>
            </div>
        </div> -->
        <div class="chat-content-container" id="chat-content-container">

            <div class="chat-content" id="chat-content">

                <div class="recipient-container">
                    <div class="chat-img">
                        <img src="/cr_demo/assets/images/accounts/user1/user1.png" alt="">
                    </div>
                    <div class="chat-message">Titikman</div>
                </div>
                <div class="recipient-container">
                    <div class="chat-img">
                        <img src="/cr_demo/assets/images/accounts/user1/user1.png" alt="">
                    </div>
                    <div class="chat-message">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                </div>
                <div class="user-container">
                    <div class="chat-message">Hi dear</div>
                    <div class="chat-img">
                        <img src="/cr_demo/assets/images/accounts/user1/user1.png" alt="">
                    </div>
                </div>
                <div class="user-container">
                    <div class="chat-message">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius facilis neque dolor tempora dignissimos porro pariatur, autem a ullam error cumque mollitia temporibus voluptatibus, deserunt accusamus ducimus earum laudantium maiores?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius facilis neque dolor tempora dignissimos porro pariatur, autem a ullam error cumque mollitia temporibus voluptatibus, deserunt accusamus ducimus earum laudantium maiores?</div>
                    <div class="chat-img">
                        <img src="/cr_demo/assets/images/accounts/user1/user1.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="chat-box">

            <button class="btn btn-plain" id="btn-file">
                <i class="bi bi-camera"></i>
            </button>
            <input required="" type="text" name="" placeholder="Send a message..." id="message-input">
            <button class="btn btn-plain" id="btn-send" onclick="sendMessage(<?= $user_id ?>)" type="submit">
                <i class="bi bi-send-fill"></i>
            </button>
        </div>
    </section>
</body>

</html>

<script>
    const chat_ele = $(".chat-content")
    const chat_msg = $("#message-input")

    const scrollToBottom = () => {
        var objDiv = document.getElementById("chat-content-container");
        objDiv.scrollTop = objDiv.scrollHeight;
    }


    scrollToBottom()

    const sendMessage = (id) => {


        const msg = chat_msg.val()
        if (msg.length > 0) {

            chat_ele.append(`
        <div class="user-container">
                <div class="chat-message">${chat_msg.val()}</div>
                <div class="chat-img">
                    <img src="/cr_demo/assets/images/accounts/user1/user1.png" alt="">
                </div>
            </div>`)

            chat_msg.val("")
            scrollToBottom()
        }

    }
</script>