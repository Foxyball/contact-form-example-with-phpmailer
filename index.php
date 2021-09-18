<?php
# ==> promenlivite
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$submited=$_POST['submited'];

# => dobavanq na informaciq kum bazata
if ($submited=='1') {


# => PHP Mailer here
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@gmail.com';                 // SMTP username
$mail->Password = 'email password';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$form_message = "<b>Трите имена:</b>  $name <br> <b>Телефон:</b>$phone <br> <b>Имейл:</b>$email<br><b>$message</b>"; // promenlivata za da raboti kakto trqbva i da izprashta doly ->Body
$mail->setFrom('example@gmail.com', $name);
$mail->addAddress('example@gmail.com', 'recipient');     //Add a recipient
$mail->CharSet = 'UTF-8'; // zaradi kirilicata
$mail->Encoding = 'base64';


 //Content
 $mail->isHTML(true);                                  //Set email format to HTML
 $mail->Subject = $subject;
 $mail->Body    = $form_message;
 

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '';
}
# => END of PHP Mailer

}

?>

<!DOCTYPE html>
<html dir="ltr" lang="bg">
<head>
<!--#################
		Foxyball - 2021
	#################--> 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Stylesheets
	============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="icon" href="balik_logo.ico">
	<!-- Document Title
	============================================= -->
	<title>Свържете се с нас | BalikG Studio</title>

</head>

<body>


<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                    <h3><i class="fa fa-envelope"></i> Свържете се с нас</h3>
									<?php								
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {

		echo "<p><i class='fa fa-envelope'></i> Успешно изпратена заявка!</hp>";  
    } 
}
?>
      							     </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="name" placeholder="Трите имена" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="nombre" name="email" placeholder="Имейл адрес" required>
                                    </div>
                                </div>

								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="phone" placeholder="Телефон" >
                                    </div>
                                </div>

								<div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="nombre" name="subject" placeholder="Тема" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" name="message" placeholder="Съобщение" required></textarea>
                                    </div>
                                </div>

								<div class="btn-block">
									<input type="hidden" name="submited" value="1">
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Изпрати" class="btn btn-info btn-block rounded-0 py-2">
                                </div>
                            </div>
							</div>
                        </div>
                    </form>
                    <!--Form with header-->


                </div>
	</div>
</div>
</body>
</html>
