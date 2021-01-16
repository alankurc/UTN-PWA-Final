<?php
class usersModel extends CI_Model  {
   
    public function save($datos){
        $data["Id"]='';
        $data["email"]=$datos["email"];
        //$data["clave"]= $datos["clave"];
        $data["clave"]= password_hash($datos["clave"], PASSWORD_BCRYPT);
        $data["nombre"]=$datos["nombre"];
        $data["apellido"]=$datos["apellido"];
        $this->db->insert("usuarios",$data);
    
    }
}
?>
