<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Retrod Contact">
      <meta name="keywords" content="retrod, retrod tech, retrodtech">
      <meta name="author" content="Retrod">
    <title>Contact || Retrodtech.com</title>
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

    <section id="headerPage">
        <h4>Comments? Queries? or want to start working with us?</h4>
        <h6>Contact Us Now!</h6>
    </section>

    <section id="contactSection">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="contactContact">
                        <h2>Head Office</h2>
                        <p><span>441, 4th Floor, Esplanade One Mall, Rasulgarh, Bhubaneswar, Odisha 751010</span></p>

                        <p><label>Support</label><a href="tel:8984896499"><span>+91-8984-896-499</span></a> <br/> <a href="tel:8763816022"><span>+91-876-381-6022</span></a></p>
                        <p><label>Email</label><a href="mailto:support@retrodtech.com"><span>support@retrodtech.com</span></a></p>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3742.2144178750123!2d85.85393911423257!3d20.2913901179177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1667469381348!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class="col-md-5 offset-md-1 col-sm-12">
                    <div class="contactForm">
                        <form action="">
                            <h4>Get In Touch</h4>
                            <div class="form-group">
                                <label for="name">Name <span>*</span></label>
                                <input class="form-control" type="text" name="name" id="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email <span>*</span></label>
                                <input class="form-control" type="text" name="email" id="email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone <span>*</span></label>
                                <input class="form-control" type="text" name="phone" id="phone" required>
                            </div>

                            <div class="form-group">
                                <label for="country">Country <span>*</span></label>
                                <select class="form-control" name="country" id="country" required>
                                    <option value="">Please select *</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="message">Message <span>*</span></label>
                                <textarea class="form-control" name="message" id="message" cols="30" rows="5"></textarea>
                            </div>

                            <button type="submit" class="form-control rbtn">Let's Talk</button>

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
        $.ajax({
            url:'screen/countries.php',
            type:'post',
            success:function (data) {
               $('#country').append(data);
            }
        });
    </script>


</body>

</html>