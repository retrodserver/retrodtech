<section id="tronixcore_blog_post_widget-3" class="widget footer-widget-post-with-thum eco-custom-widget">
    <h2 class="widget-title"><span>Recent Post</span></h2>
    <ul class="tronixcore-widget-post-thum">
<?php
$servername = "localhost";
$username = "vwqmwweafd";
$password = "Y2AQxDxzSP";
$dbname="vwqmwweafd";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = 'SELECT * FROM blog WHERE status=1';
$result = mysqli_query($conn, $sql);
$numOfRows = mysqli_num_rows($result);  

if($numOfRows!=0){
    while($row = mysqli_fetch_array($result)){
        ?>
        <li class="d-flex mb-3 gap-2">
            <img width="150" height="150" src="admin/login/<?php echo $row['file']?>"
                class="attachment-thumbnail size-thumbnail wp-post-image rounded" alt="" decoding="async" loading="lazy" />
            <div class="tronixcore-widget-post-thum-content">
                <a class="recent-post-title" href="https://www.linkedin.com/posts/retrod-technologies_hospitalityhumor-nextgentravelers-genzhospitality-activity-7086972855157964801-p2wk?utm_source=share&utm_medium=member_desktop" target="_blank"><?php echo $row['title']?>&hellip;</a>
                <div class="recent-widget-date">
                    <i class="far fa-calendar-alt"></i><?php echo ' '.date("d M Y", strtotime($row['date'])); ?>
                </div>
            </div>
        </li>
       


        <?php
    }
}

?>
    </ul>
</section>
