<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../include/dbcon.php';

if ($_SESSION['loginid'] != 1) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $url = $_POST['url'];
    $slug = $_POST['slug'];
    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "blog/" . $filename;
    move_uploaded_file($tempname, $folder);
    if ($title != "" && $content != "" && $date != "" && $url != "" && $filename != "") {
        // Assuming $conn is your mysqli connection

        // Your input data
        $title = mysqli_real_escape_string($conn, $title);  // Using mysqli_real_escape_string to prevent SQL injection
        $content = mysqli_real_escape_string($conn, $content);
        $date = mysqli_real_escape_string($conn, $date);
        $folder = mysqli_real_escape_string($conn, $folder);
        $url = mysqli_real_escape_string($conn, $url);
        $slug = mysqli_real_escape_string($conn, $slug);

        // Using prepared statement
        $sql = "INSERT INTO blog (title, content, date, file, url, slug) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssss", $title, $content, $date, $folder, $url, $slug);

        $result = mysqli_stmt_execute($stmt);


        // $sql = "INSERT INTO blog (title,content,date,file,url,slug) values ('$title','$content','$date','$folder','$url','$slug')";

        // $data = mysqli_query($conn, $sql);


        if ($result) {
            echo "Uploaded";
        } else {
            echo "Failed";
        }
    }
}
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Display a confirmation dialog before deleting
    echo "<script>
            if (confirm('Are you sure you want to delete this blog post?')) {
                window.location.href = 'delete_blog.php?id=$id';
            }
          </script>";
}




?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Blog Page</title>
    <link href="style/home.css" rel="stylesheet" type="text/css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>
    <script src="https://cdn.tiny.cloud/1/s0lnfn03pe5qwzfcxt1st3oabi1er65tu4ah2xh87ig9a7t0/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    label {
        font-weight: 700;
    }

    body {
        font-family: 'Nunito Sans', sans-serif;
        background-color: #454d55;
        color: white;
    }

    .container {
        background-color: #343a40;
        color: #fff;
        box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
        padding: 23px;
    }

    .blog-post {
        margin: 13px;
        background: black;
        padding: 14px;
    }

    .l-sidebar {
        width: 220px !important;
    }

    .l-header {
        padding-left: 220px !important;
    }

    main.l-main {
        padding-left: 220px !important;
    }

    .c-menu>ul .c-menu__item .c-menu-item__title {
        position: static !important;
        opacity: 1 !important;

    }

    .c-menu__item__inner a {
        display: flex !important;
    }

    .c-menu>ul .c-menu__item {
        overflow: visible !important;
    }
</style>
</head>

