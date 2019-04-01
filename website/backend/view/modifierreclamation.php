<?php

include "../core/reclamationc.php";
$reclamation1C=new reclamationc();
if ((isset($_POST["id"])) and (isset($_POST["etat"])))
 {
$reclamation1C->modifierReclamation($_POST["id"],$_POST["etat"]);
header('Location: afficherreclamation.php');
}
?>