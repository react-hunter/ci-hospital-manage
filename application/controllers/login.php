<?php 
class Login extends MAIN_Controller {

   function __construct(){
        parent::__construct();
   }

   public function index()
   { 
      $this->load->view('include/header');
      $this->load->view('login_view');
      $this->load->view('include/footer');
   }
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
