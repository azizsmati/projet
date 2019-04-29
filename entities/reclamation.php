<?PHP
class reclamation{
	private $nom_utilsateur;
	private $type;
	private $message;
    private $titre;

	function __construct($nom_utilsateur,$type,$message,$titre){
		$this->nom_utilsateur=$nom_utilsateur;
		$this->type=$type;
		$this->message=$message;
		$this->titre=$titre;

	}
	
	
	function getnom_utilisateur(){
		return $this->nom_utilsateur;
	}
	function get_type(){
		return $this->type;
	}
	function getmessage(){
		return $this->message;
	}
    function gettitre(){
		return $this->titre;
	}


	function setid($titre){
		$this->titre=titre;
	}
	function set_type($type){
		$this->type=$type;
	}
	function setmessage($message){
		$this->message=$message;
	}
	
}

?>