<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Registro extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('usuarios');
    }

    function index() {
        $this->load->helper(array('form'));


        if ($this->input->post('submit_registro')) {
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('pass', 'Pass', 'required|trim');
            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post('username', TRUE);
                $pass = $this->input->post('pass', TRUE);
                $edad = $this->input->post('edad', TRUE);

                if ($this->usuarios->addUser($username, $pass, $edad)) {
                    //cargamos solo los modelos que nos hacen falta
                    // $this->load->model('noticias');
                    //$this->load->model('concurso');
                    //$this->load->view('home');

                    $sess_array = array();
                    $sess_array = array(
                        'username' => $username
                    );
                    $this->session->set_userdata('logged_in', $sess_array);
                    //con esto no hace falta cargar los 3 modelos que nos hacen falta
                    redirect('home', 'refresh');
                }
            }
        }else{
            $this->load->view('registro');
        }
        
    }

}
