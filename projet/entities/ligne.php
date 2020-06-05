<?PHP
class ligne{
	private $idpanier;
	private $idproduit;
	private $prix;
	private $qt;
	function __construct($idpanier,$idproduit,$prix,$qt){
		$this->idpanier=$idpanier;
		$this->idproduit=$idproduit;
		$this->prix=$prix;
		$this->qt=$qt;
	}
	
	function getidpanier(){
		return $this->idpanier;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	function getprix(){
		return $this->prix;
	}
	function getqt(){
		return $this->qt;
	}

	function seridpanier($idpanier){
		$this->idpanier=$idpanier;
	}
	function setidproduit($idproduit){
		$this->idproduit=$idproduit;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setqt($qt){
		$this->qt=$qt;
	}
	
}

?>