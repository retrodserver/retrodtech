<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../include/dbcon.php";


if ($_SESSION['loginid'] != 1) {
  header("Location: index.php");
}

$sql = "SELECT * FROM registrations_table";
$result = mysqli_query($conn, $sql);
$rowcountofRegistrations = mysqli_num_rows($result);


$sql2 = "SELECT * FROM appliedjob";
$result2 = mysqli_query($conn, $sql2);
$rowcountofAppliedJobs = mysqli_num_rows($result2);


$sql3 = "SELECT * FROM blog where status =1";
$result3 = mysqli_query($conn, $sql3);
$rowcountofBlogs = mysqli_num_rows($result3);

$sql4 = "SELECT * FROM product where status =1";
$result4 = mysqli_query($conn, $sql4);
$rowcountofProducts = mysqli_num_rows($result4);

$sql5 = "SELECT * FROM jobcareer  where status =1";
$result5 = mysqli_query($conn, $sql5);
$rowcountofjobs = mysqli_num_rows($result5);

// Your database connection code here

$sql6 = 'SELECT 
            MONTH(date_column) AS month,
            COUNT(*) AS data_count
        FROM 
            registrations_table
        WHERE 
            YEAR(date_column) = YEAR(CURRENT_DATE())
            AND date_column <= CURRENT_DATE()
        GROUP BY 
            MONTH(date_column)
        ORDER BY 
            MONTH(date_column)';

$result6 = mysqli_query($conn, $sql6);

// Check if the query was successful
if ($result6) {
  // Initialize arrays to store month and data_count values
  $months = array();
  $dataCounts = array();

  $monthlyDataCounts = array();

  // Fetch the results and store them in the associative array
  while ($row = mysqli_fetch_assoc($result6)) {
    $month = $row['month'];
    $dataCount = $row['data_count'];
    $monthlyDataCounts[$month] = $dataCount;
  }

  // Create an additional associative array with keys 0 to 11
  $indexedMonthlyDataCounts = array();
  for ($i = 0; $i <= 11; $i++) {
    $indexedMonthlyDataCounts[$i] = isset($monthlyDataCounts[$i + 1]) ? $monthlyDataCounts[$i + 1] : 0;
  }

  // Output the results (you can customize this part as needed)
  for ($i = 0; $i <= 11; $i++) {
    $monthName = date("F", mktime(0, 0, 0, $i + 1, 1)); // Get the month name from the numeric value
    $dataCount = $indexedMonthlyDataCounts[$i];

    // Store in different variables if needed
    ${"month" . ($i + 1) . "DataCount"} = $dataCount;

    // echo "Month: " . $monthName . ", Data Count: " . $dataCount . "<br>";
  }

} else {
  // Handle the case where the query was not successful
  // echo "Error executing query: " . mysqli_error($conn);
}

// Close the database connection
$sql7 = "SELECT * FROM visit";
$result7 = mysqli_query($conn, $sql7);
$row = mysqli_fetch_assoc($result7);
$totalvisitors = $row["total_count"];


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(isset($_POST['submit'])){
    $value = $_POST['search'];
    $sql8="SELECT * FROM search WHERE name LIKE '%$value%'";
    $result8 = mysqli_query($conn, $sql8);
    $row8 = mysqli_fetch_assoc($result8);
    $check=mysqli_num_rows($result8);
    if($check >0){
      $url = $row8['url'];
      header("Location: $url");
    }
    else{
      echo "sorry no result found ";
    }
    
  }
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,300&display=swap" rel="stylesheet">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  body {
font-family: 'Nunito Sans', sans-serif;
       background-color: #454d55;
  }
.row{
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -7.5px;
    margin-left: -7.5px;
}


  h1,
  h2,
  h3,
  h4 {
    color: #ffffff;
    font-style: oblique;
    font-family: emoji;
  }


  .card-header {
    background-color: #007bff;
    color: #fff;
  }

  .page-content {
    font-style: italic;
  }

  table {
    border-collapse: collapse;
    width: 100%;
    margin: 20px;
    box-shadow: 10px 10px 10px steelblue;
  }

  th,
  td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
  }
