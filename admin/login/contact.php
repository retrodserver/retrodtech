
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include '../include/dbcon.php';
if($_SESSION['loginid']!=1){
  header("Location: index.php");
}
$sql = "SELECT * FROM contacts ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$Email = $row["Email"];
$Phonenumber=$row['Phonenumber'];
$PhoneNumber2= $row['PhoneNumber2'];
$Location=$row['Location'];
$WorkingHours=$row['WorkingHours'];

echo "Hii".$PhoneNumber2;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    $Email = $_POST['Email'];
    $PhoneNumber1 = $_POST['Phonenumber'];
    $PhoneNumber22 = $_POST['PhoneNumber2'];
    $Location = $_POST['Location'];
    $WorkingHours = $_POST['WorkingHours'];
    // echo $Email;
    echo $Email."," .$Phonenumber.",".$PhoneNumber2;
    saveContacts($conn, $Email, $PhoneNumber2, $PhoneNumber22, $Location, $WorkingHours);
header('Location: https://retrodtech.com/admin/login/contact.php');
    exit();
}
function saveContacts($conn, $Email, $PhoneNumber1, $PhoneNumber22, $Location, $WorkingHours){
    // $stmt = $conn->prepare("INSERT INTO contacts (Email,Phonenumber) VALUES (?, ?)");
  $sqlq="INSERT INTO contacts (Email,Phonenumber,PhoneNumber2,Location,WorkingHours) VALUES ('$Email', '$PhoneNumber1', '$PhoneNumber22', '$Location', '$WorkingHours')";
  $conn->query($sqlq);
  // echo "done";
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
            <li class="c-menu__item " data-toggle="tooltip" title="Dashboard">
              <div class="c-menu__item__inner"><a href="home.php"><i class="fa fa-desktop"></i>
                <div class="c-menu-item__title"><span>Dashboard</span></div></a>
              </div>
            </li>
           
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Registration">
              <div class="c-menu__item__inner"><a href="registrations-data.php"><i class="fa fa-database"></i>
                <div class="c-menu-item__title"><span>Registrations</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Appliedjobs">
              <div class="c-menu__item__inner"><a href="appliedjobs-data.php"><i class="fa fa-user-circle"></i>
                <div class="c-menu-item__title"><span>Appliedjobs</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Pricing">
              <div class="c-menu__item__inner"><a href="dyamicpricing.php"><i class="fa fa-university"></i>
                <div class="c-menu-item__title"><span>Pricing</span></div></a>
              </div>
            </li>
           
            
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Contact">
              <div class="c-menu__item__inner"><a href="contact.php"><i class="fa fa-comment" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Contact</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Blog">
              <div class="c-menu__item__inner"><a href="dynamicblog.php"><i class="fa fa-book" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Blog</span></div></a>
              </div>
            </li>
            <li class="c-menu__item has-submenu" data-toggle="tooltip" title="Product">
              <div class="c-menu__item__inner"><a href="addproduct.php"><i class="fa fa-plus" aria-hidden="true"></i>
                <div class="c-menu-item__title"><span>Product</span></div></a>
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
      <h1 class="page-title">Contact</h1>
      <div class="container mt-5">

      <form action="" class="input-fields" method="POST">
        

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Email" name="Email" placeholder="Enter Email" value="<?php echo $Email;?>" required>
        </div>

        <hr>

        <div class="form-group">
            <label for="Phone Number">Phone Number</label>
            <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" placeholder="Enter Phone Number"  value="<?php echo $Phonenumber;?>"required>
        </div>

        <hr>

        <div class="form-group">
            <label for="PhoneNumber2">Phone Number2</label>
            <input type="text" class="form-control" id="PhoneNumber2" name="PhoneNumber2" placeholder="Enter another Phone Number"  value="<?php echo $PhoneNumber2;?>" required>
        </div>

        <hr>

        <div class="form-group">
            <label for="Location">Location</label>
            <input type="text" class="form-control" id="Location" name="Location" placeholder="Enter Location"  value="<?php echo $Location;?>"required>
        </div>

        <hr>

        <div class="form-group">
            <label for="WorkingHours">Working Hours</label>
            <input type="text" class="form-control" id="WorkingHours" name="WorkingHours" placeholder="Enter Working Hours" value="<?php echo $WorkingHours;?>" required>
        </div>

        <hr>
        <!-- <button type="button" class="btn btn-primary" >Update Contacts</button> -->
        <input type="submit" value="Update Contact" class="btn btn-primary">
      </form>
  
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
              