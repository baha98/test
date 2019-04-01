<?php 

include "../core/reclamationc.php";
$reclamation1C=new reclamationc();
if (isset($_POST["id"])){
$reclamation1C->supprimerReclamation($_POST["id"]);
header('Location: afficherreclamation.php');
}
?>