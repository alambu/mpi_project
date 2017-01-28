<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpi extends CI_Controller {
    
	public function index()
	{
            $this->load->view('header');
            $this->load->view('slogin');
            $this->load->view('footer');
	} 
	
    public function login_action()
		{

        $input = $this->input->post(null);
        $check_user = $this->db->where('roll_no',$input['name'])->where('session',$input['session'])->where('dept_id',$input['dept_id'])->where('password',$input['password'])->get('studentinfo')->row();
		// echo $this->db->last_query();exit;
		if($this->db->affected_rows()>0):
		
		 $data=array(
		   'std_id'=>$check_user->id,
		   'roll_no'=>$check_user->roll_no,
		   'name'=>$check_user->name,
		   'dept_id'=>$check_user->dept_id,
		   'reg_no'=>$check_user->reg_no,
		   'session_id'=>$check_user->session,
		   'image'=>$check_user->image,
		   'login_status'=>TRUE
		 );
		 $this->session->set_userdata($data);
		  redirect('student/sresult','location');
			else:
        redirect('Mpi');		
		endif;
		}
    public function logout()
    {
        session_destroy();
        redirect('mpi/','location');
    }
}
