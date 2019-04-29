<?PHP
class article{
	private $id_article;
	private $type;
	private $contenue;
    private $titre;
     private $image;
	 private $vues;
	function __construct($id_article,$type,$contenue,$titre,$image){
		$this->id_article=$id_article;
		$this->type=$type;
		$this->contenue=$contenue;
	    $this->titre=$titre;
	    $this->image=$image;

	}
	
	function getid(){
		return $this->id_article;
	}
	function get_type(){
		return $this->type;
	}
	function get_vues(){
		return $this->vues;
	}
	function getcontenue(){
		return $this->contenue;
	}
    function gettitre(){
		return $this->titre;
	}
   function get_date(){
		return $this->date;
	}
	 function get_image(){
		return $this->image;
	}
	function setid($id_article){
		$this->id_article=$id_article;
	}
	function set_type($type){
		$this->type;
	}
	function set_contenue($contenue){
		$this->contenue=$contenue;
	}
	function set_titre($titre){
		$this->titre=$titre;
	}
	
function set_image($image){
		$this->image=$image;
	}
}

?>
