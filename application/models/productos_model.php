<?php
class productos_model extends CI_Model  {

   function __construct(){
      parent::__construct();
   }
   
   public function getAll(){
       $this->db->select("*");
       $this->db->from("productos");
       $consulta = $this->db->get();
       $resultados = $consulta->result_array();
       return $resultados;
   }   
   public function getById($id){
        $this->db->select("id");
        $this->db->select("denominacion");
        $this->db->select("descripcion");
        $this->db->select("codigo");
        $this->db->select("stock");
        $this->db->select("precio");
        $this->db->select("precio_oferta");
        $this->db->select("id_categoria");
        $this->db->select("marca");
        $this->db->select("imagen");
	    $this->db->from("productos");
        $this->db->where("id",$id);
        $consulta = $this->db->get();
        $resultados = $consulta->result_array();
        return $resultados;
   }
   
}
?>
