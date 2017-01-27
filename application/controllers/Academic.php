<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic extends CI_Controller {
		 public function __construct()
		{
			parent::__construct();
			$this->load->model('Library', 'lib');
		   
		}
    
    public function academic_content($page=null)
        {
			$page=$this->uri->segment(3);
			$data['title']=urldecode($page);
			$type=$this->uri->segment(4);
			$data['qy']=$this->lib->get_academic_details($type);							
            $this->load->view('header');
            $this->load->view('academic_content',$data);
            $this->load->view('footer');
        }
		public function online_admission_form()
		{
			if($_POST):
			$input=$this->input->post(null);
			if ($_FILES['upload_pic']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['upload_pic']['name'], PATHINFO_EXTENSION));
            $name = 'student_pic'.date('d-m-Y'). uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['upload_pic']['tmp_name'], './uploads/student/' . $name);
            $input['upload_pic'] = $name;
        }
		if ($_FILES['upload_sign']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['upload_sign']['name'], PATHINFO_EXTENSION));
            $name = 'student_sign'.date('d-m-Y'). uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['upload_sign']['tmp_name'], './uploads/student/' . $name);
            $input['upload_sign'] = $name;
        }
			$in=$this->db->insert("onlineapply",$input);
			 if($in==1):
			  redirect('Academic/online_admission_form/1','location');
			 endif;
			else:
			 $this->load->view('header');
			 $this->load->view('online_reg');
			 $this->load->view('footer');
		 endif;
		}
    public function class_routine()
        {
            $this->load->view('header');
            $this->load->view('class_routine');
            $this->load->view('footer');
        }
    public function academic_calendar()
        {
            $this->load->view('header');
            $this->load->view('academic_calendar');
            $this->load->view('footer');
        }
		
		public function latest_news_view()
        {
            $this->load->view('header');
            $this->load->view('latest_news_view');
            $this->load->view('footer');
        }
		public function board_result()
        {
            $this->load->view('header');
            $this->load->view('board_result');
            $this->load->view('footer');
        }
		public function prospectas()
        {
            $this->load->view('header');
            $this->load->view('prospectas');
            $this->load->view('footer');
        }
		
		public function admission_info()
        {
            $this->load->view('header');
            $this->load->view('admission_info');
            $this->load->view('footer');
        }
		
		
		public function teachers_staffs()
        {
            $this->load->view('header');
            $this->load->view('teachers_staffs');
            $this->load->view('footer');
        }
		
		
		public function news_details()
        {
            $this->load->view('header');
            $this->load->view('news_details');
            $this->load->view('footer');
        }
}
