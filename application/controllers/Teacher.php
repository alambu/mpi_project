<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {
    
        public function civil_architechture()
        {
            $this->load->view('header');
            $this->load->view('teacher/civil_architechture');
            $this->load->view('footer');
        }
		
       public function teachers_staffs()
        {
            $this->load->view('header');
            $this->load->view('teacher/teachers_staffs');
            $this->load->view('footer');
        }
    
}
