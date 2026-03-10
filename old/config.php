<?php

    define('DB_HOST', 'localhost'); // host
    define('DB_USER', 'retroxbe_retrodTech'); // username
    define('DB_PASSWORD', 'Pg0LOu+gqmn4'); // password
    define('DB_NAME', 'retroxbe_retrodTech'); // database name

    //Connecting to database
    if($conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)){

        //connecting to table
        if(!mysqli_select_db($conn, DB_NAME)){

            echo "Error in connecting to database - ".mysqli_error($conn); // error message if database not found

        }
    } else {

        echo "Error in connection - ".mysqli_error($conn); // error message if host is not connected

    }
