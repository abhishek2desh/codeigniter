<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Home controller class
 * This is only viewable to those members that are logged in
 */
 class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->check_isvalidated();
	}
	
	public function index(){
		// If the user is validated, then this function will run
		echo 'Congratulations, you are logged in.';
		// Add a link to logout
		echo "<br /><a href='/index.php/home/do_logout'>Logout!</a>";
		
	}
	
	private function check_isvalidated(){
		if(! $this->session->userdata('validated')){
			 $this->load->view('login_view'); 
   
		}
	}
	
	

	public function do_logout(){
		$this->session->sess_destroy();
		 $this->load->view('welcome');
	}
 }
 ?>