<?PHP
class faq{
	
	private $question;
	private $reponse;

	
	function __construct($question,$reponse){

		$this->question=$question;


			$this->reponse=$reponse;
	}
	
	
	function getreponse(){
		return $this->reponse;
	}
		function getquestion(){
		return $this->question;
	}



	function setquestion($question){
		$this->question=$question;
	}


	function setreponse($reponse){
		$this->reponse=$reponse;
	}


}

?>