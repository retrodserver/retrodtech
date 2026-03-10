<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php


session_start();
include '../include/dbcon.php';
include($_SERVER["DOCUMENT_ROOT"].'/include/ajax/gallery.php');

if ($_SESSION['loginid'] != 1) {
  header("Location: index.php");
}
?>
<?php

if (isset($_POST['submit'])) {

  $name = $_POST['name'];

  $html = '';
  $uploadDir = 'upload/events/';  // Create a directory named 'uploads' to store uploaded files
  $uploadFile = $uploadDir . basename($_FILES['image']['name']);

  if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
    // Insert data into the database
    $insertQuery = "INSERT INTO gallery (name, img) VALUES ('$name', '$uploadFile')";

    if ($conn->query($insertQuery) === TRUE) {
      echo "Data inserted successfully.";
?>
      <script>
        swal({
          title: "Good job!",
          text: "Image uploaded!",
          icon: "success"
        }).then(function() {
          window.location.href = 'addevent.php';
        });
      </script>
    <?php

    } else {
      echo "Error: " . $insertQuery . "<br>" . $conn->error;
    ?>
      <script>
        swal({
          title: "Something went wrong!",
          text: "Image not uploaded!",
          icon: "error"
        }).then(function() {
          window.location.href = 'addevent.php';
        });
      </script>
<?php
    }
  } else {
    echo "Error uploading file.";
  }
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $data = getImages();
  $html = '<div class="gallery" id="gallery">';
$i=1;
  foreach ($data as $row) {
    $html .= '<span onclick="confirmDelete('.$row['id'].')">'.$i.'Delete</span>';

      $html .= '<img src="https://retrodtech.com/admin/login/' . $row['img'] . '" alt="" srcset="">';
      $i++;
     
  }

  $html .= '</div>';

}





?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Home Page</title>
  <link href="style/home.css" rel="stylesheet" type="text/css">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
  body {

    font-family: 'Nunito Sans', sans-serif;
    background-color: #454d55;
    color: white;

  }

  label {
    font-weight: 700;
  }

  .container {
    background-color: #343a40;
    color: #fff;
    box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
    padding: 23px;
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
  .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 20px;
        overflow:hidden;
        width: 100%;
    }

    .gallery img {
        margin: 10px;
        cursor: pointer;
        max-width: 300px;
        width: 50%;
        height: 50%;
        border-radius: 10px;
        height: auto;
      transition: transform 0.5s ease-in-out;
    }
    .gallery span{
      background: #ffffff91;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 5px;
    color: black;
    border-radius: 4px;
    font-weight: 500;
    cursor: pointer;
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
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Add Features">
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
      <h1 class="page-title">Events</h1>
      <div class="container mt-5">

        <form action="" class="input-fields" method="POST" id="myForm" enctype="multipart/form-data">


          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
          </div>

          <hr>

          <div class="form-group">
            <label for="image">Upload image</label>
            <input type="file" class="form-control" id="image" name="image" placeholder="Upload image" required>
          </div>

          <hr>


          <hr>
          <!-- <button type="button" class="btn btn-primary" >Update Contacts</button> -->
          <input type="submit" id="submit" name="submit" value="Update" class="btn btn-primary">
        </form>

        <div class="row">
          <?php echo $html;?>
        </div>

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

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</body>

</html>
<script>
function confirmDelete(id) {
  var confirmed = confirm('Are you sure? You won\'t be able to revert this!');

if (confirmed) {
    // If user clicks "OK", redirect to the deleteevent.php with the id
    window.location.href = 'https://retrodtech.com/admin/login/deleteevent.php?id=' + id;
}

}
</script>

