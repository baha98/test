<?php
include "../config.php";
include "../entite/faq.php";
class faqc {

			function afficherfaq1()
	{
		
		$sql=" SELECT * From faq ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


}