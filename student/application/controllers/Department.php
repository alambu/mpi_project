<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
		 public function __construct()
		{
			parent::__construct();
			$this->load->model('Library', 'lib');
		   
		}
		public function index()
		{
			$this->load->view('header');
			$this->load->view('department/automobile');
			$this->load->view('footer');
		}
        public function get_department($page=null)
        {
			$data['dept']=$this->lib->get_deptDetails($page);
            $this->load->view('header');
            $this->load->view('department/dept_content',$data);
            $this->load->view('footer');
        }
        public function computer()
        {
            $this->load->view('header');
            $this->load->view('department/computer');
            $this->load->view('footer');
        }
		public function extra_act()
        {
            $this->load->view('header');
            $this->load->view('extra_act');
            $this->load->view('footer');
        }
        public function automobile()
        {
            $this->load->view('header');
            $this->load->view('department/automobile');
            $this->load->view('footer');
        }
		public function dept_teachers($id)
        {   $data['title']=$id;
			$data['info']=$this->db->query("select * from teachers where deppt like '%$id%'")->result();
			
            $this->load->view('header');
            $this->load->view('dept_teachers',$data);
            $this->load->view('footer');
        }
		
		
        public function electrical()
        {
            $this->load->view('header');
            $this->load->view('department/electrical');
            $this->load->view('footer');
        }
    
        public function civil()
        {
            $this->load->view('header');
            $this->load->view('department/civil');
            $this->load->view('footer');
        }
    
        public function architacture()
        {
            $this->load->view('header');
            $this->load->view('department/architacture');
            $this->load->view('footer');
        }
        public function textitle()
        {
            $this->load->view('header');
            $this->load->view('department/textitle');
            $this->load->view('footer');
        }
    
}
