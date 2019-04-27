<?PHP
class newsletter{
	
	private $email;

	
	function __construct($email){

	
		$this->email=$email;
		

	}
		


	function getemail(){
		return $this->email;
	}
	



	function setemail($email){
		$this->email=$email;
	}



	
	
}

?>