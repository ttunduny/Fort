<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Management extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		$this->load->model('user_model');
		//$this->load>model('user_model');
		
	}
	
	public function index()
	{
		session_start();
		if(isset($_SESSION['user'])){
			redirect('home_controller');
		}else{
			$this->login();
		}
		
	}

	public function login()
	{	

		$data = array();	
		$data['title'] = "Login Page";		
        $data['content_view'] = "login";        
        $this-> load-> view('template', $data);
	}

	public function checkLogin(){
		
       // session_start();
        $form = array();
        parse_str($_POST['loginForm'], $form);                
		$username = $form['username'];
		$password = $form['password'];				
		$user_exists =  $this->user_model->check_user_exists($username,$password);
		echo "<pre>";
		//print_r($user_exists->result());
		die();

        foreach ($user_exists as $value){
            $fname = $value->fname;
            $fname = $value->lname;
            $name = $fname." ".$lname;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_id'] =  $value->id;;
            $_SESSION['user_level'] =  $value->user_level;;
        }

        echo "Login Successful";
	

	}
	
}

