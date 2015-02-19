<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerificarLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('usuarios','',TRUE);
 }

 function index()
 {
   //Este metodo tiene las creedenciales de validación
   $this->load->library('form_validation');

   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
   $this->form_validation->set_rules('pass', 'Pass', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //si falla la validacion del formulario nos redirige de nuevo al login
     $this->load->view('login');
   }
   else
   {
     //Sino entramos como usuarios registrados a la vista home
       
       redirect('home', 'refresh');
   }

 }

 function check_database($pass)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('username');

   //query the database
   $result = $this->usuarios->login($username, $pass);
   
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         //'id' => $row->id_usuario,  <-- este era el warning que daba al logear, que ne apunta el id cuando nunca se pasa, asi que da undefined. 
         'username' => $row->nombre_usuario
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Usuario o contraseña inválido');
     return false;
   }
 }
}
