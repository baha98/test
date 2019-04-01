
<?php
include "../core/reclamationc.php";

if ((isset($_GET['email'])) and (isset($_GET['sujet'])) and (isset($_GET['description'])))
{
$email=$_GET['email'];
$sujet=$_GET['sujet'];
$description=$_GET['description'];

if ((!empty($_GET['email'])) and (!empty($_GET['sujet'])) and (!empty($_GET['description'])) )
{
if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
    // Return Error - Invalid Email
    $msg= "The email you have entered is invalid, please try again.";
    echo "<script type='text/javascript'>alert('$msg');</script>";

}
else{

$reclamation1=new reclamation(new \DateTime(),"non traite",$description,$sujet,$email);

$reclamation1C=new reclamationc();
	$mes=$reclamation1C->ajouterReclamation($reclamation1);
	if($mes==true)
	{
		header('Location: reclamation.html');
	}
}
}
else 
{
$message = "Vérifiez vos champs";
echo "<script type='text/javascript'>alert('$message');</script>";

}











 require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/OAuth.php';
require 'PHPMailer/POP3.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();;

// SMTP configuration

	
//$mail->SMTPDebug = 4;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'baha.dammak@esprit.tn';
$mail->Password = 'SOUFIA98';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom( 'baha.dammak@esprit.tn','baha dammak');


// Add a recipient
$mail->addAddress($email);


// Add cc or bcc 
/*$mail->addCC('');
$mail->addBCC('bcc@example.com');*/ 

// Email subject
$mail->Subject ='reclamation';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
//$mailContent =
$mail->Body = 'votre reclamation a ete bien recu avec succes';


// Send email
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  
}else{
    echo 'Message has been sent';
   // header( 'http://localhost/2a7_php5/view/afficher_wishlist.php');
}



}






?>

