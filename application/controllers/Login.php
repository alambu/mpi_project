<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	public function index()
	{
		$this->load->view('login/login');
	} 
    
	public function secure_login()
	{
        $input = $this->input->post(null);
        $check_user = $this->db->where('email',$input['email'])->where('password',$input['password'])->get('users')->row();
		if($this->db->affected_rows()>0):
		 $data=array(
		   'admin_id'=>$check_user->id,
		   'fullname'=>$check_user->fullname,
		   'email'=>$check_user->email,
		   'role'=>$check_user->role,  
		   'login_status'=>TRUE
		 );
		 $this->session->set_userdata($data);
		  redirect('admin','location');
		else:
        redirect('login');		
		endif;
	}
    
    public function logout()
    {
        session_destroy();
        redirect('login/');
    }
}
