s<?php
session_start();
include '../include/dbcon.php';
error_reporting(E_ALL);

if ($_SESSION['loginid'] != 1) {
    header("Location: index.php");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['submit'])){
    // Handle form submission for editing the blog post
    $planid = $_POST['planeId'];
    $price = $_POST['price'];
    $sixmonthprcntg = $_POST['sixmonthprcntg'];
    $oneyrprcntg= $_POST['oneyrprcntg'];
    echo $planid;
    $sql = "UPDATE prices SET monthly_price='$price', sixMonthDis='$sixmonthprcntg',oneYrDis='$oneyrprcntg' WHERE planeId='$planid'";
    $data = mysqli_query($conn, $sql);
    

    if ($data) {
        echo $sql;
        header("Location: dyamicpricing.php");
    } else {
        echo "Failed to update";
    }
}
} else {
    // Display the form for editing the selected blog post
    $priceid = $_GET['planeId'];
    $query = "SELECT * FROM prices WHERE planeId='$priceid'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    echo $row['planeId'];
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
    </head>

    <body class="sidebar-is-reduced">
        <header class="l-header">
            <div class="l-header__inner clearfix">
                <div class="c-header-icon js-hamburger">
                    <div class="hamburger-toggle"><span class="bar-top"></span><span class="bar-mid"></span><span class="bar-bot"></span></div>
                </div>
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
                <div class="logo__txt">R</div>
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
                    </ul>
                </nav>
            </div>
        </div>
        <main class="l-main">
            <div class="content-wrapper content-wrapper--with-bg">
                <h1 class="page-title">Edit Price</h1>
                <div class="page-content">Welcome back, <em>to Retrod</em></div>
                <div class="container mt-5">
                    <form action="" method="POST">

                    <input type="hidden" name="planeId" value="<?php echo $row['planeId']; ?>">

                        <label for="price" style="Font-size: large;">Enter Price</label>
                        <input type="number" name="price" id="price" class="price mb-3 ml-5"  value="<?php echo $row['monthly_price']; ?>" required>
                        <br>
                        <label for="price" style="Font-size: large;">Six month percentage</label>
                        <input type="number" name="sixmonthprcntg" id="sixmonthprcntg" class="price mb-3" value="<?php echo $row['sixMonthDis']; ?>" required>
                        <br>

                        <label for="price" style="Font-size: large;">One year percentage</label>
                        <input type="number" name="oneyrprcntg" id="oneyrprcntg" class="price mb-3" value="<?php echo $row['oneYrDis']; ?>" required>
                        <br>
                        <button type="submit" class="btn btn-primary" name="submit">Update price</button>

                    </form>
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
<?php
}
?>