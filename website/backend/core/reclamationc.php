<?php
include "../config.php";
include "../entite/reclamation.php";
class reclamationc {
	

		function afficherReclamation1()
	{
		
		$sql=" SELECT * From reclamation ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($id){
		$sql="DELETE FROM reclamation where id= :numero";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':numero',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function modifierReclamation($id,$etat)
	{
		$sql="UPDATE reclamation SET etat= :etat where id= :numero";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	
        $req=$db->prepare($sql);
if ($etat=='non traite')
{
	$aa ='en cours de traitement ';
}
else
{
	$aa ='non traite';
}
    	 	$req->bindValue(':numero',$id);
    	 	$req->bindvalue(':etat',$aa);  
        
		try {
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
     catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
		
	}

}





?>




