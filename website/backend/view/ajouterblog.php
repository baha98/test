<?php
include "../core/blogc.php";

if (isset($_POST['commentaire'])) 
{


$commentaire=$_POST['commentaire'];

if (!empty($_POST['commentaire'])) 
{


$surnom="najeh haute couture" ;
$blog1=new blog(new \DateTime(),$commentaire,$surnom);

$blog1C=new blogc();
	$mes=$blog1C->ajouterblog($blog1);
	if($mes==true)
	{
		header('Location: backblog.php');
	}



}
else 
{
$message = "Vérifiez vos champs";
echo "<script type='text/javascript'>alert('$message');</script>";

}
}

?>