<?php

class Home extends CI_Controller {

    //constructor del controlador
    public function __construct() {
        parent::__construct();
        //le indicamos que modelo queremos que carge previamente cuando carge  la vista - us es para abreviar si lo vamos a estar llamando
        //mucho y es muy largo.
        $this->load->model('usuarios', 'us');
        $this->load->model('noticias');
        $this->load->model('concurso');
        $this->load->helper('form');
        // $this->load->driver('cache');
    }

    //aqui le decimos que carge la vista que deseemos
    function index() {

        if ($this->session->userdata('logged_in')) {
            //guardamos el usuario en sesion
            $session_data = $this->session->userdata('logged_in');
            $datos['username'] = $session_data['username'];

            //aqui llamamos a la funcion
            $datos['usuarios'] = $this->us->listarTodosUsuarios();
            //aqui llamamos a la funcion que nos listara los articulos q se veran el la view
            $datos['noticias'] = $this->noticias->listarNoticias();
            $datos['concurso_foto'] = $this->concurso->listarFotos();
            
            $this->load->view('home', $datos);
            
        } else {
            //si no hay sesion te devuelve al login
            redirect('login', 'refresh');
        }
    }

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('home', 'refresh');
    }

    function detalleNoticia($id_noticia) {
        $session_data = $this->session->userdata('logged_in');
        $datos['username'] = $session_data['username'];
        //limpiamos el parametro para prevenir ataques cross sites
        $id_noticia_limpio = $this->security->xss_clean($id_noticia);
        $datos['noticia'] = $this->noticias->detalleNoticia($id_noticia_limpio);
        //nos creamos una variable titulo para despues en la vista de las noticias individuales poder ponersela al title d ela pag.
        $datos['titulo_pagina'] = $datos['noticia']->titular_noticia;
        $this->load->view('detalle_noticia', $datos);
    }

}
