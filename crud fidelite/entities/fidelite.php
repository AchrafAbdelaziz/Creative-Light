<?PHP
class fidelite{
	private $id;
	private $id_client;
	private $nombre_p;
	private $date_ex;
	function __construct($id,$id_client,$nombre_p,$date_ex){
		$this->id=$id;
       $this->id_client=$id_client;
		$this->nombre_p=$nombre_p;
		$this->date_ex=$date_ex;
		
	}
	
	function getid(){
		return $this->id;
	}
	
	function getid_client(){
		return $this->id_client;
	}
	function getnombre_p(){
		return $this->nombre_p;
	}
	function getdate_ex(){
		return $this->date_ex;
	}	
	
	function setnombre_p($nombre_p){
		$this->nombre_p=$nombre_p;
	}
	function setdate_ex($date_ex){
		$this->date_ex;
	}
	
	
}

?>