

<?php



include('smtp/PHPMailerAutoload.php');





$name = $_GET["name"];

$mail = $_GET["mail"];

$phone = $_GET["phone"];

$hotelname = $_GET["hotelname"];

$totalinventory = $_GET["totalinventory"];

$plans = $_GET['plans'];









$msg='<h1>Retrod</h1>

Name of the Customer: '.$name.'<br>

Email: '.$mail.'<br>       

Number: '.$phone.'<br>

Name of the hotel: '.$hotelname.'<br>

Totalinventory: '.$totalinventory.'<br>

Plan:  '.$plans.'<br>

';



$email='pravat.panda@retrodtech.com';

$mail = new PHPMailer();

$mail->IsSMTP();

$mail->SMTPAuth = true;

$mail->SMTPSecure = 'tls';

$mail->Host = "smtp.zeptomail.in";

$mail->Port = 587;

$mail->IsHTML(true);

$mail->CharSet = 'UTF-8';

//$mail->SMTPDebug = 2; 

$mail->Username = "emailapikey";

$mail->Password = "PHtE6r0KRbjviWIvpxgJ5ae7HselZ4smqepvfwdD4o0RD/UAHE1Wqdp9xjCxqEssUqFAFPefyto5ueud5bqNJDu5PGsZX2qyqK3sx/VYSPOZsbq6x00cslsbd03VXIDocdBr0yDRstqX";

$mail->SetFrom("noreply@retrod.in","Retrod");

$mail->Subject = "Registration";

$mail->Body = $msg;

$mail->AddAddress($email);

$mail->SMTPOptions = array('ssl' => array(

    'verify_peer' => false,

    'verify_peer_name' => false,

    'allow_self_signed' => false

));

if (!$mail->Send()) {

    echo $mail->ErrorInfo;

} else {

    // header('Location:' . "index.php");

    echo 'Sent';

}



 

?>

