<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    public function index()
        {
            $this->load->view('header');
            $this->load->view('index');
            $this->load->view('footer');
        }
    
        public function about()
        {
            $this->load->view('header');
            $this->load->view('about-us');
            $this->load->view('footer');
        } 
		
		
		//online apply
     public function online()
      {
  
	if($_POST)
	 {
	 $data=$this->input->post(null);
	 $update = $this->input->post(null);
        if ($_FILES['std_picture']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['std_picture']['name'], PATHINFO_EXTENSION));
            $name = 'online' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['std_picture']['tmp_name'], './uploads/' . $name);
            $input['std_picture'] = $name;
        }
       $this->db->insert("onlineapply",$input);
        toast_set('success', 'Successfully Apply Online');
        redirect('main/online','location');
	 
	 }
	 else
		{
            $this->load->view('header');
            $this->load->view('online');
            $this->load->view('footer');
        }
		}
    
        public function gallery()
        {
            $this->load->view('header');
            $this->load->view('gallery');
            $this->load->view('footer');
        }
		public function news()
	{
	        $this->load->view('header');
            $this->load->view('latest_news');
            $this->load->view('footer');
	
	}
        public function photo()
        {
            $this->load->view('header');
            $this->load->view('photo');
            $this->load->view('footer');
        }
        public function notice()
        {
            $this->load->view('header');
            $this->load->view('notice');
            $this->load->view('footer');
        }
		function download_file()
		{
		$this->load->helper('download');
		$file=$this->uri->segment(3);
		$title=$this->uri->segment(4);
		$pth    =   file_get_contents(base_url()."uploads/sylabus/".$file);
		$nme    =   $title.'.pdf';
		force_download($nme, $pth);
		}
     function download_notice()
		{
		$this->load->helper('download');
		$file=$this->uri->segment(3);
		$pth    =   file_get_contents(base_url()."uploads/notices/".$file);
		force_download($file, $pth);
		}
		
		public function details($id)
        {  
		   $data['notice_file']=$this->db->select("notice_file")->from("notices")->where("id",$id)->get()->row()->notice_file;
            $this->load->view('header');
            $this->load->view('notice_view',$data);
            $this->load->view('footer');
        }
		public function sylabus_details($id)
        {  
		   $data['sylabus']=$this->db->select("file_name")->from("sylabus_routine_calander")->where("id",$id)->get()->row()->file_name;
            $this->load->view('header');
            $this->load->view('sylabus_view',$data);
            $this->load->view('footer');
        }
		public function content_details()
        {  
		   $data['file']=$this->uri->segment(3);
		   $type=$this->uri->segment(4);
		   $data['title']=urldecode($type);
		   $data['url']="uploads/".$type.'/'.$data['file'];
            $this->load->view('header');
            $this->load->view('content_view',$data);
            $this->load->view('footer');
        }
}
