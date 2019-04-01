<?php
include "../config.php";
include "../entite/blog.php";
class blogc {
	function ajouterblog($blog){
		$sql="insert into blog (surnom,commentaire,date) values (:surnom,:commentaire,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$surnom=$blog->getsurnom();
        $date=$blog->getDate();     
        $commentaire=$blog->getcommentaire();
		$req->bindValue(':surnom',$surnom);
		$req->bindValue(':commentaire',$commentaire);
		$req->bindValue(':date',date("Y-m-d") );

		
            $req->execute();
            return true ;
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
            return false ;
        }
		
	}
			function afficherblog1()
	{
		
		$sql=" SELECT * From blog ";
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