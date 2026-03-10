<?php
include '../include/dbcon.php';
session_start();

if (isset($_POST['login'])) {
	$name = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM logindb where name = '$name' and password='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		echo "logedin";
		$_SESSION['loginid'] = 1;
		header("Location: https://retrodtech.com/admin/login/home.php");

	} else {
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Hey User</strong> Inncorrect Username or Password.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>';
	}

}

?>
<!-- FILEPATH: /C:/Users/ABINASH DASH/Desktop/Web Dev/index.html -->

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <style>
        @media screen and (max-width: 480px) {
 
            .formBox img{
                width: 83%;
                height: 29vh;
            }
          }
        .container {
            margin-top: 3% !important;
            margin: 0 auto;
            width: 65% !important;
            display: flex;
            height: 85vh;
            box-shadow: 5px 5px 1pc;
            margin-top: 10px;
        }

        h3 {
            font-size: xx-large;
        }

        .left {
            width: 100%;
            height: 90vh;
        }

        .left img {
            width: 100%;
            height: 90vh;
        }

        .right {
            width: 100%;
            height: 90vh;
        }

        .formBox {
            width: 100%;
            padding: 20px;

        }

        .formBox h1 {
            text-align: center;
            font-family: sans-serif;
            font-size: 40px;

            margin-bottom: 40px;
            padding: 13px;
        }

        .formBox input[type="text"],
        .formBox input[type="password"] {
            width: 80%;
            margin-bottom: 20px;
            border: none;
            border-bottom: 2px solid #390264;
            outline: none;
            padding: 10px;
            font-size: 15px;
            font-family: sans-serif;
        }

        .formBox input[type="submit"] {
            width: 20%;
            border-radius: 20px;
            margin-bottom: 20px;
            border: none;
            outline: none;
            padding: 10px;
            font-size: 15px;
            font-family: sans-serif;
            cursor: pointer;
            background: linear-gradient(to top, #e11bd7 0%, #390264 90%);
            color: #fff;
        }

        .formBox input[type="submit"]:hover {
            background: rgb(190, 8, 105);
            color: #fff;
        }

        .forget {
            text-align: center;
            font-family: sans-serif;
            font-size: 15px;
        }

        .forget a {
            text-decoration: none;
            color: #390264;
        }

        .formBox p {
            width: 80%;
            color: grey;
            font-weight: 600;
        }

    .container {
        position: relative;
        overflow: hidden;
    }

    .container::before {
        content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background-image: radial-gradient(circle at top left, #00ffca, #ff0090e8);

    transform: translate(-50%, -50%);
    border-radius: 50%;
    z-index: -1;
    }
    .formBox {
        position: relative;
    }

    .right-corner-content {
        position: absolute;
        top: 10px;
        right: 10px;
        font-family: sans-serif;
        font-size: 14px;
        color: #4caf50;
    }
    .formBox {
        position: relative;
    }

    .right-corner-content {
        overflow: hidden;
        position: absolute;
        right: 0;
        font-family: sans-serif;
        font-size: 14px;
        z-index: -1;
        background-image: radial-gradient(circle at top left, #4e9f8e, #ff0090e8);

        bottom: 0;
        float: right;
        height: 50%;
        bottom: 0;
        top: 84%;
        height: 30%;
        right: -80px;
        width: 23%;
        border-radius: 46%;
    }
  .formBox img{
    width: 45%;
    position: absolute;
    left: 24%;
    top: -10%;
    height: auto;
  }
  .formBox h1{
    visibility: hidden;
  }

 
        /* New CSS styles for the eye symbol */
        .password-container {
            position: relative;
        }

        .password-container input[type="password"] {
            padding-right: 30px;
        }

        .password-container .eye-icon {
            position: absolute;
            top: 50%;
            right: 20%;
            transform: translateY(-70%);
            cursor: pointer;

        }
        .rtimg{
        width: 17%;
        z-index: -1;
        overflow: hidden;
        position: absolute;
        right: -60px;
        top: -46px;
      }
    
       
    

    
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>



        <body>
    <div class="container">
        <div class="left">
            <img src="./Limages/undraw_remotely_2j6y.svg" alt="" srcset="" />
        </div>
        <div class="right">
            <div class="formBox">
                <img src="./Limages/retrod-removebg-preview.png" alt="" srcset="">
                <form action="" method="post">
                    <h1>Login</h1>
                    <h3>Welcome :)</h3>
                    <p>To keep connected with us please login with your personal information by email and password and
                        don't share your username and password with others because it may be hacked</p>

                    <input type="text" name="username" placeholder="Username" required />
                    <div class="password-container">
                        <input type="password" name="password" placeholder="Password" required />
                        <i class="eye-icon fa fa-eye" aria-hidden="true"></i>
                    </div>

                    <input type="submit" name="login" value="LogIn" />
                    
                </form>
            </div>
        </div>
        <div class="right-corner-content">

        </div>
        <img src="./Limages//Untitled-4.svg" alt="" class="rtimg" srcset="">
    </div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- Include Font Awesome library -->
    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script>
        // Toggle password visibility
        const eyeIcon = document.querySelector('.eye-icon');
        const passwordInput = document.querySelector('input[name="password"]');

        eyeIcon.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });
    </script>
</body>

</html>