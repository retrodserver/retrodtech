<?php
session_start();
include '../include/dbcon.php';

if($_SESSION['loginid']!=1){
  header("Location: index.php");
}

$sql= "SELECT * FROM appliedjob";
$result=mysqli_query($conn,$sql);
$rowcountofApplirdjobs=mysqli_num_rows($result);


// $sql3= "SELECT * FROM appliedJobstable";
// $result3=mysqli_query($conn,$sql3);
// $rowcountofAppliedJobs=mysqli_num_rows($result3);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $record_id = $_POST["record_id"];

  // Perform the delete operation
  $delete_sql = "DELETE FROM appliedjob WHERE id = '$record_id'";
  $delete_result = mysqli_query($conn, $delete_sql);

  // Check if the delete operation was successful
  if ($delete_result) {
    header("Location: appliedjobs-data.php"); // Redirect to the home page after deletion
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
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
    <script src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>		</head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
	  body {
	font-family: 'Nunito Sans', sans-serif;
       background-color: #454d55;
 	 }

        tr{
      margin: 20px;
    border: 1px dotted maroon;
    box-shadow: 10px 10px 10px #ff00993b;
    }
    .tablecontainer{
      color:white;
    }
    h1{
      color: white;
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
          <input class="c-search__input u-input" placeholder="Search..." type="text"/>
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
            <li class="c-menu__item" data-toggle="tooltip" title="Dashboard">
              <div class="c-menu__item__inner"><a href="home.php"><i class="fa fa-desktop"></i>
                <div class="c-menu-item__title"><span>Dashboard</span></div></a>
              </div>
            </li>
           
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="registration">
              <div class="c-menu__item__inner"><a href="registrations-data.php"><i class="fa fa-database"></i>
                <div class="c-menu-item__title"><span>Registrations</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="appliedjobs">
              <div class="c-menu__item__inner"><a href="appliedjobs-data.php"><i class="fa fa-user-circle"></i>
                <div class="c-menu-item__title"><span>Appliedjobs</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="pricing">
              <div class="c-menu__item__inner"><a href="dyamicpricing.php"><i class="fa fa-university"></i>
                <div class="c-menu-item__title"><span>Pricing</span></div></a>
              </div>
            </li>
          
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="contact">
              <div class="c-menu__item__inner"><a href="contact.php"><i class="fa fa-comment" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Contact</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="blog">
              <div class="c-menu__item__inner"><a href="dynamicblog.php"><i class="fa fa-book" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Blog</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="product">
              <div class="c-menu__item__inner"><a href="addproduct.php"><i class="fa fa-plus" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Product</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="career">
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
      <h1 class="page-title">Appliedjobs</h1>

      


      <div class="tablecontainer">
      <?php
                    if ($rowcountofApplirdjobs > 0) {
                    ?>
                      <table class='table table-bordered table-striped' style="margin: 20px;border: 1px dotted green; box-shadow: 10px 10px 10px deepskyblue;">
                       
                      <tr>
                        <td>sl</td>
                        <td>Name</td>
                        <td>Email id</td>
                        <td>Education</td>
                        <td>Experience</td>
                        <td>Skills</td>
                        <td>Additional</td>
                        <td>Post</td>
                      </tr>
                    <?php
                    $i=1;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["mail"]; ?></td>
                        <td><?php echo $row["education"]; ?></td>
                        <td><?php echo $row["experience"]; ?></td>
                        <td><?php echo $row["programs"]; ?></td>
                        <td><?php echo $row["additional"]; ?></td>
                        <td><?php echo $row["postname"]; ?></td>
                        <td><a href="https://retrodtech.com/<?php echo $row['file']?>" Download>Download</a></td>
               

                <td>
                <form method="post" action="" onsubmit="return confirmDelete();">
                  <input type="hidden" name="record_id" style="display:none;" value="<?php echo $row["id"]; ?>">
                  <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
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
      placement: "right" },

    menuClass: ".c-menu" };


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
    } };

})();

Dashboard.init();
  </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
  function confirmDelete() {
    return confirm("Are you sure you want to delete this record?");
  }
</script>	
</body>
</html>