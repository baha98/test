<?php
include "../config.php";
include "../entite/reclamation.php";
class reclamationc {
	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (sujet,description,email,etat,date) values (:sujet,:description,:email,:etat,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$sujet=$reclamation->getSujet();
        $etat=$reclamation->getEtat();
        $date=$reclamation->getDate();
           $email=$reclamation->getemail();
        $description=$reclamation->getDescription();
		$req->bindValue(':sujet',$sujet);
		$req->bindValue(':description',$description);
		$req->bindValue(':date',date("Y-m-d") );
		$req->bindValue(':etat',$etat);
			$req->bindValue(':email',$email);
		
            $req->execute();
            return true ;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            return false ;
        }
		
	}


}





?>




