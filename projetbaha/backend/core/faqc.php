<?php
include "../config.php";
include "../entite/faq.php";
class faqc {

	function ajouterfaq($faq){
		$sql="insert into faq (question,reponse) values (:question,:reponse)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
           $question=$faq->getquestion();
       $reponse=$faq->getreponse();
 
			$req->bindValue(':reponse',$reponse);
		
			$req->bindValue(':question',$question);
		
            $req->execute();
            return true ;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            return false ;
        }
		
	}
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
		function supprimerfaq($id){
		$sql="DELETE FROM faq where id= :numero";
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

function recupererfaq($id){
		$sql="SELECT * from faq where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


function modifierfaq($question,$reponse,$id){
		$sql="UPDATE faq SET  question=:question,reponse=:reponse WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	 	$req->bindValue(':id',$id);
		$req->bindValue(':question',$question);
		$req->bindValue(':reponse',$reponse);
	
		
		
            $s=$req->execute();
      
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
		
	}


}