<?php
$sql = "SELECT * FROM contacts ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$Email = $row["Email"];
$Phonenumber=$row['Phonenumber'];
$PhoneNumber2= $row['PhoneNumber2'];
$Location=$row['Location'];
$WorkingHours=$row['WorkingHours'];

?>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-0458fdb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="0458fdb" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581e5d0"
            data-id="581e5d0" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-d6081d4 elementor-widget elementor-widget-icon_box"
                    data-id="d6081d4" data-element_type="widget" data-widget_type="icon_box.default">
                    <div class="elementor-widget-container">
                        <div class="tronix-icon-box-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                                        <div class="tronix-icon-box">
                                            <div class="tronix-icon">
                                                <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                            </div>
                                            <div class="icon-box-content">
                                                <div class="icon-box-title-label"> Phone Number </div>
                                                <h6 class="icon-box-title">
                                                    <a href="tel:+91-811-803-1833"><?php echo $Phonenumber;?></a>
                                                    <a href="tel:+91-824-964-5305"><?php echo $Phonenumber2;?></a>
                                                </h6>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                                        <div class="tronix-icon-box">
                                            <div class="tronix-icon">
                                                <i aria-hidden="true" class="far fa-envelope"></i>
                                            </div>
                                            <div class="icon-box-content">
                                                <div class="icon-box-title-label"> Email Address </div>
                                                <h6 class="icon-box-title">
                                                    <a href="mailto:support@retrodtech.com">support@retrodtech.com</a>
                                                    <a href="mailto:hr@retrodtech.com">hr@retrodtech.com</a>
                                                </h6>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 ">
                                        <div class="tronix-icon-box">
                                            <div class="tronix-icon">
                                                <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                            </div>
                                            <div class="icon-box-content">
                                                <div class="icon-box-title-label"> Office Address </div>
                                                <h6 class="icon-box-title">
                                                    <a
                                                        href="https://www.google.com/maps/place/Retrod/@20.2890601,85.8536273,16z/data=!3m1!5s0x3a190a04febf96e9:0x77d5bab4c211ec15!4m6!3m5!1s0x3a18ad6b3fbb91ef:0x2ec03d75e37d910e!8m2!3d20.2913545!4d85.8560735!16s%2Fg%2F11pwstvqc0?entry=ttu">
                                                        <?php echo $Location?></a>
                                                </h6>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>