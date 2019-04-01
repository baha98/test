<?php
include "../core/blogc.php";

if ((isset($_GET['surnom'])) and (isset($_GET['commentaire']))) 
{

$surnom=$_GET['surnom'];
$commentaire=$_GET['commentaire'];

if ((!empty($_GET['surnom'])) and (!empty($_GET['commentaire']))) 
{



$blog1=new blog(new \DateTime(),$commentaire,$surnom);

$blog1C=new blogc();
	$mes=$blog1C->ajouterblog($blog1);
	if($mes==true)
	{
		header('Location: blog1.php');
	}



}
else 
{
$message = "Vérifiez vos champs";
echo "<script type='text/javascript'>alert('$message');</script>";

}
}

?>