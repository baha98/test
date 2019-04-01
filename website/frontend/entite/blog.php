<?PHP
class blog{
	
	private $date;
	private $surnom;
	private $commentaire;

	
	function __construct($date,$commentaire,$surnom){

		$this->date=$date;
		$this->commentaire=$commentaire;
		$this->surnom=$surnom;

	}
		

	function getDate(){
		return $this->date;
	}
	function getcommentaire(){
		return $this->commentaire;
	}
	function getsurnom(){
		return $this->surnom;
	}




	function setDate($date){
		$this->date=$date;
	}
	function setcommentaire($commentaire){
		$this->commentaire=$commentaire;
	}
	function setsurnom($surnom){
		$this->surnom=$surnom;
	}


	
	
}

?>