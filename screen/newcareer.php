

<div class="fulbox" style="position:relative;">
<div class="content" style="position: absolute;  top: 38%;  z-index: 1;  width: 100%; text-align: center;">
<h3 style="color:white;">Be a part of Revolutionizing</h3>
<p style="color:white;">With the sharpest minds in town, we're crafting history every single day
</p>
</div>
<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/909400095?h=0d209b4614&autoplay=1&title=0&byline=0&portrait=0&muted=1&controls=0&loop=1" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>

</div><script src="https://player.vimeo.com/api/player.js"></script>

</div>
<!-- Start -->
<section>


    <div class="container mt-100 mt-60">
        <div class="row justify-content-center mb-4 pb-2">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="title mb-3" style="font-size: xxx-large !important;">Current Job Openings</h2>

                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row g-4 mt-0">
            <?php
            include './admin/include/dbcon.php';
            $sql = "SELECT * FROM jobcareer where status=1";
            $result = mysqli_query($conn, $sql);
            $numofrows = mysqli_num_rows($result);
            if ($numofrows > 0) {
                while ($row = mysqli_fetch_array($result)) {
       
            ?>
                    <div class="col-12">
                        <div class="job-post job-post-list rounded shadow p-4 d-md-flex align-items-center justify-content-between position-relative">
                            <div class="" style="Display: flex;">
                                <img src="img/working-with-laptop.png" class="avatar avatar-small rounded shadow p-1 bg-white" alt="" >

                                <div class="ms-3" style="margin-top: 40px;">
                                    <a href="jobform.php?slug=<?php echo $row['slug']?>" class="h5 title text-dark"><?php echo $row['title'];?></a>
                                    <p></p>
                                </div>
                            </div>

                       

                            <div class="">
                                <span class="d-flex fw-medium mt-md-2 jobopenings">Job Openings:- <?php echo $row['jobopenings']?></span>
                                <span class="d-flex fw-medium mt-md-2 modeofjob">Mode:- <?php echo $row['mode']?></span>
                                <span class="d-flex fw-medium mt-md-2 salary">Salary:- Negotiable</span>
                            </div>

                            <div class="mt-3 mt-md-0">

                                <a href="jobform.php?slug=<?php echo $row['slug']?>" class="btn btn-sm btn-primary w-full ms-md-1">Apply Now</a>
                       
                            </div>
                        </div>
                    </div><!--end col-->
            <?php
                }
            }
            ?>

        </div><!--end row-->
    </div><!--end container-->


</section><!--end section-->
