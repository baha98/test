<?PHP
class Reclamation{
	
	private $date;
	private $sujet;
	private $description;
	private $etat;
	private $email ;
	
	function __construct($date,$etat,$description,$sujet,$email){

		$this->date=$date;
		$this->description=$description;
		$this->sujet=$sujet;
		$this->etat=$etat;
			$this->email=$email;
	}
	
	
	function getemail(){
		return $this->email;
	}
		function getDate(){
		return $this->date;
	}
	function getDescription(){
		return $this->description;
	}
	function getSujet(){
		return $this->sujet;
	}

	function getEtat(){
		return $this->etat;
	}


	function setDate($date){
		$this->date=$date;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function setSujet($sujet){
		$this->sujet=$sujet;
	}

	function setemail($email){
		$this->email=$email;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	
	
}

?>