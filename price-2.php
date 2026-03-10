<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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

$sqlmain = "SELECT * FROM prices where planeId = 'Starter'";
$resultmain = $conn->query($sqlmain);

if ($resultmain->num_rows > 0) {
    // Fetch all rows into an array

    $rowmain = $resultmain->fetch_assoc();
    $montpriceofStarter = $rowmain['monthly_price'];
    $sixmonthpercofStarter = $rowmain['sixMonthDis'];
    $oneyrpercofStarter = $rowmain['oneYrDis'];

    $sixmonthpercofStarter = $montpriceofStarter - ($montpriceofStarter * $sixmonthpercofStarter / 100);
    $oneyrpercofStarter = $montpriceofStarter - ($montpriceofStarter * $oneyrpercofStarter / 100);
} else {
    echo "No records found.";
}



$sqlmain2 = "SELECT * FROM prices where planeId = 'Plus'";
$resultmain2 = $conn->query($sqlmain2);

if ($resultmain2->num_rows > 0) {
    // Fetch all rows into an array

    $rowmain2 = $resultmain2->fetch_assoc();
    $montpriceofPlus = $rowmain2['monthly_price'];
    $sixmonthpercofPlus = $rowmain2['sixMonthDis'];
    $oneyrpercofPlus = $rowmain2['oneYrDis'];

    $sixmonthpercofPlus = $montpriceofPlus - ($montpriceofPlus * $sixmonthpercofPlus / 100);
    $oneyrpercofPlus = $montpriceofPlus - ($montpriceofPlus * $oneyrpercofPlus / 100);
} else {
    echo "No records found.";
}



$sqlmain3 = "SELECT * FROM prices where planeId = 'Elite'";
$resultmain3 = $conn->query($sqlmain3);

if ($resultmain3->num_rows > 0) {
    // Fetch all rows into an array

    $rowmain3 = $resultmain3->fetch_assoc();
    $montpriceofElite = $rowmain3['monthly_price'];
    $sixmonthpercofElite = $rowmain3['sixMonthDis'];
    $oneyrpercofElite = $rowmain3['oneYrDis'];

    $sixmonthpercofElite = $montpriceofElite - ($montpriceofElite * $sixmonthpercofElite / 100);
    $oneyrpercofElite = $montpriceofElite - ($montpriceofElite * $oneyrpercofElite / 100);
} else {
    echo "No records found.";
}




$sql = "SELECT * FROM  featureitems";
$result = $conn->query($sql);



if ($result === FALSE) {
    echo "Error executing query: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        // Fetch all rows into an array
        $featuresArray = array();
        while ($row = $result->fetch_assoc()) {
            $featuresArray[] = $row["features"];
        }
    } else {
        echo "No records found.";
    }
}



$sql2 = "SELECT * FROM  featureitems2";
$result2 = $conn->query($sql2);

if ($result2 === FALSE) {
    echo "Error executing query: " . $conn->error;
} else {
    if ($result2->num_rows > 0) {
        // Fetch all rows into an array
        $featuresArray2 = array();
        while ($row2 = $result2->fetch_assoc()) {
            $featuresArray2[] = $row2["features"];
        }
    } else {
        echo "No records found.";
    }
}

$sql3 = "SELECT * FROM  featureitems3";
$result3 = $conn->query($sql3);

if ($result3 === FALSE) {
    echo "Error executing query: " . $conn->error;
} else {
    if ($result3->num_rows > 0) {
        // Fetch all rows into an array
        $featuresArray3 = array();
        while ($row3 = $result3->fetch_assoc()) {
            $featuresArray3[] = $row3["features"];
        }
    } else {
        echo "No records found.";
    }
}
?>



<!doctype html>

<html lang="en-US">


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<title>Retrod || Pricing</title>

<?php include('screen/header.php') ?>

