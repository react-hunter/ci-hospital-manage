<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model','',TRUE);
    }
     
    function index()
    {
        if($affected_rows >= 1) {
        while($affected_rows = $result){
            if($affected_rows['authority'] == 'admin'){
                $_SESSION['authority'] = 'admin';
                $_SESSION['username'] = $userLoggedIn;
                header("Location: pages/admin/");
                exit;
            }
            if($affected_rows['authority'] == 'doctor'){
                $_SESSION['authority'] = 'doctor';
                $_SESSION['username'] = $userLoggedIn;
                header("Location: pages/doctor/");
                exit;
            }
            if($affected_rows['authority'] == 'nurse'){
                $_SESSION['authority'] = 'nurse';
                $_SESSION['username'] = $userLoggedIn;
                header("Location: pages/nurse/");
                exit;
            }
            if($affected_rows['authority'] == 'pharmacist'){
                $_SESSION['authority'] = 'pharmacist';
                $_SESSION['username'] = $userLoggedIn;
                header("Location: pages/pharmacist/");
                exit;
            }
        }
    }
    }
    
    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
 
        //query the database
        $result = $this->login_model->login($username, $password);
        
        if($result)
        {
            $sess_array = array();
            
            foreach($result as $row)
            {
                $sess_array = array(
                    '_id' => $row->_id,
                    'username' => $row->username);
       
                $this->session->set_userdata('logged_in', $sess_array);
            }
     
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;

        }
    }
    
}

?>