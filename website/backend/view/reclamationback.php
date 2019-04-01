<!DOCTYPE html>
<html>
<head>
	<?php

include "../core/reclamationc.php";
$omaima=new reclamationc();
$tab=$omaima-> afficherReclamation1();
?>
	<meta charset="utf-8">
	</head>
<body>
	<TABLE> 
<center><h1> Liste des réclamations </h1>  </center>

<TR> 
<TH> Num Reclamation  </TH> 
<TH> Sujet de la reclmation</TH> 
<TH> description de la reclamation </TH> 
<TH> email de destinataire </TH> 
<TH> Date de la reclamation </TH> 
<TH> Etat de la reclmation  </TH> 
<TH>  </TH> 
<TH>  <center><font color="#C8AD7F">Gérer les réclmations </font></center></TH> 
</TR> 
<?php foreach($tab  as $row) { ?>
<TR> 

<TD> <?php echo $row['id'] ?> </TD> 
<TD><?php echo $row['sujet'] ?> </TD> 
<TD> <?php echo $row['description'] ?> </TD> 
<TD> <?php echo $row['email'] ?></TD> 
<TD> <?php echo $row['date'] ?></TD> 
<TD> <?php echo $row['etat'] ?> </TD> 

<TD> <button type="submit" ><a href="supprimerreclamation.php?s=<?PHP  ?>">
   Supprimer </a></button></TD>  
<TD> <button type="submit"><a href="modifierreclamation.php?m=<?PHP  ?>">
   Traiter </a></button></TD>  

</TR> 
<?php } ?>

</TABLE>
</body>

</html>