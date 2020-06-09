<?PHP
class facture{
	private $id_fac;
	private $id_client;
	private $date1;
	private $valeur;
	function __construct($id_fac,$id_client,$date1,$valeur){
		$this->id_fac=$id_fac;
       $this->id_client=$id_client;
		$this->date1=$date1;
		$this->valeur=$valeur;
		
	}
	
	function getid_fac(){
		return $this->id_fac;
	}
	
	function getid_client(){
		return $this->id_client;
	}
	function getdate1(){
		return $this->date1;
	}
	function getvaleur(){
		return $this->valeur;
	}	
	
	function setdate1($date1){
		$this->date1=$date1;
	}
	function setvaleur($valeur){
		$this->valeur;
	}
	
	
}

?>