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
    if(isset($_POST['submit']))
    {
    $planid = $_POST['prices'];
    $price = $_POST['totalprice'];
    $sixmonth = $_POST['sixmonthdis'];
    $oneyear = $_POST['oneyrdis'];
    $sql = "UPDATE prices SET monthly_price='$price', sixMonthDis='$sixmonth',oneYrDis='$oneyear' WHERE planeId='$planid'";
    $data = mysqli_query($conn, $sql);
    if ($data) {
        echo $sql;
        header("Location: dyamicpricing.php");
    } else {
        echo "Failed to update";
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
            <h1 class="page-title">Price</h1>

            <div class="container mt-5">

                <form action="" method="POST" enctype="multipart/form-data">

                    <select name="prices" id="">
                        <option value="">Select price</option>
                        <option value="Starter">Starter</option>
                        <option value="Plus">Plus</option>
                        <option value="Elite">Elite</option>
                    </select>
                    <input type="text" name="totalprice" placeholder="Enter Price">
                    <input type="text" name="sixmonthdis" placeholder="Six month discount">
                    <input type="text" name="oneyrdis" id="" placeholder="One year discount">

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>

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
                        <?PHP

                        $query = "SELECT * FROM prices";
                        $result = mysqli_query($conn, $query);




                        while ($row9 = mysqli_fetch_assoc($result)) {

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