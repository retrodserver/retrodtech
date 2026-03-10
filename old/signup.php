<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Retrod Sign Up ">
  <meta name="keywords" content="retrod, retrod tech, retrodtech">
  <meta name="author" content="Retrod">
    <title>Sign Up || Retrodtech.com</title>
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
                        <img src="img/signup.png" alt="">
                    </div>
                    <div class="auth-column-60 auth-form">
                        <h1 class="form-heading">sign up</h1>
                        <p>Let us know more about your hotel, Sign up now.</p>
                        <p id="error-field" class="error-msg">All fields are required!</p>
                        <form autocomplete="off">
                            <div id="form-section-1">
                                <div class="input-control">
                                    <svg class="input-icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="20px" width="20px" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    </svg>
                                    <input type="text" id="name" class="user-input" placeholder="Name*" spellcheck="false" autocomplete="off" required>
                                </div>
                                <div class="input-control">
                                    <svg class="input-icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="20px" width="20px" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"></path>
                                    </svg>
                                    <input type="email" id="email" class="user-input" placeholder="Email*" spellcheck="false" autocomplete="off" required>
                                </div>
                                <div class="input-control">
                                    <svg class="input-icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" height="20px" width="20px" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path>
                                    </svg>
                                    <input type="number" id="mobile" class="user-input" placeholder="Mobile*" spellcheck="false" autocomplete="off" required>
                                </div>

                                <div class="input-control nav-btns">
                                    <div class="nav-link">
                                        <!-- this link is not necessary -->
                                    </div>
                                    <div class="action-btn div-btn" id="goto-2">Next Step &rsaquo;&rsaquo;</div>
                                </div>
                            </div>
                            <div id="form-section-2">
                                <div class="input-control">
                                    <svg class="input-icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20px" width="20px" xmlns="https://www.w3.org/2000/svg">
                                        <g>
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path d="M17 19h2v-8h-6v8h2v-6h2v6zM3 19V4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v5h2v10h1v2H2v-2h1zm4-8v2h2v-2H7zm0 4v2h2v-2H7zm0-8v2h2V7H7z"></path>
                                        </g>
                                    </svg>
                                    <input type="text" id="hotel_name" class="user-input" placeholder="Hotel Name*" spellcheck="false" autocomplete="off" required>
                                </div>

                                <div class="input-control">
                                    <svg class="input-icon" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20px" width="20px" xmlns="https://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                        <path d="M16.5 12h-9c-.55 0-1 .45-1 1v1h11v-1c0-.55-.45-1-1-1zM7.25 8.5h4v2h-4zM12.75 8.5h4v2h-4z"></path>
                                        <path d="M20 2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 15h-1.5v-1.5h-11V17H5v-3.83c0-.66.25-1.26.65-1.72V9c0-1.1.9-2 2-2H11c.37 0 .72.12 1 .32.28-.2.63-.32 1-.32h3.35c1.1 0 2 .9 2 2v2.45c.4.46.65 1.06.65 1.72V17z"></path>
                                    </svg>
                                    <input type="number" id="no_rooms" class="user-input" placeholder="No of rooms*" spellcheck="false" autocomplete="off" required>
                                </div>
                                <div class="input-control">
                                    <svg class="input-icon" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1" viewBox="0 0 16 16" height="20px" width="20px" xmlns="https://www.w3.org/2000/svg">
                                        <path d="M8 0c-2.761 0-5 2.239-5 5 0 5 5 11 5 11s5-6 5-11c0-2.761-2.239-5-5-5zM8 8c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"></path>
                                    </svg>
                                    <input type="text" id="address" class="user-input" placeholder="Address*" spellcheck="false" autocomplete="off" required>
                                </div>
                                <div class="input-control nav-btns">
                                    <div class="action-btn div-btn" id="goto-1">&lsaquo;&lsaquo; Go Back</div>
                                    <div class="action-btn div-btn" id="continue">Sign Up</div>
                                </div>

                            </div>

                            <div id="form-section-3">
                                <div class="wrapper"> <svg class="checkmark" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                    </svg>
                                </div>
                                <p class="center-text">Successfully Submitted</p>
                            </div>



                            <div class="input-control nav-btns">
                                <div class="nav-link">
                                    <!-- this link is not necessary -->
                                </div>
                                <div class="nav-link">
                                    <p>Start Saving Your Commission From Today.</a></p>
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

    <script>

$(document).ready(function() {
    $('#continue').on('click', function(event) {
        event.preventDefault();
        if ($('#hotel_name').val() && $('#no_rooms').val() && $('#address').val()) {
            var data = {
                'name': $('#name').val(),
                'email': $('#email').val(),
                'mobile': $('#mobile').val(),
                'hotel_name': $('#hotel_name').val(),
                'no_rooms': $('#no_rooms').val(),
                'address': $('#address').val()
            };
            $.ajax({
                url: "form-submit.php",
                method: "post",
                data: data,
                dataType: "text",
                success: function(strMessage) {
                    if (strMessage == 1) {
                        $('#form-section-1').hide();
                        $('#form-section-2').hide();
                        $('#form-section-3').show();
                    } else {
                        $('#error-field').text("Error: Unable to save details!");
                        $('#error-field').show();
                    }
                }
            });
        } else {
            $('#error-field').text('All fields are required!');
            $('#error-field').show();
        }
    });
});
</script>



</body>

</html>