<?php
include "../config.php";
include "../entite/newsletter.php";
class newsletterc {
	function ajouternewsletter($newsletter){
		$sql="insert into newsletter (email,date) values (:email,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
           $email=$newsletter->getemail();
       $date=$newsletter->getDate();
			$req->bindValue(':email',$email);
				$req->bindValue(':date',date("Y-m-d") );
		
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




