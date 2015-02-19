<?php

class Usuarios extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function listarTodosUsuarios() {

        $lista = $this->db->get('usuario');
        return $lista->result();
    }

    function login($username, $pass) {
        $this->db->select('nombre_usuario, pass_usuario');
        $this->db->from('usuario');
        $this->db->where('nombre_usuario', $username);
        $this->db->where('pass_usuario', $pass);
        $this->db->limit(1);

        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function addUser($username, $pass, $edad) {

       
                //Sino entramos como usuarios registrados a la vista home
                $this->db->insert('usuario', array(
                    'nombre_usuario' => $username,
                    'pass_usuario' => $pass,
                    'edad_usuario' => $edad,
                ));
                return true;
               
    }

}
