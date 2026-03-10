<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../include/dbcon.php';

if ($_SESSION['loginid'] != 1) {
  header("Location: index.php");
}






?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Home Page</title>
  <link href="style/home.css" rel="stylesheet" type="text/css">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Dynamic Pricing</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
  label {
    font-weight: 700;
  }

  body {
    font-family: 'Nunito Sans', sans-serif;
    background-color: #454d55;
    color: white;
    overflow-x: hidden;
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

  h2 {
    color: #007bff;
  }

  /* 
    #pricingTableContainer {
      margin-top: 20px;
    } */

  .btn {
    margin-right: 10px;
  }

  .name1,
  .name2,
  .name3,
  .name4 {
    font-size: larger;
    font-weight: bold;
    margin: 7px;
  }

  input[type="checkbox"] {}

  label {
    font-weight: 400;
    display: flex;
    align-items: center;
    margin: 16px;
    padding: 3px;
    margin-left: 28px;
  }

  .submitbtn {

    margin-left: 20px;
    background: #0a221b;
    color: white;
    font-size: large;
    font-weight: 600;
    border-radius: 6px;
    font-family: math;
    box-shadow: 2px 2px 2px black;
  }

  .box1 {

    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 23px;
    font-size: large;
    font-weight: 600;
    margin: 10px;
    border: 2px solid black;
  }

  .cont {
    margin: 5px;
  }

  form {
    margin: 8px;
  }

  .row {
    margin: 0 auto;
    width: 98%;
    color: black !important;
  }

  .col-4 {
    /* margin-top: 65px; */
    background-color: #fff;
    text-align: center;
    overflow: hidden;
    /* padding: 36px 30px 70px; */
    /* margin-bottom: -120px; */
    padding-top: 82px;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    position: relative;
    border: 1px solid #ff239121;
    border-radius: 15px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    width: 100%;
    height: 100%;
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

          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="registration">
            <div class="c-menu__item__inner"><a href="registrations-data.php"><i class="fa fa-database"></i>
                <div class="c-menu-item__title"><span>Registrations</span></div>
              </a>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="appliedjobs">
            <div class="c-menu__item__inner"><a href="appliedjobs-data.php"><i class="fa fa-user-circle"></i>
                <div class="c-menu-item__title"><span>Appliedjobs</span></div>
              </a>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="pricing">
            <div class="c-menu__item__inner"><a href="dyamicpricing.php"><i class="fa fa-university"></i>
                <div class="c-menu-item__title"><span>Pricing</span></div>
              </a>
            </div>
          </li>


          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="contact">
            <div class="c-menu__item__inner"><a href="contact.php"><i class="fa fa-comment" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Contact</span></div>
              </a>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="blog">
            <div class="c-menu__item__inner"><a href="dynamicblog.php"><i class="fa fa-book" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Blog</span></div>
              </a>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="product">
            <div class="c-menu__item__inner"><a href="addproduct.php"><i class="fa fa-plus" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Product</span></div>
              </a>
            </div>
          </li>
          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="career">
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
      <h1 class="page-title">Features</h1>

      <div class="row">
        <div class="col-4">
          <form action="" id="form1" method="GET">

            <div class="heading">
              <h1>Hotelier Starter</h1>
            </div>


            <div class="name1">Top features</div>
            <label>
              <input type="checkbox" name="webBuilder" id="webBuilder"> Web Builder
            </label>

            <label>
              <input type="checkbox" name="bookingEngine" id="bookingEngine"> Booking Engine
            </label>

            <label>
              <input type="checkbox" name="aiChatbot" id="aiChatbot"> AI Chatbot
            </label>

            <label>
              <input type="checkbox" name="propertyManagementSystem" id="propertyManagementSystem"> Property Management System
            </label>

            <label>
              <input type="checkbox" name="marketingAutomation" id="marketingAutomation"> Marketing Automation
            </label>


            <div class="name2">465 with SSL or </div>

            <label>
              <input type="checkbox" name="customizationDesign" id="customizationDesign"> Customization Design
            </label>

            <label>
              <input type="checkbox" name="properRedirection" id="properRedirection"> Proper Redirection
            </label>

            <label>
              <input type="checkbox" name="allDeviceResponsive" id="allDeviceResponsive"> All Device Responsive
            </label>

            <label>
              <input type="checkbox" name="seoFriendlyPage" id="seoFriendlyPage"> SEO Friendly Page
            </label>

            <label>
              <input type="checkbox" name="dynamicBlogManagement" id="dynamicBlogManagement"> Dynamic Blog Management
            </label>

            <label>
              <input type="checkbox" name="eventDetails" id="eventDetails"> Event Details
            </label>



            <div class="name2">Booking Engine </div>

            <label>
              <input type="checkbox" id="zeroLoadingTime" name="zeroLoadingTime"> Zero-loading time
            </label>

            <label>
              <input type="checkbox" id="paymentGatewayInbuilt" name="paymentGatewayInbuilt"> Payment Gateway Inbuilt
            </label>

            <label>
              <input type="checkbox" id="trackBookings" name="trackBookings"> Track try/failed bookings
            </label>

            <label>
              <input type="checkbox" id="mobileFriendly" name="mobileFriendly"> Mobile Friendly
            </label>

            <label>
              <input type="checkbox" id="couponManagementSystem" name="couponManagementSystem"> Coupon Management System
            </label>

            <label>
              <input type="checkbox" id="companyVoucher" name="companyVoucher"> 450+ company voucher
            </label>

            <div class="name3">Property Management System </div>

            <label>
              <input type="checkbox" id="reservationCentre" name="reservationCentre"> Reservation Centre
            </label>

            <label>
              <input type="checkbox" id="hotelGroupManagement" name="hotelGroupManagement"> Hotel Group Management
            </label>

            <label>
              <input type="checkbox" id="manageUsers" name="manageUsers"> Manage users and privilege & Security Control
            </label>

            <label>
              <input type="checkbox" id="profileManagement" name="profileManagement"> Profile Management
            </label>

            <label>
              <input type="checkbox" id="frontOfficeOperations" name="frontOfficeOperations"> Front-Office Operations
            </label>

            <label>
              <input type="checkbox" id="changesDepositsInvoicing" name="changesDepositsInvoicing"> Changes, deposits & Invoicing
            </label>

            <div class="name4">Services & Support </div>

            <label>
              <input type="checkbox" id="socialMediaMarketing" name="socialMediaMarketing"> Social Media Marketing - Google My Business
            </label>

            <label>
              <input type="checkbox" id="standardPerformance" name="standardPerformance"> Standard - Performance
            </label>

            <label>
              <input type="checkbox" id="support24x7" name="support24x7"> 24*7 support
            </label>

            <label>
              <input type="checkbox" id="domain" name="domain"> Domain
            </label>

            <label>
              <input type="checkbox" id="professionalMail" name="professionalMail"> Professional Mail (Only - 1)
            </label>

            <label>
              <input type="checkbox" id="prioritySupport" name="prioritySupport"> Priority Support
            </label>

            <input type="submit" id="submit" class="submitbtn" value="Update">
          </form>

          <?php
          $servername = "localhost";
          $username = "vwqmwweafd";
          $password = "Y2AQxDxzSP";
          $dbname = "vwqmwweafd";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM  featureitems";
          $result = $conn->query($sql);

          if ($result === FALSE) {
            echo "Error executing query: " . $conn->error;
          } else {
            if ($result->num_rows > 0) {
              // Fetch all rows into an array
          ?>
              <div class="box1">
                <h2>Hotelier Starter</h2>
                <?php
                $i = 1;
                $featuresArray = array();
                while ($row = $result->fetch_assoc()) {
                ?>
                  <div class="cont">
                    <?php
                    echo $i . ". " . $row["features"] . "<a href='#' onClick='confirmation(" . $row['id'] . ");'>Delete</a>" . "<br>";
                    ?>
                    <script>
                      var originalString = "<?php echo $row["features"]; ?>";
                      // Remove "Icon" from the string
                      var modifiedString = originalString.replace("Icon", "");
                      console.log(modifiedString);
                      var checkbox = document.getElementById(modifiedString);
                      console.log(checkbox);
                      checkbox.checked = true;
                    </script>
                  </div>
                <?php
                  $i++;
                }
                ?>
              </div>
          <?php

            } else {
              echo "No records found.";
            }
          }
          ?>

        </div>

        <div class="col-4">

          <form action="" method="GET" id="form2">

            <div class="heading">
              <h1>Hotelier Plus</h1>
            </div>


            <div class="name1">Top features</div>
            <label>
              <input type="checkbox" id="webBuilder2" name="webBuilder2"> Web Builder
            </label>

            <label>
              <input type="checkbox" id="bookingEngine2" name="bookingEngine2"> Booking Engine
            </label>

            <label>
              <input type="checkbox" id="aiChatbot2" name="aiChatbot2"> AI Chatbot
            </label>

            <label>
              <input type="checkbox" id="propertyManagementSystem2" name="propertyManagementSystem2"> Property Management System
            </label>

            <label>
              <input type="checkbox" id="marketingAutomation2" name="marketingAutomation2"> Marketing Automation
            </label>

            <div class="name2">465 with SSL or </div>

            <label>
              <input type="checkbox" id="customizationDesign2" name="customizationDesign2"> Customization Design
            </label>

            <label>
              <input type="checkbox" id="properRedirection2" name="properRedirection2"> Proper Redirection
            </label>

            <label>
              <input type="checkbox" id="allDeviceResponsive2" name="allDeviceResponsive2"> All Device Responsive
            </label>

            <label>
              <input type="checkbox" id="seoFriendlyPage2" name="seoFriendlyPage2"> SEO Friendly Page
            </label>

            <label>
              <input type="checkbox" id="dynamicBlogManagement2" name="dynamicBlogManagement2"> Dynamic Blog Management
            </label>

            <label>
              <input type="checkbox" id="eventDetails2" name="eventDetails2"> Event Details
            </label>

            <div class="name2">Booking Engine </div>

            <label>
              <input type="checkbox" id="zeroLoadingTime2" name="zeroLoadingTime2"> Zero-loading time
            </label>

            <label>
              <input type="checkbox" id="paymentGatewayInbuilt2" name="paymentGatewayInbuilt2"> Payment Gateway Inbuilt
            </label>

            <label>
              <input type="checkbox" id="trackBookings2" name="trackBookings2"> Track try/failed bookings
            </label>

            <label>
              <input type="checkbox" id="mobileFriendly2" name="mobileFriendly2"> Mobile Friendly
            </label>

            <label>
              <input type="checkbox" id="couponManagementSystem2" name="couponManagementSystem2"> Coupon Management System
            </label>

            <label>
              <input type="checkbox" id="companyVoucher2" name="companyVoucher2"> 450+ company voucher
            </label>

            <div class="name3">Property Management System </div>

            <label>
              <input type="checkbox" id="reservationCentre2" name="reservationCentre2"> Reservation Centre
            </label>

            <label>
              <input type="checkbox" id="hotelGroupManagement2" name="hotelGroupManagement2"> Hotel Group Management
            </label>

            <label>
              <input type="checkbox" id="manageUsers2" name="manageUsers2"> Manage users and privilege & Security Control
            </label>

            <label>
              <input type="checkbox" id="profileManagement2" name="profileManagement2"> Profile Management
            </label>

            <label>
              <input type="checkbox" id="frontOfficeOperations2" name="frontOfficeOperations2"> Front-Office Operations
            </label>

            <label>
              <input type="checkbox" id="changesDepositsInvoicing2" name="changesDepositsInvoicing2"> Changes, deposits & Invoicing
            </label>

            <div class="name4">Services & Support </div>

            <label>
              <input type="checkbox" id="socialMediaMarketing2" name="socialMediaMarketing2"> Social Media Marketing - Google My Business
            </label>

            <label>
              <input type="checkbox" id="standardPerformance2" name="standardPerformance2"> Standard - Performance
            </label>

            <label>
              <input type="checkbox" id="support24x72" name="support24x72"> 24*7 support
            </label>

            <label>
              <input type="checkbox" id="domain2" name="domain2"> Domain
            </label>

            <label>
              <input type="checkbox" id="professionalMail2" name="professionalMail2"> Professional Mail (Only - 1)
            </label>

            <label>
              <input type="checkbox" id="prioritySupport2" name="prioritySupport2"> Priority Support
            </label>


            <input type="submit" id="submit2" class="submitbtn" value="Update">
          </form>
          <?php
          $servername = "localhost";
          $username = "vwqmwweafd";
          $password = "Y2AQxDxzSP";
          $dbname = "vwqmwweafd";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM  featureitems2";
          $result = $conn->query($sql);

          if ($result === FALSE) {
            echo "Error executing query: " . $conn->error;
          } else {
            if ($result->num_rows > 0) {
              // Fetch all rows into an array
          ?>
              <div class="box1">
                <h2>Hotelier Plus</h2>
                <?php
                $i = 1;
                $featuresArray = array();
                while ($row = $result->fetch_assoc()) {
                ?>
                  <div class="cont">
                    <script>
                      var originalString = "<?php echo $row["features"]; ?>";
                      // Remove "Icon" from the string
                      var modifiedString = originalString.replace("Icon", "");
                      console.log(modifiedString);
                      var checkbox = document.getElementById(modifiedString);
                      console.log(checkbox);
                      checkbox.checked = true;
                    </script>
                    <?php
                    echo $i . ". " . $row["features"] . "<a href='#' onClick='confirmation2(" . $row['id'] . ");'>Delete</a>" . "<br>";
                    ?>
                  </div>
                <?php
                  $i++;
                }
                ?>
              </div>
          <?php

            } else {
              echo "No records found.";
            }
          }
          ?>

        </div>

        <div class="col-4">

          <form action="" id="form3" method="GET">

            <div class="heading">
              <h1>Hotelier Elite</h1>
            </div>


            <div class="name1">Top features</div>
            <label>
              <input type="checkbox" id="webBuilder3" name="webBuilder3"> Web Builder
            </label>

            <label>
              <input type="checkbox" id="bookingEngine3" name="bookingEngine3"> Booking Engine
            </label>

            <label>
              <input type="checkbox" id="aiChatbot3" name="aiChatbot3"> AI Chatbot
            </label>

            <label>
              <input type="checkbox" id="propertyManagementSystem3" name="propertyManagementSystem3"> Property Management System
            </label>

            <label>
              <input type="checkbox" id="marketingAutomation3" name="marketingAutomation3"> Marketing Automation
            </label>

            <div class="name2">465 with SSL or </div>

            <label>
              <input type="checkbox" id="customizationDesign3" name="customizationDesign3"> Customization Design
            </label>

            <label>
              <input type="checkbox" id="properRedirection3" name="properRedirection3"> Proper Redirection
            </label>

            <label>
              <input type="checkbox" id="allDeviceResponsive3" name="allDeviceResponsive3"> All Device Responsive
            </label>

            <label>
              <input type="checkbox" id="seoFriendlyPage3" name="seoFriendlyPage3"> SEO Friendly Page
            </label>

            <label>
              <input type="checkbox" id="dynamicBlogManagement3" name="dynamicBlogManagement3"> Dynamic Blog Management
            </label>

            <label>
              <input type="checkbox" id="eventDetails3" name="eventDetails3"> Event Details
            </label>

            <div class="name2">Booking Engine </div>

            <label>
              <input type="checkbox" id="zeroLoadingTime3" name="zeroLoadingTime3"> Zero-loading time
            </label>

            <label>
              <input type="checkbox" id="paymentGatewayInbuilt3" name="paymentGatewayInbuilt3"> Payment Gateway Inbuilt
            </label>

            <label>
              <input type="checkbox" id="trackBookings3" name="trackBookings3"> Track try/failed bookings
            </label>

            <label>
              <input type="checkbox" id="mobileFriendly3" name="mobileFriendly3"> Mobile Friendly
            </label>

            <label>
              <input type="checkbox" id="couponManagementSystem3" name="couponManagementSystem3"> Coupon Management System
            </label>

            <label>
              <input type="checkbox" id="companyVoucher3" name="companyVoucher3"> 450+ company voucher
            </label>

            <div class="name3">Property Management System </div>

            <label>
              <input type="checkbox" id="reservationCentre3" name="reservationCentre3"> Reservation Centre
            </label>

            <label>
              <input type="checkbox" id="hotelGroupManagement3" name="hotelGroupManagement3"> Hotel Group Management
            </label>

            <label>
              <input type="checkbox" id="manageUsers3" name="manageUsers3"> Manage users and privilege & Security Control
            </label>

            <label>
              <input type="checkbox" id="profileManagement3" name="profileManagement3"> Profile Management
            </label>

            <label>
              <input type="checkbox" id="frontOfficeOperations3" name="frontOfficeOperations3"> Front-Office Operations
            </label>

            <label>
              <input type="checkbox" id="changesDepositsInvoicing3" name="changesDepositsInvoicing3"> Changes, deposits & Invoicing
            </label>

            <div class="name4">Services & Support </div>

            <label>
              <input type="checkbox" id="socialMediaMarketing3" name="socialMediaMarketing3"> Social Media Marketing - Google My Business
            </label>

            <label>
              <input type="checkbox" id="standardPerformance3" name="standardPerformance3"> Standard - Performance
            </label>

            <label>
              <input type="checkbox" id="support24x73" name="support24x73"> 24*7 support
            </label>

            <label>
              <input type="checkbox" id="domain3" name="domain3"> Domain
            </label>

            <label>
              <input type="checkbox" id="professionalMail3" name="professionalMail3"> Professional Mail (Only - 1)
            </label>

            <label>
              <input type="checkbox" id="prioritySupport3" name="prioritySupport3"> Priority Support
            </label>


            <input type="submit" id="submit3" class="submitbtn" value="Update">
          </form>

          <?php
          $servername = "localhost";
          $username = "vwqmwweafd";
          $password = "Y2AQxDxzSP";
          $dbname = "vwqmwweafd";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

     

          $sql = "SELECT * FROM  featureitems3";
          // $sql= "DELETE FROM featureitems3";
          $result = $conn->query($sql);

          if ($result === FALSE) {
            echo "Error executing query: " . $conn->error;
          } else {
            if ($result->num_rows > 0) {
              // Fetch all rows into an array
          ?>
              <div class="box1">
                <h2>Hotelier Elite</h2>
                <?php
                $i = 1;
                $featuresArray = array();
                while ($row = $result->fetch_assoc()) {
                ?>
                  <div class="cont">
                    <script>
                      var originalString = "<?php echo $row["features"]; ?>";
                      // Remove "Icon" from the string
                      var modifiedString = originalString.replace("Icon", "");
                      console.log(modifiedString);
                      var checkbox = document.getElementById(modifiedString);
                      console.log(checkbox);
                      checkbox.checked = true;
                   
                    </script>

                    <?php
                    echo $i . ". " . $row["features"] . "<a href='#' onClick='confirmation3(" . $row['id'] . ");'>Delete</a>" . "<br>";
                    ?>
                  </div>
                <?php
                  $i++;
                }
                ?>
              </div>
          <?php

            } else {
              echo "No records found.";
            }
          }
          ?>


        </div>
      </div>

    </div>

  </main>

  <!-- partial -->

  <script>
    let Dashboard = (() => {
      let global = {
        tooltipOptions: {
          placement: "right"
        },

        menuClass: ".c-menu"
      };


      let menuChangeActive = el => {
        let hasSubmenu = $(el).hasClass("has-submenu");
        $(global.menuClass + " .is-active").removeClass("is-active");
        $(el).addClass("is-active");

        // if (hasSubmenu) {
        // 	$(el).find("ul").slideDown();
        // }
      };

      let sidebarChangeWidth = () => {
        let $menuItemsTitle = $("li .menu-item__title");

        $("body").toggleClass("sidebar-is-reduced sidebar-is-expanded");
        $(".hamburger-toggle").toggleClass("is-opened");

        if ($("body").hasClass("sidebar-is-expanded")) {
          $('[data-toggle="tooltip"]').tooltip("destroy");
        } else {
          $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
        }

      };

      return {
        init: () => {
          $(".js-hamburger").on("click", sidebarChangeWidth);

          $(".js-menu li").on("click", e => {
            menuChangeActive(e.currentTarget);
          });

          $('[data-toggle="tooltip"]').tooltip(global.tooltipOptions);
        }
      };

    })();

    Dashboard.init();
  </script>

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
  <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://retrodtech.com/js/items23.js"></script>
  <script src="https://retrodtech.com/js/items20.js"></script>
  <script src="https://retrodtech.com/js/items21.js"></script>
  <script>
    function confirmation(ide) {
      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this data!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your data has been deleted!", {
              icon: "success",
            });
            window.location.href = "deleteItems.php?id=" + ide;

          } else {
            swal("Your data is safe!");
          }
        });
    }
  </script>

  <script>
    function confirmation2(ide) {
      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this data!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your data has been deleted!", {
              icon: "success",
            });
            window.location.href = "deleteItems2.php?id=" + ide;

          } else {
            swal("Your data is safe!");
          }
        });
    }
  </script>

  <script>
    function confirmation3(ide) {
      swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this data!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your data has been deleted!", {
              icon: "success",
            });
            window.location.href = "deleteItems3.php?id=" + ide;

          } else {
            swal("Your data is safe!");
          }
        });
    }
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