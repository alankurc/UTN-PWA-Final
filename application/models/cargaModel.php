<?php
class cargaModel extends CI_Model  {
   
    public function save($datos){
    	
        $data["denominacion"]=$datos["denominacion"];
        $data["descripcion"]=$datos["descripcion"];
        $data["precio"]=$datos["precio"];
        $data["precio_oferta"]=$datos["precio_oferta"];
		$data["fecha_finalizacion_oferta"]=$datos["fecha_finalizacion_oferta"];
		$data["marca"]=$datos["marca"];
		$data["stock"]=$datos["stock"];
		$data["id_categoria"]=$datos["id_categoria"];
		$data["destacado"]=$datos["destacado"];
		$data["activa"]=$datos["activa"];
		$data["imagen"]=$datos["imagen"];

        $this->db->insert("productos",$data);
    
    }
}
?>
