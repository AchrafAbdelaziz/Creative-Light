<?PHP
class panier{
	private $id;
	private $date;
	private $produit;
	function __construct($id,$date,$produit){
		$this->id=$id;
		$this->date=$date;
		$this->produit=$produit;
	}
	
	function getid(){
		return $this->id;
	}
	function getdate(){
		return $this->date;
	}
	function getproduit(){
		return $this->produit;
	}

	function setdate($date){
		$this->date=$date;
	}
	function setproduit($produit){
		$this->produit;
	}
	
}

?>