<body class="sidebar-is-reduced">
    <header class="l-header">
        <div class="l-header__inner clearfix">

            <!-- <div class="c-header-icon has-dropdown"><span class="c-badge c-badge--red c-badge--header-icon animated swing">13</span><i class="fa fa-bell"></i>
          <div class="c-dropdown c-dropdown--notifications">
            <div class="c-dropdown__header"></div>
            <div class="c-dropdown__content"></div>
          </div>
        </div> -->
            <div class="c-search">
                <input class="c-search__input u-input" placeholder="Search..." type="text" />
            </div>
            <div class="header-icons-group">
                <!-- <div class="c-header-icon basket"><span class="c-badge c-badge--blue c-badge--header-icon animated swing">4</span><i class="fa fa-shopping-basket"></i></div> -->
                <div class="c-header-icon logout"><a href="logout.php"><i class="fa fa-power-off"></i></a></div>
            </div>
        </div>
    </header>
    <div class="l-sidebar">
        <div class="logo" style="  background-color: #fff;">
    <img src="https://retrodtech.com/img/retrod_logo.svg" alt="" style="width:83%;">
        </div>
        <div class="l-sidebar__content">
            <nav class="c-menu js-menu">
                <ul class="u-list">
                    <li class="c-menu__item " data-toggle="tooltip" title="Dashboard">
                        <div class="c-menu__item__inner"><a href="home.php"><i class="fa fa-desktop"></i>
                                <div class="c-menu-item__title"><span>Dashboard</span></div>
                            </a>
                        </div>
                    </li>

                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Registration">
                        <div class="c-menu__item__inner"><a href="registrations-data.php"><i class="fa fa-database"></i>
                                <div class="c-menu-item__title"><span>Registrations</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Appliedjobs">
                        <div class="c-menu__item__inner"><a href="appliedjobs-data.php"><i class="fa fa-user-circle"></i>
                                <div class="c-menu-item__title"><span>Appliedjobs</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Pricing">
                        <div class="c-menu__item__inner"><a href="dyamicpricing.php"><i class="fa fa-university"></i>
                                <div class="c-menu-item__title"><span>Pricing</span></div>
                            </a>
                        </div>
                    </li>


                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Contact">
                        <div class="c-menu__item__inner"><a href="contact.php"><i class="fa fa-comment" aria-hidden="true"></i>
                                <div class="c-menu-item__title"><span>Contact</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Blog">
                        <div class="c-menu__item__inner"><a href="dynamicblog.php"><i class="fa fa-book" aria-hidden="true"></i>
                                <div class="c-menu-item__title"><span>Blog</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Product">
                        <div class="c-menu__item__inner"><a href="addproduct.php"><i class="fa fa-plus" aria-hidden="true"></i>
                                <div class="c-menu-item__title"><span>Product</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Career">
                        <div class="c-menu__item__inner"><a href="addcareer.php"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                <div class="c-menu-item__title"><span>Careers</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Add Features">
            <div class="c-menu__item__inner"><a href="addfeatures.php"><i class="fa fa-list-alt" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Add Features</span></div>
              </a>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Add events">
            <div class="c-menu__item__inner"><a href="addevent.php"><i class="fa fa-list-alt" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Add Events</span></div>
              </a>
            </div>
          </li>
                </ul>
            </nav>
        </div>
    </div>
    <main class="l-main">
        <div class="content-wrapper content-wrapper--with-bg">
            <h1 class="page-title">Blog</h1>

            <div class="container mt-5">

                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="InputTitle">Title</label>
                        <input type="text" class="form-control" id="InputTitle" aria-describedby="title" name="title" placeholder="Enter Title">
                        <small class="form-text text-muted">We'll share your Blog
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" class="form-control" id="slug" aria-describedby="title" name="slug" placeholder="Enter slug">
                        <small class="form-text text-muted">Slug must be small letter
                        </small>
                    </div>

                    <div class="mb-3">
                        <label for="titleContent" class="form-label">Content</label>
                        <textarea class="form-control" id="titleContent" rows="3" name="content"></textarea>
                    </div>

                    <div class="form-group"> <!-- Date input -->
                        <label class="control-label" for="date">Date</label>
                        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" />
                    </div>

                    <label for="basic-url">Your Social media Post's URL</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">eg:https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" name="url" aria-describedby="basic-addon3">
                    </div>

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload your Image</label>
                        <input class="form-control" type="file" id="formFile" name="uploadfile">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


                <?PHP
                if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
                    $query = "SELECT * FROM blog WHERE status=1";
                    $result = mysqli_query($conn, $query);
                    // echo "test";

                    while ($row = mysqli_fetch_assoc($result)) {
                        // echo '
                        // <div class="card" style="width: 18rem;">
                        // <div class="card-body">
                        //     <h5 class="card-title">' . $row['title'] . '</h5>
                        //     <h6 class="card-subtitle mb-2 text-muted">'. $row['date'] .'</h6>
                        //     <p class="card-text">'. $row['content'] . '</p>';
                        //    echo '<a href="'.$sitePath.'/login/edit_blog.php?id=' . $row["id"] . '>Edit</a>';
                        //    echo '<a href="'.$sitePath.'/login/delete_blog.php?id=' . $row['id'] .'>Delete</a>
                        // </div>
                        // </div>
                        // ';
                ?>
                        <div class='blog-post'>
                            <h2> <?php echo  $row['title'] ?></h2>
                            <p> <?php echo $row['content'] ?> </p>
                            <p>Date: <?php echo  $row['date'] ?> </p>

                            <p>URL:<?php echo $row['url'] ?> </p>
                    <?php
                        // Add Edit and Delete links
                        //   /  echo "<p><a href='" .$sitePath. "admin/login/edit_blog.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> | <a href='" .$sitePath. "admin/login/delete_blog.php?id=" . $row['id'] . "'  class='btn btn-danger btn-sm'>Delete</a></p>";
                        echo "<p>
                    <a href='" . $sitePath . "admin/login/edit_blog.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> | 
                    <a href='?action=delete&id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                  </p>";
                        echo "</div>";
                    }
                }

                    ?>
                        </div>
            </div>
    </main>
    <!-- partial -->



    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Include the Bootstrap JS and Popper.js files for Bootstrap functionality -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Your JavaScript code for managing features dynamically goes here -->
    <script src="./sc.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
 


<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script src="https://cdn.tiny.cloud/1/905gexvj5vhzvaoykwj6zmka5nvldcjmfmlowpfnt0oqa20t/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>

    <script>
        $(document).ready(function() {
            var date_input = $('input[name="date"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            var options = {
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
        })

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;
        document.getElementById('date').value = today;
    </script>
</body>

</html>