<?php

class Noticias extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    //generamos un listado de articulos
    function listarNoticias() {
        $consulta = $this ->db->get('noticia');
        return $consulta->result();
    }
    
    //ahora creamos una funcion para ver al detalle una noticia concreto
    
    function detalleNoticia($id_noticia){
        $this->db->where('id_noticia', $id_noticia);
        $detalle = $this->db->get('noticia');
        //nos lo devuelve en forma de objeto
        return $detalle->row();
    }
    
    
}