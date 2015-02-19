<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('form_validation');
   $this->load->model('usuarios');
 }

 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('login');
   
 }

 function registro(){
     $this->load->view('registro');
 }
 
 

}
