<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
	var $data;
	function __construct(){
		parent::__construct();
	}
	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$data['msg'] = $msg;
		$this->load->view('login_view', $data);
	}


	public function process(){
		// Load the model
		$this->load->model('Login_model');
		// Validate the user can login
		$result = $this->Login_model->validate();
		// Now we verify the result
		if(!$result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			 $this->load->view('dashboard');
		}		
	}
	public function loadRegister($msg = NULL)
	{
		$data['msg'] = $msg;
		$this->load->view('register',$data);
	}


public function registerProcess($msg=NULL)
	{

		$this->load->model('Register_model');
		// Validate the user can login
		$result = $this->Register_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Already username and/or password exist!.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			$data['msg'] = $msg;
			 $this->load->view('login_view',$data);
		}		

	}
	
}
?>