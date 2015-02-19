<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Concurso_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('concurso');
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        
    }

    function index() {
        
        
        $datos['concurso_foto'] = $this->concurso->detalleFoto();
        $this->load->view('detalle_foto_view', $datos);
    }
    function detalleFoto($id_foto) {
         //limpiamos el parametro para prevenir ataques cross sites
        $id_foto_limpio = $this->security->xss_clean($id_foto);
        $datos['concurso_foto'] = $this->concurso->detallarFoto($id_foto_limpio);
        
        $this->load->view('detalle_foto_view', $datos);
        //quiero saber xk aki no me deja cargar la vista de detalle con los datos de user y desconectar
        //redirect('detalle_foto_view', 'refresh');
    }

    function addFoto() {
        
        if ($this->input->post('submit_addFoto')) {
            $this->form_validation->set_rules('url_foto', 'Url_foto', 'required|trim');
            $this->form_validation->set_rules('titulo_foto', 'Titulo_foto', 'required|trim');
            $this->form_validation->set_rules('body_foto', 'Body_foto', 'required|trim');
            $this->form_validation->set_rules('autor_foto', 'Autor_foto', 'required');
            
            if ($this->form_validation->run() == TRUE) {
                $url_foto = $this->input->post('url_foto', TRUE);
                $titulo_foto = $this->input->post('titulo_foto', TRUE);
                $body_foto = $this->input->post('body_foto', TRUE);
                $autor_foto = $this->input->post('autor_foto', TRUE);
                if ($this->concurso->subirFoto($url_foto, $titulo_foto, $body_foto, $autor_foto)) {
                    redirect('home', 'refresh');
                    // $this->load->view('home', $datos);
                }
                
            }
        }
        //aqui habria que llevarlo a una pag de error de carga de archivo
        redirect('home', 'refresh');
    }
    
    function puntuarFoto($puntos, $id_foto){
        $this->concurso->sumarPuntos($id_foto, $puntos);
    }

}
