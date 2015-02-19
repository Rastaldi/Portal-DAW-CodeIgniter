<?php

class Concurso extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function listarFotos() {
        $consultafotos = $this->db->get('concurso_foto');
        return $consultafotos->result();
    }
    
    function detallarFoto($id_foto){
         $this->db->where('id_foto', $id_foto);
        $detalle = $this->db->get('concurso_foto');
        //nos lo devuelve en forma de objeto
        return $detalle->row();
    }
    
    function subirFoto($url_foto, $titulo_foto, $body_foto, $autor_foto){
        $this->db->insert('concurso_foto', array(
                    'id_foto' => NULL,
                    'url_foto' => $url_foto,
                    'titulo_foto' => $titulo_foto,
                    'body_foto' => $body_foto,
                    'autor_foto' => $autor_foto,
                ));
        return true;
    }

    function sumarPuntos($id_foto, $puntos) {
        $this->db->select('puntuacion_foto');
        $this->db->from('concurso_foto');
        $this->db->where('id_foto', $id_foto);
        $consulta = $this->db->get();
        $resultado = $consulta->row();
        $resultado = $puntos + $resultado;
                
        $data = array(
               'puntuacion_foto' => $resultado,
                );
        $this->db->where('id_foto', $id_foto);
        $this->db->update('concurso_foto', $data); 
        
    }

}
