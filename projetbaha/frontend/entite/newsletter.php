<?PHP
class newsletter{
	
	private $email;
	private $date;
	
	function __construct($email,$date){

	
		$this->email=$email;
			$this->date=$date;
		

	}
		

		function getDate(){
		return $this->date;
	}
	function getemail(){
		return $this->email;
	}
	


	function setDate($date){
		$this->date=$date;
	}
	function setemail($email){
		$this->email=$email;
	}



	
	
}

?>