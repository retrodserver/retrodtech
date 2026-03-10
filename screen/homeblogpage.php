<!-- <style>
@media only screen and (max-width: 584px) {
    .elementor-container .elementor-column .elementor-widget-wrap .blogbox {
        width: 85%;
        margin: 0 auto;
    }
}

.news-block-one {
    height: 98% !important;
}

.news-inner-box {
    height: 98% !important;
}
</style>
<section
    class="elementor-section elementor-top-section elementor-element elementor-element-f3d90b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="f3d90b9" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ee79e0c"
            data-id="ee79e0c" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-8532633 elementor-widget elementor-widget-tronix_title"
                    data-id="8532633" data-element_type="widget" data-widget_type="tronix_title.default">
                    <div class="elementor-widget-container">
                        <div class="tronix-section-title-wrapper">
                            <div class="container">
                                <div class="tronix-section-title-content">
                                    <span class="tronix-section-small-title">
                                        New Updates </span>
                                    <h2 class="tronix-section-title">
                                        Latest Blog Updates </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-58c3b66 elementor-widget elementor-widget-tronix_blog_one blogbox"
                    data-id="58c3b66" data-element_type="widget" data-widget_type="tronix_blog_one.default">
                    <div class="elementor-widget-container">
                        <div class="tronix-blog-wrapper">
                            <div class="tronix-blog-section-inner">
                                <div class="container">
                                    <div class="row">
                                        <?php
                                        include('admin/include/dbcon.php');

                                        $sql = 'SELECT * FROM blog WHERE status=1 ORDER BY id DESC LIMIT 2';
                                        $result = mysqli_query($conn, $sql);

                                        $i = 0;
                                        while ($row = mysqli_fetch_array($result)) {
                                            $content = str_replace(array('rn', '\n', '\r\n'), '', stripslashes($row['content']));

                                            // Replace <div> with <h5>
                                            $content = str_replace('<div>', '<p>', $content);
                                            $content = str_replace('</div>', '</p>', $content);
                                            
                                            // Replace <strong> with <p>
                                            $content = str_replace('<strong>', '<h5>', $content);
                                            $content = str_replace('</strong>', '</h5>', $content);

                                            $content = str_replace('<div', '<p', $content);
                                            
                                            
                                            
                                            ?>


                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                            <div class="news-block-one">
                                                <div class="news-inner-box">
                                                    <div class="news-image-one">
                                                        <img width="773" height="500"
                                                            src="admin/login/<?php echo $row["file"]?>"
                                                            class="img-responsive wp-post-image" alt="retrod_blogs"
                                                            decoding="async" loading="lazy" srcset=""
                                                            sizes="(max-width: 773px) 100vw, 773px" />

                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info clearfix">
                                                            <li><i class="far fa-calendar-alt"></i>
                                                                <?php echo $row['date']?> </li>
                                                            <li><i class="far fa-folder-open"></i> <a
                                                                    href="https://www.linkedin.com/pulse/where-tech-meets-heart-finding-balance-modern-hospitality%3FtrackingId=wJxVgCrnHb9oDr9Cn9oJSQ%253D%253D/?trackingId=wJxVgCrnHb9oDr9Cn9oJSQ%3D%3D"
                                                                    target="_blank" rel="category tag">Hotel News</a>
                                                            </li>

                                                        </ul>
                                                        <h4><?php echo $row['title'];?></h4>
                                                        <div class="tronix-blog-dec">
                                                            "<?php echo substr($content,0,400)?>"</div>
                                                        <div class="news-button">
                                                            <a class="theme-button"
                                                                href="https://retrodtech.com/ExpBlog.php?slug=<?php echo $row['slug'] ?> "
                                                                target="_blank">

                                                                Read More<i class="fas fa-arrow-right"></i></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                                            <div class="news-block-one">
                                                <div class="news-inner-box">
                                                    <div class="news-image-one">
                                                        <img width="773" height="500"
                                                            src="admin/login/<?php echo $row["file"]?>"
                                                            class="img-responsive wp-post-image" alt="retrod_blogs"
                                                            decoding="async" loading="lazy" srcset=""
                                                            sizes="(max-width: 773px) 100vw, 773px" />

                                                    </div>
                                                    <div class="lower-content">
                                                        <ul class="post-info clearfix">
                                                            <li><i class="far fa-calendar-alt"></i>
                                                                <?php echo $row['date']?> </li>
                                                            <li><i class="far fa-folder-open"></i> <a
                                                                    href="https://www.linkedin.com/pulse/where-tech-meets-heart-finding-balance-modern-hospitality%3FtrackingId=wJxVgCrnHb9oDr9Cn9oJSQ%253D%253D/?trackingId=wJxVgCrnHb9oDr9Cn9oJSQ%3D%3D"
                                                                    target="_blank" rel="category tag">Hotel News</a>
                                                            </li>

                                                        </ul>
                                                        <h4><?php echo $row['title'];?></h4>
                                                        <div class="tronix-blog-dec">
                                                            "<?php echo substr($content,0,400)?>"</div>
                                                        <div class="news-button">
                                                            <a class="theme-button"
                                                                href="https://retrodtech.com/ExpBlog.php?slug=<?php echo $row['slug'] ?> "
                                                                target="_blank">

                                                                Read More<i class="fas fa-arrow-right"></i></i>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $i++;
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more_info">
        <a class="whatsapp_btn" href="blog.php" target="_blank">Explore Further</a>
    </div>
</section> -->