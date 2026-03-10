<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In || Retrodtech.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <section id="navBar">
        <?php include('screen/navbar.php') ?>
    </section>


    <section id="loginSection">
        <div class="container">
        <div class="auth-container">
            <div class="auth-row">
                <div class="auth-column-40">
                    <img src="img/login.png" alt="">
                </div>
                <div class="auth-column-60 auth-form">
                    <h1 class="form-heading">Log in</h1>
                    <p>Please login to continue</p>
                    <form autocomplete="off">
                        <div class="input-control">
                            <svg class="input-icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="https://www.w3.org/2000/svg">
                                <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"></path>
                            </svg>
                            <input type="email" class="user-input" placeholder="Email*" spellcheck="false" autocomplete="off" required>
                        </div>
                        <div class="input-control">
                            <svg class="input-icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="20px" width="20px" xmlns="https://www.w3.org/2000/svg">
                                <path d="M832 464h-68V240c0-70.7-57.3-128-128-128H388c-70.7 0-128 57.3-128 128v224h-68c-17.7 0-32 14.3-32 32v384c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V496c0-17.7-14.3-32-32-32zM540 701v53c0 4.4-3.6 8-8 8h-40c-4.4 0-8-3.6-8-8v-53a48.01 48.01 0 1 1 56 0zm152-237H332V240c0-30.9 25.1-56 56-56h248c30.9 0 56 25.1 56 56v224z"></path>
                            </svg>
                            <input type="text" class="user-input" placeholder="Password*" spellcheck="false" autocomplete="off" required>
                        </div>
                        <div class="input-control nav-btns">
                            <div class="nav-link">
                                <p><a href="#">Forgot Password?</a></p>
                            </div>
                            <input type="submit" class="action-btn" value="Login">
                        </div>
                        <div class="input-control nav-btns">
                            <div class="nav-link">
                                <!-- this link is not necessary -->
                            </div>
                            <div class="nav-link">
                                <p>New Here?&nbsp;<a href="signup.php">Create a new account!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php include('screen/footer.php') ?>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="js/script.js"></script>



</body>

</html>