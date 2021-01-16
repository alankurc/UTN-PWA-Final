<?php
class contactoModel extends CI_Model  {
   
    public function save($datos){

        $data["nombre"]=$datos["nombre"];
        $data["apellido"]=$datos["apellido"];
        $data["email"]=$datos["email"];
        $data["consulta"]=$datos["consulta"];
        $this->db->insert("contacto",$data);
    
    }

	public function stock($datos){

		$data["email"]=$datos["email"];
		$data["producto"]=$datos["producto"];
		$data["consulta"]=$datos["consulta"];
		$this->db->insert("contacto",$data);

	}
}
?>
