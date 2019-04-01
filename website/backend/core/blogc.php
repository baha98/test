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
		function supprimerblog($id){
		$sql="DELETE FROM blog where id= :numero";
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

function recupererblog($id){
		$sql="SELECT * from blog where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


function modifierblog($surnom,$commentaire,$id){
		$sql="UPDATE blog SET  surnom=:surnom,commentaire=:commentaire WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
	 	$req->bindValue(':id',$id);
		$req->bindValue(':surnom',$surnom);
		$req->bindValue(':commentaire',$commentaire);
	
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
		
	}
	}