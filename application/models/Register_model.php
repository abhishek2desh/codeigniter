<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Register_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	public function validate(){
		// grab user input
		$fname = $this->security->xss_clean($this->input->post('fname'));
		$lname = $this->security->xss_clean($this->input->post('lname'));
		$name = $this->security->xss_clean($this->input->post('name'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$conf_pass =$this->security->xss_clean($this->input->post('password_confirmation'));
		$email = $this->security->xss_clean($this->input->post('email'));
		// Prep the query
		
		// Let's check if there are any results
			// If there is a user, then create session data
if (!($password==$conf_pass))
{
	return false;
}
		$this->db->where('username', $name);
		$this->db->where('password', $password);
		
		// Run the query
		$query = $this->db->get('user');
		// Let's check if there are any results
		if($query->num_rows() == 1)
		{
			// If there is a user, then create session data
						
			return false;
		}
		// If the previous process did not validate
		// then return false.
		$query = $this->db->query("select * from  user");
		$userid = $query->num_rows()+1;
			$data = array(
					'userid' =>$userid,
					'fname' =>$fname,
					'lname' =>$lname,
					'username' =>$name,
					'password'=>$password
					);
			$this->db->insert('user',$data);
			return true;
		// If the previous process did not validate
		// then return false.
		
	}
}
?>