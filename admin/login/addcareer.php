<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include '../include/dbcon.php';

if ($_SESSION['loginid'] != 1) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $describe = $_POST['describe'];
    $location = $_POST['location'];
    $slug = $_POST['slug'];

    // if (!empty($title) && !empty($description) && !empty($describe) && !empty($location) && !empty($slug)) {
        $sql = "INSERT INTO jobcareer (title, shortdescription, fullDesc, location, slug) VALUES ('$title', '$description', '$describe', '$location', '$slug')";
        $data = mysqli_query($conn, $sql);

        if ($data) {
            // Clear form data
            $_POST['title'] = '';
            $_POST['description'] = '';
            $_POST['describe'] = '';
            $_POST['location'] = '';
            $_POST['slug'] = '';
            echo 'done';
            // Redirect to a confirmation page
            header("Location: addcareer.php");
            exit();
        } else {
            echo "Failed";
        }
    // }
}
?>

<!-- Your HTML code remains unchanged -->



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link href="style/home.css" rel="stylesheet" type="text/css">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
	body{
   font-family: 'Nunito Sans', sans-serif;
    background-color: #454d55;
    color: white;

}
        label{
            font-weight: 700;
        }
.container{
    background-color: #343a40;
    color: #fff;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    padding: 23px;
}
.blog-post{
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
.c-menu > ul .c-menu__item .c-menu-item__title {
  position:static !important;
  opacity: 1 !important;

}

.c-menu__item__inner a{
  display: flex !important;
}
.c-menu > ul .c-menu__item {
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
        <div class="logo">
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
                        <div class="c-menu__item__inner"><a href="appliedjobs-data.php"><i
                                    class="fa fa-user-circle"></i>
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
                        <div class="c-menu__item__inner"><a href="contact.php"><i class="fa fa-comment"
                                    aria-hidden="true"></i>
                                <div class="c-menu-item__title"><span>Contact</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Blog">
                        <div class="c-menu__item__inner"><a href="dynamicblog.php"><i class="fa fa-book"
                                    aria-hidden="true"></i>
                                <div class="c-menu-item__title"><span>Blog</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Product">
                        <div class="c-menu__item__inner"><a href="addproduct.php"><i class="fa fa-plus"
                                    aria-hidden="true"></i>
                                <div class="c-menu-item__title"><span>Product</span></div>
                            </a>
                        </div>
                    </li>
                    <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Career">
              <div class="c-menu__item__inner"><a href="addcareer.php"><i class="fa fa-briefcase" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Careers</span></div></a>
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
            <h1 class="page-title">Career</h1>
            <div class="container mt-5">

                <form action="" method="POST" class="input-fields" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="InputTitle">Title</label>
                        <input type="text" class="form-control" id="InputTitle" aria-describedby="title" name="title"
                            placeholder="Enter Title" required>
                        <small class="form-text text-muted">Job Post Name
                        </small>
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">slug </label>
                        <input type="text" class="form-control" id="slug" aria-describedby="title" name="slug"
                            placeholder="Enter slug">
                    </div>

                    <div class="form-group">
                        <label for="description">Short description</label>
                        <input type="text" class="form-control" id="description" aria-describedby="title" name="description"
                            placeholder="Enter shortdescription" required>
                    </div>

                    <label for="describe"><b><h3>Long Description</h3></b></label>
                    <textarea name="describe" placeholder="describe" ></textarea>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location </label>
                        <input type="text" class="form-control" id="location" aria-describedby="title" name="location"
                            placeholder="Enter location">
                    </div>

                  
                    <!-- <input type="button" value="Submit" name="submit" class="btn btn-primary"> -->

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
                <?PHP
                if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
                    $query = "SELECT * FROM jobcareer WHERE status=1";
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
                        echo "<div class='blog-post'>";
                        echo "<h2>" . $row['title'] . "</h2>";
                        echo "<p>" . $row['shortdescription'] . "</p>";
                        echo "<p>Location: " . $row['location'] . "</p>";
                        // echo "<p><img src='" . $row['file'] . "' alt='Blog Image'></p>";
                    
                        // Add Edit and Delete links
                        echo "<p><a href='" .$sitePath. "admin/login/edit_career.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> | <a href='" .$sitePath. "admin/login/delete_career.php?id=" . $row['id'] . "'  class='btn btn-danger btn-sm'>Delete</a></p>";
                        echo "</div>";
                    }
                }

                ?>

          
            </div>
        </div>
    </main>
    <!-- partial -->
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>

    <script>
const inputfields = document.querySelector('.input-fields');

async function TextEditor(element){
  const newEditor =  await ClassicEditor
  .create(element,{
    toolbar: [ 'heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
  } )
  return newEditor
 
}


let describe;
TextEditor(inputfields["describe"]).then(nEditor=>{
    describe=nEditor;
})

<?php $details?>

    </script>

    

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!-- Include the Bootstrap JS and Popper.js files for Bootstrap functionality -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Your JavaScript code for managing features dynamically goes here -->
    <script src="./sc.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

    <script>

        $(document).ready(function () {
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