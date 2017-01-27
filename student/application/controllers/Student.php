<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	  public function __construct()
    {
        parent::__construct();  
      $this->load->model('Library', 'lib');
	  $logged_status=$this->session->userdata('login_status');
	  if($logged_status==FALSE){
			redirect('mpi','location');
		}
    }
        public function telecommunication()
        {
            $this->load->view('header');
            $this->load->view('student_info');
            $this->load->view('footer');
        }
    
        public function profiles()
        {
            $this->load->view('header');
            $this->load->view('student_profile');
            $this->load->view('footer');
        }
		
		
		public function payment_history()
		{
			extract($this->session->all_userdata());
			$where=array(
					'session'=>$session_id,
					'dept_id'=>$dept_id,
					'roll_no'=>$roll_no
			 );
			$data['info']=$this->db->select('*')->from('student_tution_fee')->where($where)->get()->row();	
			$this->load->view('header');
            $this->load->view('payment_history',$data);
            $this->load->view('footer');
			
		}
    
        public function blood_bank()
        {
            $this->load->view('header');
            $this->load->view('blood_bank');
            $this->load->view('footer');
        }
    
     
        public function sresult()
        {
            $this->load->view('header');
            $this->load->view('sresult');
            $this->load->view('footer');
        }
		public function bill_collection_reports()
		{
			 $this->load->view('bill_collection_reports');
		}
        public function change_password()
        {
			if($_POST):
              $input=$this->input->post(null);
			  $data=array('password'=>$input['password']);
			  $std_id=$this->session->userdata('std_id');
			  $up=$this->db->where('id',$std_id)->update('studentinfo',$data);
			  //echo $this->last_query()
			  if($up==1):
			    redirect('student/change_password/1','location');
			  else:
			    redirect('student/change_password/0','location');
			  endif;
            else:			
            $this->load->view('header');
            $this->load->view('change_password');
            $this->load->view('footer');
			endif;
        }
}