<style>
    @media only screen and (max-width: 584px) {
        .price_section .container .row {
            margin: 0 auto;
            width: 85%;
        }
    }

    @media only screen and (max-width: 460) {
        .first_btn {
            padding: 5px 11px;
            margin-right: 15px;
            border-radius: 10px;
            background-color: #B81265;
            color: white;
            cursor: pointer;
            margin-bottom: 15px;
        }
    }

    i.colour_ext.fa.fa-check {
        color: #ffc107;
    }

    .tronix-section-title-content {

        text-align: center;

        padding-top: 92px;

    }



    section.elementor-section.elementor-top-section.elementor-element.elementor-element-48fd87c.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
        margin-top: 50px;
    }



    .elementor-column.elementor-col-100.elementor-top-column.elementor-element.elementor-element-6e221e8 {
        padding-top: 87px;
        padding-bottom: 95px;
    }



    .elementor-column.elementor-col-100.elementor-top-column.elementor-element.elementor-element-deaa01f {
        padding-top: 107px;
        padding-bottom: 46px;
    }



    section.elementor-section.elementor-top-section.elementor-element.elementor-element-064a28e.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default {
        padding-top: 100px;
    }


    .price_section .switcher {
        margin-top: 50px;
    }



    .price_section .month {
        margin-right: 10px;
    }



    .price_section .active {
        color: #fff;
        font-weight: 700;
        background: #000
    }

    .price_section .pricing-table {
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

    .price_section .pricing-table :hover strong {
        color: #ff2391;
    }

    .price_section .pricing-table :hover .month {
        color: #ff2391;
    }

    .price_section .pricing-table :hover .pricing-table__currency {
        color: #ff2391;
    }

    @media only screen and (max-width: 639px) {
        .pricing-table {
            padding: 50px 20px 60px;
        }
    }






    .price_section .pricing-table__ribbon {
        background-color: #ea0a0a;
        position: absolute;
        padding: 9px 56px;
        color: #fff;
        left: -53px;
        top: 30px;
        /* font-family: "Karla", sans-serif; */
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }



    .price_section .pricing-table__icon {

        display: block;

        font-size: 56px;

        color: #929292;

    }



    .price_section .pricing-table__title {
        font-size: 24px;
        font-weight: 700;
        padding: 10px;
        font-family: sans-serif;
    }



    .price_section .pricing-table__price-box {
        color: #000;
        font-weight: 700;

    }



    .price_section .pricing-table__currency {

        display: inline-block;

    }



    .price_section .pricing-table__price {
        font-size: 56px;
        transition: .2s ease-in-out;
        font-weight: 700;
    }

    .pricing-table__price strong {
        font-weight: 700;
    }

    span.pricing-table__price .remove {
        display: block;
        font-size: 18px;
        text-decoration: line-through;

        padding: 0 0 10px 0;
        color: red;
    }

    .price_section .pricing-table__term {

        font-size: 13px;

        display: block;

        color: #929292;

        font-family: "Lato", sans-serif;

    }



    .price_section .pricing-table__features {

        color: #929292;

        font-size: 15px;

        margin-top: 14px;

        margin-bottom: 40px;

    }



    .price_section .pricing-table__features li {

        padding: 5px;
        text-align: left;
        list-style-type: none;
        line-height: 1.5;
        color: #000;

    }







    .whatsapp_btn {

        background: #B81265;

        border-radius: 999px;

        box-shadow: #ff2391 0 10px 20px -10px;

        box-sizing: border-box;

        color: #FFFFFF;

        cursor: pointer;

        font-family: Inter, Helvetica, "Apple Color Emoji", "Segoe UI Emoji", NotoColorEmoji, "Noto Color Emoji", "Segoe UI Symbol", "Android Emoji", EmojiSymbols, -apple-system, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", sans-serif;

        font-size: 16px;

        font-weight: 700;

        line-height: 24px;

        opacity: 1;

        outline: 0 solid transparent;

        padding: 8px 18px;

        user-select: none;

        -webkit-user-select: none;

        touch-action: manipulation;

        width: fit-content;

        word-break: break-word;

        border: 0;

    }



    ul.price_feature {

        line-height: 13px;

    }





    .price_header {
        background: rgba(255, 255, 255, 0.18);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(7.1px);
        -webkit-backdrop-filter: blur(7.1px);
        border: 1px solid rgba(255, 255, 255, 0.09);
        padding: 12px;
        margin-top: 65px;
        background-image: url(img/pricing-plan-bkgd.png)
    }



    .price_header h5 {

        text-align: center;

        padding-bottom: 40px;

    }



    .pricing-table__features h5 {

        font-size: 18px;

        font-weight: 900;

    }



    .pricing-table__features h6 {

        font-size: 14px;

        font-weight: 900;

        text-align: left;

    }



    .pricing-table__features p {
        font-size: 15px;
        background-color: #fe23901c;
        color: #000000;
        border-radius: 9px;
        padding: 5px 5px;
        font-weight: 700;
        box-shadow: rgb(49 110 200) 0px 30px 60px -12px inset, rgb(49 110 200) 0px 18px 36px -18px inset;
        width: 37%;
        margin: 0px auto;
    }

    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap");



    * {

        margin: 0;

        padding: 0;

        box-sizing: border-box;

        font-family: "Poppins", sans-serif;

    }



    :root {

        --main-blue: #71b7e6;

        --main-purple: #9b59b6;

        --main-grey: #ccc;

        --sub-grey: #d9d9d9;

    }



    .modal-body_price body {

        display: flex;

        height: 100vh;

        justify-content: center;

        /*center vertically */

        align-items: center;

        /* center horizontally */

        background: linear-gradient(135deg, var(--main-blue), var(--main-purple));

        padding: 10px;

    }



    /* container and form */

    .modal-body_price .container {

        max-width: 700px;

        width: 100%;

        background: #fff;

        padding: 25px 30px;

        border-radius: 5px;

    }



    .modal-body_price .container .title {

        font-size: 25px;

        font-weight: 500;

        position: relative;

    }



    .modal-body_price.container .title::before {

        content: "";

        position: absolute;

        height: 3.5px;

        width: 30px;

        background: linear-gradient(135deg, var(--main-blue), var(--main-purple));

        left: 0;

        bottom: 0;

    }



    .modal-body_price .container form .user__details {

        display: flex;

        flex-wrap: wrap;

        justify-content: space-between;

        margin: 20px 0 12px 0;

    }



    /* inside the form user details */

    .modal-body_price form .user__details .input__box {

        width: calc(100% / 2 - -66px);
        margin-bottom: 15px;
        margin: 0px auto;
        font-size: 18px;
        font-weight: 600;
        color: #f31717;
    }



    .modal-body_price .user__details .input__box .details {

        margin-bottom: 5px;
        display: block;
        color: black;
        font-weight: 600;
    }



    .modal-body_price .user__details .input__box input {

        height: 39px;

        width: 100%;

        outline: none;

        border-radius: 5px;

        border: 1px solid #767676;

        padding-left: 15px;

        font-size: 16px;

        border-bottom-width: 2px;

        transition: all 0.3s ease;

    }

    .modal-body_price .user__details .input__box input:focus,

    .modal-body_price .user__details .input__box input:valid {

        border-color: var(--main-purple);

    }



    /* inside the form gender details */



    .modal-body_price form .gender__details .gender__title {

        font-size: 20px;

        font-weight: 500;

    }



    .modal-body_price form .gender__details .category {

        display: flex;

        width: 80%;

        margin: 15px 0;

        justify-content: space-between;

    }



    .modal-body_price .gender__details .category label {

        display: flex;

        align-items: center;

    }



    .modal-body_price .gender__details .category .dot {

        height: 18px;

        width: 18px;

        background: var(--sub-grey);

        border-radius: 50%;

        margin: 10px;

        border: 5px solid transparent;

        transition: all 0.3s ease;

    }



    .modal-body_price #dot-1:checked~.category .one,

    .modal-body_price #dot-2:checked~.category .two,

    .modal-body_price #dot-3:checked~.category .three {

        border-color: var(--sub-grey);

        background: var(--main-purple);

    }

    .free_demo {
        background: transparent !important;
    }


    .modal-body_price form input[type="radio"] {

        display: none;

    }



    /* submit button */

    .modal-body_price form .button {

        height: 45px;

        margin: 45px 0;

    }



    .modal-body_price form .button input {

        height: 100%;

        width: 100%;

        outline: none;

        color: #fff;

        border: none;

        font-size: 18px;

        font-weight: 500;

        border-radius: 5px;

        background: linear-gradient(135deg, var(--main-blue), var(--main-purple));

        transition: all 0.3s ease;

    }



    .modal-body_price form .button input:hover {

        background: linear-gradient(-135deg, var(--main-blue), var(--main-purple));

    }



    @media only screen and (max-width: 584px) {

        .container {

            max-width: 100%;

        }



        form .user__details .input__box {

            margin-bottom: 15px;

            width: 100%;

        }



        form .gender__details .category {

            width: 100%;

        }



        .container form .user__details {

            max-height: 300px;

            overflow-y: scroll;

        }



        .user__details::-webkit-scrollbar {

            width: 0;

        }

    }



    span.close_btn {

        color: white;

        padding: 5px 5px;

        background-color: red;

    }



    .modal-body_price .submit_btn {

        text-align: center;
        padding-top: 24px;

    }

    h5#exampleModalLongTitle {
        margin: 0px auto;
        color: #ff2391;
    }

    section.freedemo_section {
        padding-top: 127px;
    }

    .offer.appear {
        animation: appearAnimation 1s ease-out;
    }

    @keyframes appearAnimation {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    :root {
        --theme-color-one: #025ba0;
        --theme-color-two: #9bc72b;
        --theme-color-three: #f0c517;
        --theme-color-four: #bf1724;
        --theme-color-five: #5cc9f4;
        --white: #fff;
        --black: #000;
        --grey: #999;
        background: var(--black);
        color: var(--white);
    }

    body {
        font-family: 'Alatsi', sans-serif;
    }


    .button {
        display: inline-block;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        min-width: 100px;
        padding: 22px 33px;
        font-family: 'Lobster', cursive;
        font-size: 26px;
        line-height: 26px;
        text-decoration: none;
        color: #FFF;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.75);
        /* background: #5e0d0c; */
        outline: none;
        border-radius: 15px;
        border: 1px solid #4c0300;
        box-shadow:
            inset 1px 1px 0px rgba(255, 255, 255, 0.25),
            /* highlight */
            inset 0 0 6px #a23227,
            /* inner glow */
            inset 0 80px 80px -40px #ac3223,
            /* gradient */
            1px 1px 3px rgba(0, 0, 0, 0.75);
        /* shadow */

        position: relative;
        overflow: visible;
        /* IE9 & 10 */
        -webkit-transition: 500ms linear;
        -moz-transition: 500ms linear;
        -o-transition: 500ms linear;
        transition: 500ms linear;
    }

    .button::before {
        content: '';
        display: block;
        position: absolute;
        top: -7px;
        left: -3px;
        right: 0;
        height: 23px;
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAXCAYAAACS5bYWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABFpJREFUeNrUV0tIo1cUvpkYjQ4xxSA6DxuNqG0dtaUKOgs3s6i0dFd3pSsXdjeIixakiGA34sZuXCkoONLFwJTK4GMYLYXg29gatTpiXurkbd7vv9/5ub+IxuhA7eiFQ5Kbc8/57ne/e87/ywRBYLdl3GG3aNwqsLJ0k0tLS+fmcnNzWUVFBVMoFGx2djarvLxcm5OTw+bm5iytra2xc4ExNjY27iqVyvvwK6CpeDzuCYVC1urq6qDA9UcfPp+PHR4esmAwKK6tr68/l5/8rgQ2Ozub1dbWyiYmJooaGxt/VqvV38jlchX9l0qlwoFA4DWS/RKLxRxFRUVf5+XlPcaaT2AP0sVPJBL2SCRiAPBpu93+vKamZo/Ae71eZjabWV1dXVqw7CKwp43ksrCw8Bhg7MJ/PLDZ5PHx8cz29vYT5JGD/bSYLgTrcDgYdk6siSc6NjZWDaAe4ZoHQL+cmZnRpZPnhWDpD8kw7uKo9ML/NMCsd2tr61vkzboMrEyv138M7TyLRqMWMBsX3sMgaZhMpp+AR5EJrCocDpuEGzKg4x8khs+CVWxubvZfR9JkMik4nU7BarUKLpeLmLsKuwIqTLynp4fqmIzASrqQT09Pf1VVVfX0KsWZ6uHBwQHTaDSsoKAgo6/H4xHLEcrVyRwuEisrKzs5XrrIVAVwiUVDKRRrL+YI32ewdVhMApuHWvcj6vids6J2u90MF4yBHUZNgKoEBaRBQalJqFSqtJfUYrGIlQX+ydXVVTN+u0tKSjQNDQ1axJVl2iTypebn55d7e3v/kqoDgZU1NTU9LCws/Py0M+2ekuGincxJ3yF+18jIyHJLS0slQJUWFxczrBeBE0vE5tHRkbixlZWVfSR8gTX/0P5gH7S1tX3Z3t7+BW8qAvwSfr8/jA0EIRM/qoFtampqbW9vTw+XA+ojUruVd3Z2tvb19T2TQFEim81GgVJoCvvj4+NLOJZgaWmpemdn5y3a6BbcnJDAw8HBwac6ne6eqCW5XDwB3qVSqM9/DAwMUNy/eVLabT7sI25qwgujThCBhWE+mAt2yNc4SQKSZrOQQE1HS22VJkmPAGTr7+//fX19fRk+Zgq0trbGeFAKEAQT98BSqKOj47vm5uaa/Px8JeIk4GcaHh6eWlxcfAU/A8xG67BxAX3fwdcbYUpSDJ06Z49Ak8ZC3OL8f3YiA4PBYKdLQ2AJ9OTk5GpXV9cQiCVh79M94QtlPLDUE/1gPNrd3f0W33W4cBoco48zQuy/IZYAMnGqlSc4c66L9JruQUaSARXeT8HGKzxAqFBekni6+h46+pMzGiJGMgTOJh1yU/KNEGDvZWvfBawkA9ppwGg0mrRa7SOI2g+gxOgbJIpdFpj72PnxSnPX8vqRxTURgBQWKisrH+GThOm+CtAzoK/9/Uiqq/6hoaHfdnd3jaOjo7/yY7yxbwqkWy3sQzpS2C6YirwvUJk0y7hurfyGRrnduPGvAAMASmo8wzeVwfsAAAAASUVORK5CYII=) no-repeat 0 0,
            url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAXCAYAAABOHMIhAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABiZJREFUeNrsWMtPlFcUvzPMwIDysLyRR4uATDHWCiVgSmRlios2DeiiXUFs0nRBd6arxqQhJDapkYXhP4BqDKTQhZaFNQSCaBEVJjwdHsNr5DUMDDPDzPT3u7nTDEgRKrKgc5KT+z3uufec33de99P4fD4RpL2RNgjB3kn35MkTeRERESFiYmLkGBoaKnQ6nWSNRvPPZFxr+vv7k6KioiIdDsfa8vLyQkFBgcP3Bnel3MDAQArWI0eFhISE87nb7bZ7PJ4VvLYuLi5O5+fnu9+kMNfq6+tLjIyMzMY6KeBEbK/XarXReI3lPDZMWcc4v7GxYV1dXR3Jy8ub2E5HPvJ6vRSSDH0ku1wuAfsEZOV1IEFHoeNFdHS0yMrK2knR0Lm5uR+hxLdQMjbwHTZbB41h8RGwCdc9MzMzneHh4bGJiYlf4SN8ijkfwqiIncCAAR7Iz2GPSShudjqdfeCeqampvwBQfFxc3JdYqwTv8gB8/F48A8BgKecE14V+L7ju2tpae05OzkuCCZvkPOj8mizmC6vVKtmPu+bx48cC3qI1mUyFUOyywWD4SHlELBaLJmCHNcwAghuAOujtuF4FqHO4nsX4EsAS3I4TJ04ME1h8PDE9PS09TYZoY2Pj1729vd6lpSVfkDYTPG0UkfNDRUWFgQ5Gb2Mh0N29e9eG/GQfHh4W8/PzwUy/ObQ/gMfVVlZW1iAiZdQxp3nv3LljRoL/5erVq1UIxzSiiVD9X4EDYATynCwAzGO858hCQRoaGmJFZNJz8YIcBc4BF966dau6sLAwBxVSJCUlCSThQwuU3W6XkYUok1Vzm5znQx5bbm9v77p+/frPeNSNRzZ/ISBwrG4ZR48eLamtrf2+uLjYSEG9Xi/wTISFhQlWGXohyzO/CJlVl23KQRLbABoaHx+/Z1lUZ/Hq1SsJFj3JT3hmHx8fnydPTEzMj46OziHPW2w22wxeD4Kfgadh/4YEzU8Az4DhffAn5eXlX1y6dKkEoCTspAQ9Mjs7+0BBo8Fms1lkZGTsOo0QLLRNkvnR+fEJzIMHD0xtbW39CL8JTFtSbAOvBIyLHIGVm9VzE2gKuDAMSSpcT6KXyT137lx2cnLyMXhcGDb3wq3XuWF3d/fCzZs3P0c4v5eSknJQbYLo7Ox0gC2lpaVZ3Be67Th/dnZWoAJKsJC3XA8fPhxoamp6hMb+BaaMgWcUMGtszZjiFDNmvcDI91pzG0iY4ARwkwrxkcHBwUdgNrRMbnrqoRbkVzDcvn3bl5qaWsmcgFH4G8XdEGUWFhak51AuISFBnkoCTyFbyWKxCJwIxlC0fq2rq7tcVFRkRKskjh8/Lr0+kBjCCDV/knfdv3//WX19/R8IRRNemxlu4AXwKqM+EJwdj1HbPYSwh3sCPAJDABm2LLchCjS+5/kirKGhwWk0GrMuXrxYQuX9hm/XXTMXMY+srKwI5ApZrbYmZh7deEJhAUKjLe/pLTzSsCuHrK+1tbUJVe3P6upq87Vr174rKysrYHVj/uW+OH3IfEuw4F3ee/fuPQfAvwOs5yyE4CnlFOu7BWrTCWlreO6FACpBZGwUw4BvkANLobReHb3kGZYGsGzTq/zlO8AT1ru6uoZbWlqeA6gINJAfnz59OlVLoX8Jtebm5raampqfcMvQYgTknz9//sKVK1c+y83NTdIEuCnaKMuNGzd+6+np6cCtSTkAw9D9X8Dyh+dbgaaAC1XAnUlPTy+qqqq6cPbs2UzkmWjNljiDJzpwHFnCkW2yo6NjCKW8H54wjlezKvRT09LSTsJrz5w6dSoN+Yp51ADAPUj8VoDbDq9pxrwuJcNIYQllJTIi/xopBw/VA7DJp0+f9hA78CgL5F5C8J2CpoCj8sfA6WCe/FPRhsRlZmbGIs8Y4FFO5CJgtrSsvrRVGW1V93b1myoGnKAKEcHgnwsWpg1lNI0fphwrmdqbckeU18WrnlOjqp5/j7W3BWvfQVPKa5SBkcrYCNVB65TRTlWZ1lXiXVU5xbtlDb2SPaLWYwrgHIcqPg6Vc7fbX69Yoyqfa7/AeiegbWOEVhmsVcWDwPn224iDJgla8Hd38Hd3ELQgaIeI/hZgAIPEp0vmQJdoAAAAAElFTkSuQmCC) no-repeat 50% 0,
            url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAXCAYAAACFxybfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAodJREFUeNrsVb1rWlEUv2pN/GqspKRSKFYXWzEloIWif0Fn6dJChQ7OQil0qd3EzcEpg0OgdHDr4CQODk7VRlLMEIVqApX4We0zflR9/Z1Ui4T34ksaaAYP/Hzc673n/M6550PG8zz73yKjn0wm83fDYDAwo9HINBrNnwOQg4MDs0ql2lQqlfdAWont7ng8Pjw+Ps44nc4G1pI9EXWaSOzt7TGO42aH5Pv7+08ajUZ0MBiUeXEZd7vdL5VK5fX29rZ+5tQiEmdxKrlcjsEYczgcynK5/BKKv/IXFNz/XiqVXkHdjUuRIA9SqdRD8or/R8Ez9fr9fqHVakUR4c2z0REjIQuHw2ZcrPBXLCA0RHTezEdHjIQqkUhEr9I4HOILhQLf6/VoOUFEvDMiQiToDx1Cdz+bzZ6bUFarlel0OkkVUK/XWbvdPoVer5fh3ntsfwJ+CJ2XA4p0Op1bpBgJyxDehQQ6nQ5DZXHBYDBZq9V+EhFUndnr9drEqoc2bwJbwGPgtohuVSwWe2Gz2TZMJpNgRKi6qtUqg2EWj8dTgUDgo0KhWPN4PC70EvXOzs67fD6/S6kiRIKeZA1YJ2MiJNbdbvfTUCjkV6vVK2hcDF8GI2w0GrGTkxM2HA5PDxaLxSOfz/cWEfk81X0XIMMFgJJ/srBjCgk8IdcfuVyuZ36//7nFYtkQyAMumUzuRiKRD0jMFLa+AZOpYwqgB/ziBVqmVBKUO7eAB/R0WG/Z7XaTVqtdbTabHJL6EK2djBaBPHA0NSqpbUsiMUeEBgpF4Q5AbZrmSJ/yEWgBTaBNHl9kdkgmMUeG7qwAq9PqovceTA3zlxlgsuswyuXsGsiSxJLEkoSY/BZgAEjRodi+uBruAAAAAElFTkSuQmCC) no-repeat 100% 0;

    }

    .button:hover {
        background: #B81265;
        text-shadow: 0 1px 2px rgba(0, 0, 0, 0.75), 0 0 40px #FFF;
        box-shadow:
            inset 1px 1px 0px rgba(255, 255, 255, 0.25),
            /* highlight */
            inset 0 0 6px #da3b2c,
            /* inner glow */
            inset 0 80px 80px -40px #dd4330,
            /* gradient */
            1px 1px 3px rgba(0, 0, 0, 0.75);
        /* shadow */

    }

    .button:focus {
        outline: none;
        /*FF*/
    }

    .button:active {
        box-shadow:
            inset 1px 1px 0px rgba(255, 255, 255, 0.25),
            /* highlight */
            inset 0 0 6px #da3b2c,
            /* inner glow */
            inset 0 80px 80px -40px #dd4330,
            /* gradient */
            0px 1px 0px rgba(255, 255, 255, 0.25);
        /* shadow */

        -webkit-transition: 50ms linear;
        -moz-transition: 50ms linear;
        -o-transition: 50ms linear;
        transition: 50ms linear;
    }



    .bg {
        width: 100%;
        height: 100%;
        display: table;
        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNkMzU0NDgiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjNGExMTBjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L3JhZGlhbEdyYWRpZW50PgogIDxyZWN0IHg9Ii01MCIgeT0iLTUwIiB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
        background: -moz-radial-gradient(center, ellipse cover, #d35448 0%, #4a110c 100%);
        /* FF3.6+ */
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #d35448), color-stop(100%, #4a110c));
        /* Chrome,Safari4+ */
        background: -webkit-radial-gradient(center, ellipse cover, #d35448 0%, #4a110c 100%);
        /* Chrome10+,Safari5.1+ */
        background: -o-radial-gradient(center, ellipse cover, #d35448 0%, #4a110c 100%);
        /* Opera 12+ */
        background: -ms-radial-gradient(center, ellipse cover, #d35448 0%, #4a110c 100%);
        /* IE10+ */
        background: radial-gradient(ellipse at center, #d35448 0%, #4a110c 100%);
        /* W3C */
    }

    .subheading {
        margin-left: 19px;
    }
.button-container {
  display: flex;
  justify-content: center; /* Center the buttons horizontally */
}

.button-container button {
  margin: 0 10px; /* Adjust the spacing between buttons */
}
</style>



<body class="home page-template page-template-template-home page-template-template-home-php page page-id-600 wp-custom-logo wp-embed-responsive theme-tronix woocommerce-no-js tronix-woo-active page-builder-used woocommerce-active e-lazyload elementor-default elementor-kit-6 elementor-page elementor-page-600">

    <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-dark-grayscale">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0 0.49803921568627" />

                    <feFuncG type="table" tableValues="0 0.49803921568627" />

                    <feFuncB type="table" tableValues="0 0.49803921568627" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-grayscale">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0 1" />

                    <feFuncG type="table" tableValues="0 1" />

                    <feFuncB type="table" tableValues="0 1" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-purple-yellow">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />

                    <feFuncG type="table" tableValues="0 1" />

                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-blue-red">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0 1" />

                    <feFuncG type="table" tableValues="0 0.27843137254902" />

                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-midnight">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0 0" />

                    <feFuncG type="table" tableValues="0 0.64705882352941" />

                    <feFuncB type="table" tableValues="0 1" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-magenta-yellow">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0.78039215686275 1" />

                    <feFuncG type="table" tableValues="0 0.94901960784314" />

                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-purple-green">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />

                    <feFuncG type="table" tableValues="0 1" />

                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg><svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">

        <defs>

            <filter id="wp-duotone-blue-orange">

                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />

                <feComponentTransfer color-interpolation-filters="sRGB">

                    <feFuncR type="table" tableValues="0.098039215686275 1" />

                    <feFuncG type="table" tableValues="0 0.66274509803922" />

                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />

                    <feFuncA type="table" tableValues="1 1" />

                </feComponentTransfer>

                <feComposite in2="SourceGraphic" operator="in" />

            </filter>

        </defs>

    </svg>

    <div id="page" class="site">

        <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>



        <div data-elementor-type="wp-post" data-elementor-id="602" class="elementor elementor-602">

            <?php include('screen/nav.php') ?>


        </div>

        <div class="breadcroumb-area">

            <div class="container">

                <div class="breadcroumn-contnt">
                    <h2 class="page-title">Pricing</h2>


                </div>

            </div>

        </div>

    </div><!-- #page -->


    <div class="container">

    </div>


    <section class="price_section">

        <div class="container">



            <!--<div class="switcher text-center">
                <span class="first_btn switcher-btn" id="month">3 Months</span>
                <span class=" first_btn switcher-btn " id="smonth">6 Months</span>
                <span class=" first_btn switcher-btn active" id="year">1 Year</span>
            </div>--->

			<div class="button-container pb-5 pt-5">
  <button class="first_btn switcher-btn" id="month">3 Months</button>
  <button class=" first_btn switcher-btn " id="smonth">6 Months</button>
  <button class=" first_btn switcher-btn active" id="year">1 Year</button>
</div>


            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table pricing-table--best">
                        <div class="pricing-table__price-box">
                            <i class="pe-7s-cup pricing-table__icon"></i>
                            <h3 class="pricing-table__title large">Hotelier Starter</h3>
                            <span class="pricing-table__price" data-year-price="<?php echo $oneyrpercofStarter ?>" data-smonth-price="<?php echo $sixmonthpercofStarter ?>" data-month-price="<?php echo $montpriceofStarter ?>"><span class="pricing-table__price" data-year-price="3,300" data-smonth-price="3,600" data-month-price="6,600"><span class="remove"><span>₹</span> <?php echo $montpriceofStarter ?></span> <strong><span></span><span class="pricing-table__currency">₹</span><?php echo $oneyrpercofStarter ?></strong> <span class="month">/ M</span></span></span>
                        </div>
                        <div class="pricing-table__features">

                            <p>Features
                            <h6><span class="subheading">Top Features</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="webBuilderIcon"></i> </span>Web-builder</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="bookingEngineIcon"></i></span> Booking Engine</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="aiChatbotIcon"></i></span>AI-Chatbot</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="propertyManagementSystemIcon"></i></span>Property Management System</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="marketingAutomationIcon"></i></span>Marketing Automation</li>
                            </ul>
                            <h6><span class="subheading">web-builder</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check"></i> </span>SSL</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="customizationDesignIcon"></i></span> Customization Design</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="properRedirectionIcon"></i></span>Proper Redirection</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="allDeviceResponsiveIcon"></i></span>All device responsive</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="seoFriendlyPageIcon"></i></span>SEO friendly Page</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="dynamicBlogManagementIcon"></i></span>Dynamic Blog Management</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="eventDetailsIcon"></i></span>Event Details</li>
                            </ul>

                            <h6><span class="subheading">Booking Engine</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="zeroLoadingTimeIcon"></i> </span>Zero-loading time</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="paymentGatewayInbuiltIcon"></i></span> Payment Gateway inbuilt</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="trackBookingsIcon"></i></span>Track try/failed bookings</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="mobileFriendlyIcon"></i></span>Mobile Friendly</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="couponManagementSystemIcon"></i></span>Coupon Management System</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="companyVoucherIcon"></i></span>450+ company voucher</li>
                            </ul>
                            <h6><span class="subheading">Property Management System</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-times" id="reservationCentreIcon"></i></span>Reservation centre</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="hotelGroupManagementIcon"></i></span> Hotel Group Management </li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="manageUsersIcon"></i></span>Manage users and privilege & Security Control</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="profileManagementIcon"></i></span>Profile management</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="frontOfficeOperationsIcon"></i></span>Front-Office Operations</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="changesDepositsInvoicingIcon"></i></span>Changes, deposits & Invoicing </li>
                            </ul>
                            <h6><span class="subheading">Services & Support</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="socialMediaMarketingIcon"></i> </span>SocialMedia Marketing - Google My Business</li>
                                <li><span class="symbol_add"><i class="colour_ext fa fa-check" id="standardPerformanceIcon"></i></span>Standard - Performance</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="support24x7Icon"></i> </span>24*7 support</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="domainIcon"></i> </span>Domain</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="professionalMailIcon"></i> </span>Professional Mail (Only - 1)</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="prioritySupportIcon"></i> </span>Priority Support</li>
                            </ul>
                        </div>

                        <div class="pricing-table__button">
                            <button data-toggle="modal" data-target="#registration_modal" class="whatsapp_btn" href="">Register</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table">
                        <div class="pricing-table__price-box">
                            <i class="pe-7s-science pricing-table__icon"></i>
                            <span class="pricing-table__ribbon">Best Valued</span>
                            <h3 class="pricing-table__title">Hotelier Plus</h3>
                            <span class="pricing-table__price" data-year-price="<?php echo $oneyrpercofPlus ?>" data-smonth-price="<?php echo $sixmonthpercofPlus ?>" data-month-price="<?php echo $montpriceofPlus ?>"><span class="pricing-table__price" data-year-price="<?php echo $oneyrpercofPlus ?>" data-smonth-price="<?php echo $sixmonthpercofPlus ?>" data-month-price="<?php echo $montpriceofPlus ?>"><span class="remove"><span>&#8377;</span><?php echo $montpriceofPlus ?></span> <strong><span class="pricing-table__currency">&#8377;</span> <?php echo $oneyrpercofPlus ?></strong> <span class="month">/ M</span></span></span>
                        </div>
                        <div class="pricing-table__features">
                            <p>Features </p>
                            <h6><span class="subheading">Top Features</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="webBuilder2Icon"></i> </span>Web-builder</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="bookingEngine2Icon"></i></span> Booking Engine</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="aiChatbot2Icon"></i></span>AI-Chatbot</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="propertyManagementSystem2Icon"></i></span>Property Management System</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="marketingAutomation2Icon"></i></span>Marketing Automation</li>
                            </ul>
                            <h6><span class="subheading">Web-builder</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check"></i> </span>SSL</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="customizationDesign2Icon"></i></span> Customization Design</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="properRedirection2Icon"></i></span>Proper Redirection</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="allDeviceResponsive2Icon"></i></span>All device responsive</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="seoFriendlyPage2Icon"></i></span>SEO friendly Page</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="dynamicBlogManagement2Icon"></i></span>Dynamic Blog Management</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="eventDetails2Icon"></i></span>Event Details</li>
                            </ul>
                            <h6><span class="subheading">Booking Engine</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="zeroLoadingTime2Icon"></i> </span>Zero-loading time</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="paymentGatewayInbuilt2Icon"></i></span> Payment Gateway inbuilt</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="trackBookings2Icon"></i> </span>Track try/failed bookings</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="mobileFriendly2Icon"></i></span>Mobile Friendly</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="couponManagementSystem2Icon"></i></span>Coupon Management System</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="companyVoucher2Icon"></i></span>450+ company voucher</li>
                            </ul>

                            <h6><span class="subheading">Property Management System</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="reservationCentre2Icon"></i> </span>Reservation centre</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="hotelGroupManagement2Icon"></i></span> Hotel Group Management</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="manageUsers2Icon"></i></span>Manage users and privilege & Security Control</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="profileManagement2Icon"></i></span>Profile management</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="frontOfficeOperations2Icon"></i></span>Front-Office Operations</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="changesDepositsInvoicing2Icon"></i></span>Changes, deposits & Invoicing </li>
                            </ul>
                            <h6><span class="subheading">Services & Support</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="socialMediaMarketing2Icon"></i> </span>SocialMedia Marketing -Facebook, Instagram and Google My Business </li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="standardPerformance2Icon"></i></span>Increased - Performance</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="support24x72Icon"></i> </span>24*7 support</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="domain2Icon"></i> </span>Domain</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="professionalMail2Icon"></i> </span>Professional Mail (Only-2)</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="prioritySupport2Icon"></i> </span>Priority Support</li>
                            </ul>
                        </div>
                        <div class="pricing-table__button">
                            <button data-toggle="modal" data-target="#registration_modal" class="whatsapp_btn" href="">Register</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-table">
                        <div class="pricing-table__price-box">
                            <i class="pe-7s-science pricing-table__icon"></i>
                            <h3 class="pricing-table__title">Hotelier Elite</h3>
                            <span class="pricing-table__price" data-year-price="<?php echo $oneyrpercofElite ?>" data-smonth-price="<?php echo $sixmonthpercofElite ?>" data-month-price="<?php echo $montpriceofElite ?>"><span class="pricing-table__price" data-year-price="<?php echo $oneyrpercofElite ?>" data-smonth-price="<?php echo $sixmonthpercofElite ?>" data-month-price="<?php echo $montpriceofElite ?>"><span class="remove"><span>&#8377</span> <?php echo $montpriceofElite ?></span> <strong><span class="pricing-table__currency">&#8377</span> <?php echo $oneyrpercofElite ?></strong> <span class="month">/ M</span></span></span>
                        </div>
                        <div class="pricing-table__features">
                            <p>Features </p>
                            <h6><span class="subheading">Top Features</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="webBuilder3Icon"></i> </span>Web-builder</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="bookingEngine3Icon"></i></span> Booking Engine</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="aiChatbot3Icon"></i></span>AI-Chatbot</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="propertyManagementSystem3Icon"></i></span>Property Management System</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="marketingAutomation3Icon"></i></span>Marketing Automation</li>
                            </ul>
                            <h6><span class="subheading">Web-builder</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check"></i> </span>SSL</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="customizationDesign3Icon"></i></span> Customization Design</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="properRedirection3Icon"></i></span>Proper Redirection</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="allDeviceResponsive3Icon"></i></span>All device responsive</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="seoFriendlyPage3Icon"></i></span>SEO friendly Page</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="dynamicBlogManagement3Icon"></i></span>Dynamic Blog Management</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="eventDetails3Icon"></i></span>Event Details</li>
                            </ul>

                            <h6><span class="subheading">Booking Engine</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="zeroLoadingTime3Icon"></i> </span>Zero-loading time</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="paymentGatewayInbuilt3Icon"></i></span> Payment Gateway inbuilt</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="trackBookings3Icon"></i> </span>Track try/failed bookings</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="mobileFriendly3Icon"></i></span>Mobile Friendly</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="couponManagementSystem3Icon"></i></span>Coupon Management System</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="companyVoucher3Icon"></i></span>450+ company voucher</li>
                            </ul>
                            <h6><span class="subheading">Property Management System</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="reservationCentre3Icon"></i> </span>Reservation centre</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="hotelGroupManagement3Icon"></i></span> Hotel Group Management</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="manageUsers3Icon"></i></span>Manage users and privilege & Security Control</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="profileManagement3Icon"></i></span>Profile management</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="frontOfficeOperations3Icon"></i></span>Front-Office Operations</li>
                                <li><span class="symbol_add"><i class="fa fa-check" id="changesDepositsInvoicing3Icon"></i></span>Changes, deposits & Invoicing </li>
                            </ul>
                            <h6><span class="subheading">Services & Support</span> <i class="fas fa-angle-right"></i></h6>
                            <ul class="price_feature">
                                <li><span class="symbol_add"><i class="fa fa-check" id="socialMediaMarketing3Icon"></i> </span>SocialMedia Marketing - Facebook, Instagram and Google My Business (As per Hoteliers Requirement)</li>

                                <li><span class="symbol_add"><i class="fa fa-check" id="standardPerformance3Icon"></i></span>Maximum - Performance</li>

                                <li><span class="symbol_add"><i class="fa fa-check" id="support24x73Icon"></i> </span>24*7support</li>



                                <li><span class="symbol_add"><i class="fa fa-check" id="domain3Icon"></i> </span>Domain</li>

                                <li><span class="symbol_add"><i class="fa fa-check" id="professionalMail3Icon"></i> </span>Professional Mail (Unlimited)</li>
                                <li><span class="symbol_add"><i class="fa fa-times" id="prioritySupport3Icon"></i> </span>Priority Support</li>




                            </ul>



                        </div>

                        <div class="pricing-table__button" style="position: relative; bottom: 19px;">
                            <button data-toggle="modal" data-target="#registration_modal" class="whatsapp_btn" href="">Register</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="freedemo_section">
        <h3 style="text-align: center;">Hotelier Essentials (Forever Free)</h3>
        <div class="container" style="background:black;">
            <div class="free_demo">
                <div class="free_demo_details">
                    <h5>For Specific Hotels</h5>
                    <div class="row">






                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="feature_details">
                                <span>SEO (On-Page, Technical, Off-Page)</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="feature_details">
                                <span>Dedicated Server</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="feature_details">
                                <span>Guest Managment Training</span>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="feature_details">
                                <span>24x7 Support</span>
                            </div>
                        </div>

                        <div class="btn_readmore">
                            <button data-toggle="modal" data-target="#registration_modal" class="whatsapp_btn" href="">Register Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <?php include('screen/brand.php') ?>




    <?php include('screen/footer.php') ?>

    <!--comments section-->

    <script type='text/javascript'>
        const lazyloadRunObserver = () => {

            const dataAttribute = 'data-e-bg-lazyload';

            const lazyloadBackgrounds = document.querySelectorAll(`[${dataAttribute}]:not(.lazyloaded)`);

            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {

                entries.forEach((entry) => {

                    if (entry.isIntersecting) {

                        let lazyloadBackground = entry.target;

                        const lazyloadSelector = lazyloadBackground.getAttribute(dataAttribute);

                        if (lazyloadSelector) {

                            lazyloadBackground = entry.target.querySelector(lazyloadSelector);

                        }

                        if (lazyloadBackground) {

                            lazyloadBackground.classList.add('lazyloaded');

                        }

                        lazyloadBackgroundObserver.unobserve(entry.target);

                    }

                });

            }, {

                rootMargin: '100px 0px 100px 0px'

            });

            lazyloadBackgrounds.forEach((lazyloadBackground) => {

                lazyloadBackgroundObserver.observe(lazyloadBackground);

            });

        };

        const events = [

            'DOMContentLoaded',

            'elementor/lazyload/observe',

        ];

        events.forEach((event) => {

            document.addEventListener(event, lazyloadRunObserver);

        });
    </script>


    <link rel='stylesheet' id='elementor-post-611-css' href='wp-content/uploads/elementor/css/post-6110fdd.css?ver=1687803773' media='all' />


    <script src='wp-content/plugins/tronix-core/assets/js/count-tof269.js?ver=1.0.1' id='tronixcore-count-js-js'>

    </script>

    <!--flex comments  & customer-->

    <script src='wp-content/themes/tronix/assets/slick/slick-minf269.js?ver=1.0.1' id='slick-min-js'></script>

    <!--navbar scroll-->

    <script src='wp-content/themes/tronix/assets/js/themef269.js?ver=1.0.1' id='tronix-theme-js'></script>


    <script>
        (function($) {
            var price = $('.pricing-table__price');
            var term = $('.pricing-table__term');
            var year = $("#year");
            var smonth = $("#smonth");
            var month = $("#month");

            month.on('click', function() {
                $('.first_btn').removeClass('active');
                $(this).addClass('active');

                price.each(function() {
                    var value = $(this).data('month-price');
                    var html = `<span class="pricing-table__currency">&#8377</span> <strong>${value}</strong> <span class="month">/  M</span>`;
                    $(this).html(html);
                });
            });

            smonth.on('click', function() {
                $('.first_btn').removeClass('active');
                $(this).addClass('active');
                year.removeClass('active');
                price.each(function() {
                    var value = $(this).data('smonth-price');
                    var monthVal = $(this).data('month-price');
                    var html = `<span class="remove"><span >&#8377</span> ${monthVal}</span> <strong><span class="pricing-table__currency">&#8377</span> ${value}</strong> <span class="month">/ M</span>`;
                    $(this).html(html);
                });
            });

            year.on('click', function() {
                console.log(term);
                $('.first_btn').removeClass('active');
                $(this).addClass('active');
                month.removeClass('active');
                price.each(function() {
                    var value = $(this).data('year-price');
                    var monthVal = $(this).data('month-price');
                    var html = `<span class="remove"><span >&#8377</span> ${monthVal}</span> <strong><span class="pricing-table__currency">&#8377</span> ${value}</strong> <span class="month">/ M</span>`;
                    $(this).html(html);
                });
            });

        })(jQuery);
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-v4-rtl/4.6.2-1/js/bootstrap.bundle.min.js"></script>


    <script>
        <?php
        foreach ($featuresArray as $feature) {

        ?>
            document.getElementById('<?php echo $feature ?>').classList.remove('fa-times');
            document.getElementById('<?php echo $feature ?>').classList.add('fa-check');
        <?php
        }
        ?>
    </script>

    <script>
        <?php
        foreach ($featuresArray2 as $feature2) {

        ?>
            document.getElementById('<?php echo $feature2 ?>').classList.remove('fa-times');
            document.getElementById('<?php echo $feature2 ?>').classList.add('fa-check');
        <?php
        }
        ?>
    </script>


    <script>
        <?php
        foreach ($featuresArray3 as $feature3) {

        ?>
            document.getElementById('<?php echo $feature3 ?>').classList.remove('fa-times');
            document.getElementById('<?php echo $feature3 ?>').classList.add('fa-check');
        <?php
        }
        ?>
    </script>
    <script src="js/formapp23.js"></script>


</body>





</html>