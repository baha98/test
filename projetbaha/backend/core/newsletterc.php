<?php
include "../config.php";
include "../entite/newsletter.php";
class newsletterc {
	function ajouternewsletter($newsletter){
		$sql="insert into newsletter (email) values (:email)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
           $email=$newsletter->getemail();
 
			$req->bindValue(':email',$email);
		
            $req->execute();
            return true ;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            return false ;
        }
		
	}
			function affichernewsletter1()
	{
		
		$sql=" SELECT * From newsletter ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function supprimernewsletter($id){
		$sql="DELETE FROM newsletter where id= :numero";
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

function recuperernewsletter($id){
		$sql="SELECT * from newsletter where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


function modifiernewsletter($email,$id){
		$sql="UPDATE newsletter SET  email=:email WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	 	$req->bindValue(':id',$id);
		$req->bindValue(':email',$email);
	
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
		
	}

}





?>




