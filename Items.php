<?php
class Items{

    ##private $itemsTable = "items";
    public $id;
    public $alumno;
    public $asignatura;
    public $calificacion;
    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

	function read(){

		$stmt = $this->conn->prepare("SELECT
            a.id,
            a.nombre ||' '||a.apellido AS alumno,
            n.asignatura AS asignatura,
            n.calificacion
            FROM tb_alumno
            JOIN tb_nota n ON a.id = n.alumno_i");

		$stmt->execute();
		$result = $stmt->get_result();
		return $result;
	}

	// function create(){
  //
	// 	$stmt = $this->conn->prepare("
	// 		INSERT INTO ".$this->itemsTable."(`name`, `description`, `price`, `category_id`, `created`)
	// 		VALUES(?,?,?,?,?)");
  //
	// 	$this->name = htmlspecialchars(strip_tags($this->name));
	// 	$this->description = htmlspecialchars(strip_tags($this->description));
	// 	$this->price = htmlspecialchars(strip_tags($this->price));
	// 	$this->category_id = htmlspecialchars(strip_tags($this->category_id));
	// 	$this->created = htmlspecialchars(strip_tags($this->created));
  //
  //
	// 	$stmt->bind_param("ssiis", $this->name, $this->description, $this->price, $this->category_id, $this->created);
  //
	// 	if($stmt->execute()){
	// 		return true;
	// 	}
  //
	// 	return false;
	// }

	// function update(){
  //
	// 	$stmt = $this->conn->prepare("
	// 		UPDATE ".$this->itemsTable."
	// 		SET name= ?, description = ?, price = ?, category_id = ?, created = ?
	// 		WHERE id = ?");
  //
	// 	$this->id = htmlspecialchars(strip_tags($this->id));
	// 	$this->name = htmlspecialchars(strip_tags($this->name));
	// 	$this->description = htmlspecialchars(strip_tags($this->description));
	// 	$this->price = htmlspecialchars(strip_tags($this->price));
	// 	$this->category_id = htmlspecialchars(strip_tags($this->category_id));
	// 	$this->created = htmlspecialchars(strip_tags($this->created));
  //
	// 	$stmt->bind_param("ssiisi", $this->name, $this->description, $this->price, $this->category_id, $this->created, $this->id);
  //
	// 	if($stmt->execute()){
	// 		return true;
	// 	}
  //
	// 	return false;
	// }
  //
	// function delete(){
  //
	// 	$stmt = $this->conn->prepare("
	// 		DELETE FROM ".$this->itemsTable."
	// 		WHERE id = ?");
  //
	// 	$this->id = htmlspecialchars(strip_tags($this->id));
  //
	// 	$stmt->bind_param("i", $this->id);
  //
	// 	if($stmt->execute()){
	// 		return true;
	// 	}
  //
	// 	return false;
	// }
}
?>