table th{
    font-family: ui-rounded;
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
    font-weight: 600;
    color: aqua;
}

.card-body{
    background-color: #343a40;
    color: white;
    height: 100%;
}
.card{
height:500px;
}
.table-responsive {
height: 100%;
}
.table{
height: 90%;
}
  .row1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  .myChart {
    width: 777px;
    max-width: 800px;
    display: block;
    height: 388px;
    position: relative;
    left: 0px;
    top: 0px;
  }
  .row2{
    margin-top: 88px;
  }
   
.info-box {
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    border-radius: 0.25rem;
    background-color: #343a40;
    color: #fff;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 1rem;
    min-height: 80px;
    padding: 0.5rem;
    position: relative;
    width: 100%;
}
.dark-mode .info-box {
    background-color: #343a40;
    color: #fff;
}
.info-box .info-box-icon {
    border-radius: 0.25rem;
    -ms-flex-align: center;
    align-items: center;
    display: -ms-flexbox;
    display: flex;
    font-size: 1.875rem;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    width: 70px;
}
.info-box .info-box-content {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    -ms-flex-pack: center;
    justify-content: center;
    line-height: 1.8;
    -ms-flex: 1;
    flex: 1;
    padding: 0 10px;
    overflow: hidden;
}
button img{
  position: absolute;
    right: 70px;
    top: 8px;
}
.searchbtn{
  background: transparent;
    border-radius: 50%;
    border: none;
    position: absolute;
    right: 6px;
    top: 40%;

}
input[name="search"]{
    border: 1px solid;
    border-radius: 94px;
    height: 50px;
    margin-top: 9px
}
form{
  position: absolute;

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
        <form action="" method="post">
        <input class="c-search__input u-input" name="search" placeholder="Search..." type="text" />
        <button type="submit" name="submit" class="searchbtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
        </form>
      </div>
      <div class="header-icons-group">
        <!-- <div class="c-header-icon basket"><span class="c-badge c-badge--blue c-badge--header-icon animated swing">4</span><i class="fa fa-shopping-basket"></i></div> -->
        <div class="c-header-icon logout"><div class="dropdown">
<img width="48" height="48" src="https://img.icons8.com/fluency-systems-regular/48/user-male-circle--v1.png" class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-hidden="true" alt="user-male-circle--v1"/>

  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button"><a href="logout.php"><i class="fa fa-power-off"></i><div><b>Logout</b></div></a></button>
    <button class="dropdown-item" type="button">Profile</button>
    
  </div>
</div></div>
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
          <li class="c-menu__item" data-toggle="tooltip" title="Dashboard">
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

          <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Add Events">
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
      <h1 class="page-title">Dashboard</h1>
      <div class="page-content" style=" background: linear-gradient(to right, #00daff, #00ffc7); color: transparent;
    -webkit-background-clip: text;">Hey,Welcome to <span style="argin-right: 3px;
        background: linear-gradient(to right, #00daff, #00ffc7);
    color: transparent;
    -webkit-background-clip: text;
margin-right: 3px;
">Retrod</span><span id="element"></span></div>

<div class="row">
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box">
<span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
<div class="info-box-content">
<span class="info-box-text">All Registrations</span>
<span class="info-box-number">
 <?php echo $rowcountofRegistrations; ?>
</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
<div class="info-box-content">
<span class="info-box-text">Number of candidates</span>
<span class="info-box-number"> <?php echo $rowcountofAppliedJobs; ?></span>
</div>

</div>

</div>


<div class="clearfix hidden-md-up"></div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
<div class="info-box-content">
<span class="info-box-text">Blogs</span>
<span class="info-box-number"><?php echo $rowcountofBlogs; ?></span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
<div class="info-box-content">
<span class="info-box-text">Products</span>
<span class="info-box-number"><?php echo $rowcountofProducts; ?>
</span>
</div>

</div>

</div>

</div>

    
  

      <div class="row" style="background-color: #343a40;
    color: #fff;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    margin-bottom: 1rem;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    /* flex-direction: column; */
    min-width: 0;
    word-wrap: break-word;
    /* background-color: #fff; */
    background-clip: border-box;
    border: 0 solid rgb(5 136 235);
    border-radius: 0.25rem;">

        <div class="col-md-6 mb-6">
          <h1>Monthly Registrations Growth</h1><canvas id="myChart" class="myChart"
            style="width:100%;max-width:800px"></canvas>
        </div>
        <div class="col-md-6 mb-6">
          <h1>Traffics On Website</h1><canvas id="myChart2" class="myChart" style="width:100%;max-width:800px"></canvas>
        </div>
      </div>


    <section class="mb-4">
      <div class="card">
        <div class="card-header text-center py-3">
          <h5 class="mb-0 text-center">
            <strong>Pricing</strong>
          </h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th scope="col">Plans</th>
                  <th scope="col">Monthly Price</th>
                  <th scope="col">Six month discount</th>
                  <th scope="col">One year Discount</th>
                </tr>
              </thead>
              <tbody>
                <?php

	  $query = "SELECT * FROM prices";
          $result9 = mysqli_query($conn, $query);
          while ($row9 = mysqli_fetch_assoc($result9)) {
        
 	  echo "<tr>
             <td>{$row9['planeId']}</td>
             <td>{$row9['monthly_price']}</td>
             <td>{$row9['sixMonthDis']}%</td>
             <td>{$row9['oneYrDis']}%</td>
         </tr>";
          }


		?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

   

      <div class="row2" style=" height: auto; box-shadow: 10px 10px 10px slategrey; line-height: 24px; padding: 16px; color:white;">
        <h2>Contacts</h2>
        <?php
        $sql = "SELECT * FROM contacts ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $Email = $row["Email"];
        $Phonenumber = $row['Phonenumber'];
        $PhoneNumber2 = $row['PhoneNumber2'];
        $Location = $row['Location'];
        $WorkingHours = $row['WorkingHours']
          ?>

        <div class="Mail">Mail:
          <?php echo $Email ?>
        </div>
        <div classr="number">Number:
          <?php echo $Phonenumber ?>
        </div>
        <div class="number2">Second Number:
          <?php echo $PhoneNumber2 ?>
        </div>
        <div class="work">Working Hours:
          <?php echo $WorkingHours ?>
        </div>
        <div class="location">Location:
          <?php echo $Location ?>
        </div>
      </div>


  </main>
  <!-- partial -->

  <!-- <script>
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
  </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script>
    const xValues = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const yValues = [<?php echo $indexedMonthlyDataCounts[0] ?>, <?php echo $indexedMonthlyDataCounts[1] ?>, <?php echo $indexedMonthlyDataCounts[2] ?>, <?php echo $indexedMonthlyDataCounts[3] ?>, <?php echo $indexedMonthlyDataCounts[4] ?>, <?php echo $indexedMonthlyDataCounts[5] ?>, <?php echo $indexedMonthlyDataCounts[6] ?>, <?php echo $indexedMonthlyDataCounts[7] ?>, <?php echo $indexedMonthlyDataCounts[8] ?>, <?php echo $indexedMonthlyDataCounts[9] ?>, <?php echo $indexedMonthlyDataCounts[10] ?>, <?php echo $indexedMonthlyDataCounts[11] ?>];
    const barColors = ["red", "green", "blue", "orange", "brown", "pink", "yellow", "Black", "purple", "red", "green", "yellow"];

    new Chart("myChart", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: { display: false },
        title: {
          display: true,
          text: "Monthly Registration graph"
        }
      }
    });
  </script>

  <script>
    const yValues2 = [0,<?php echo $totalvisitors?>];

    new Chart("myChart2", {
      type: "line",
      data: {
        labels: yValues2,


        datasets: [{
          data: yValues2,
          borderColor: "red",
          fill: false
        }]
      },
      options: {
        legend: { display: false },
        scales: {
          yAxes: [{ ticks: { min: 0, max: 500 } }],
        }
      }
    });
  </script>

   <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="./index.js"></script>
    <script>
      var typed = new Typed("#element", {
        strings: ["The Best HotelTech Company", "Your Best Direct Booking Master Across The Globe", "Revolutionizing Hotel Revenue with Direct Bookings"],
        typeSpeed: 50,
      });
    </script>

  
</body>

</html>