<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Library', 'lib');
		$this->load->model('numbertobangla', 'bnc');
       $logged_status=$this->session->userdata('login_status');
        $role=$this->session->userdata('role');
	  if($logged_status==FALSE){
			redirect('login','location');
		}
		
    }
  //get online all students
  public function online_student()
  {    
        $data['info']=$this->lib->get_online_std();
	    $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/student/online_std',$data);
        $this->load->view('admin/footer');
  }
  
  public function manage_expenses()
  {
	  if($_POST):
	   $input=$this->input->post(null);
	   $in=$this->db->insert("expense_ctg",$input);
	   if($in):
	    toast_set('success', 'Expense Category Added Successfully');
        redirect('Admin/all_expenses',$input);	
    endif;
	  else:
	   $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/expense/create');
        $this->load->view('admin/footer');
	endif;
  }
  public function all_expenses()
  {
	  $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/expense/index');
        $this->load->view('admin/footer');
  }
  public function get_content()
  {
	  echo "test";
  }
  public function daily_expense()
  {
        $this->load->view('admin/expense/daily_expense');

  }
  public function daily_expense_sub()
  {
     $voucher_no=$this->lib->get_dedit_voucher();
	 $input=$this->input->post(null);
	 $input['voucher_no']=$voucher_no;$entry_date=array(
				 'entry_date'=>date('Y-m-d')
				 );
	$cdate=explode('/',$input['voucher_date']);	
    $input['voucher_date']=$cdate[2].'-'.$cdate[1].'-'.$cdate[0];  	
	$in=$this->db->insert("expense_ledger",$input);
	$in=$this->db->insert("mpi_debit_voucher",$entry_date);
	if($in):
	 toast_set('success','Successfuly Expensed');
	 redirect('admin/daily_expense');
	endif;
  }
  
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');
    }
  //Department message
  public function department_message()
  {
	 $deptId=$this->uri->segment(3); 
	 if($deptId==""):$deptId=1;endif;
	$data['info']=$this->lib->get_deptInfo($deptId);
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/department_message',$data);
	$this->load->view('admin/footer');
	}
  //extra activities
  public function extra_activities()
  {
	  if($_POST):
	  $input=$this->input->post(null);
	  $in=$this->db->insert("activites",$input);
		  if($in==1):
		   redirect('admin/extra_activities','location');
		  endif;
	  else:
	$data['info']=$this->lib->get_extraAct();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/extra_activities',$data);
	$this->load->view('admin/footer');
	endif;
	}
  
  
  
   function department_msg_sub()
  {
	  if($_POST):
	    $input=$this->input->post(null);
		$id=$input['id'];
		 if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'mpi_' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/department/' . $name);
            $input['image'] = $name;
        }
		$this->db->where("id",$id);
		$this->db->update("department",$input);
		// echo $this->db->last_query();exit;
		toast_set('success','Updated Department Message Successfully');
        redirect('admin/department_message');
	  endif;
  }
  
   //about us something
  public function about_us()
  {
	        $data['row']=$this->lib->get_about_us();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/about_us',$data);
            $this->load->view('admin/footer');
  }
  
  
  function about_us_submit()
  {
	  if($_POST):
	    $input=$this->input->post(null);
		 if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'mpi_' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $name);
            $input['photo'] = $name;
        }
		$this->db->where("id",'1');
		$this->db->update("about_us",$input);
		toast_set('success','Updated About Us Successfully');
        redirect('admin/about_us');
	  endif;
  }
  
  
  
  
    public function slider()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/slider');
        $this->load->view('admin/footer');
    }

    public function addslider()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/addslider');
        $this->load->view('admin/footer');        
    }
    
    public function store_slider(){
        
        $input = $this->input->post(null);
        if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'slider_' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $name);
            $input['image'] = $name;
        }
        $this->db->insert('slider',$input);
        toast_set('success','Slider Add Successfully');
        redirect('admin/slider');
    }
	public function student_bill_setup()
	{
		    $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
			$this->load->view('admin/student_bil_setup');
            $this->load->view('admin/footer');
 
	}
	
	//student per semester fee
	public function semester_fee_sub()
	{
		$input=$this->input->post(null);
		$input['voucherno']=$this->lib->get_credit_voucher();
		$roll=$input['roll_no'];
		$receive_amount=$input['receive_amount'];
		$entry_date['entry_date']=date('Y-m-d h:m:s');
		$in=$this->db->insert("semester_fee",$input);
		$this->db->query("UPDATE student_tution_fee set total_paid_amount=total_paid_amount+$receive_amount where roll_no='$roll'");
		$in=$this->db->insert("mpi_credit_voucher",$entry_date);
		toast_set('success','Student Semester Fee Collected Successfully');
		if($in): redirect("admin/student_bil_info"); endif;
	}
		//student tution fee setup
	public function setup_tution_fee_sub()
	{
		$input=$this->input->post(null);
		$student_id=$input['student_id'];
		$roll=$input['roll_no'];
		$reg=$input['reg_no'];
        $q=$this->db->query("select * from student_tution_fee where student_id='$student_id'")->row();	
		$where=array(
		'student_id'=>$student_id
		);
       if($this->db->affected_rows()>0){
		   $in=$this->db->where($where)->update("student_tution_fee",$input);   
	   }	
       else {   
	   $in=$this->db->insert("student_tution_fee",$input);}
	    toast_set('success','Student Tution Fee Update Successfully');
		if($in): redirect("admin/student_bil_info"); endif;
	}
	
	
    //student xls,csv file upload
	public function upload_students()
	{
		if($_POST){
			
			print_r($_FILES);
		}
		else{
		$this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/student/upload_students');
        $this->load->view('admin/footer'); 
		}
		
	}
	
	public function payment_details()
	{  extract($_POST);
		$q=$this->db->query("SELECT * FROM semester_fee b where b.roll_no='$cusId'")->result();
		$nr=1;$total=0;
		if(count($q)<1): echo "<center><p style='color:red;'><br/>Sorry  not found.</p></center>"; else:
		foreach($q as $row):
		$semester=$this->lib->getSemester($row->semester_id);
		$total+=$row->receive_amount;
		echo "
		<tr>
		  <td>$nr</td>
		  <td style='width:100px'>$row->payment_date</td>
		  <td>Cash Account</td>
		  <td>$row->voucherno</td>
		  <td>$semester</td>
		  <td>$row->receive_amount</td>
		</tr>
		";$nr++; 
		endforeach;
		$total=number_format($total,2);
		echo "<tr><td colspan='4'></td><td><b>Total</b> :</td><td>$total</td></tr>";
		endif;
	}
	public function upload_students_sub()
	{
	$filename=$_FILES['std_file']['name'];
	$filetype=$_FILES['std_file']['type'];
	$filetmp=$_FILES['std_file']['tmp_name'];
	$handle = fopen($filetmp, "r");
	while (($data = fgetcsv($handle, 1000, ",")) !== FALSE):
	$num = count($data); if ($num<5)  break;	
	 $input=array(
		 "name"=>$data[0],
		 "email"=>$data[1],
		 "father"=>$data[2],
		 "mother"=>$data[3],
		 "mobile"=>$data[4],
		 "roll_no"=>$data[5],
		 "reg_no"=>$data[6],
		 "date_of_birth"=>$data[7],
		 "present_address"=>$data[8],
		 "permanent_address"=>$data[9],
		 "gender"=>$data[10],
		 "blood_group"=>$data[11],
		 "session"=>$data[12],
		 "dept_id"=>$data[13],
		 "shift"=>$data[14]
	 );
	 $this->db->insert("studentinfo",$input);
	endwhile;
	fclose($handle);
	redirect('admin/student','location');
	}
    public function editslider($id)
    {
        $data['sL'] = $this->db->where('id',$id)->get('slider')->row();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/editslider',$data);
        $this->load->view('admin/footer'); 
    }
    
    public function update_slider($id)
    {
        $update = $this->input->post(null);
        if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'slider_' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './slider/' . $name);
            $update['image'] = $name;
        }
        $this->db->where('id',$id)->update('slider',$update);
        toast_set('success', 'Slider Updated Successfully');
        redirect('admin/slider');
        
        
    }
    
    public function delete_slider($id)
    {
       $this->db->where('id',$id)->delete('slider');
       toast_set('error', 'Slider Delete Successfully');
       redirect('admin/slider');
        
    }
	//student monereceipt
	public function student_moneyReceipt()
	{
		$this->load->view('admin/student_bill_section/student_roshid');
	}
	public function expense_moneyReceipt()
	{
		$this->load->view('admin/student_bill_section/student_roshid');
	}
	
	
//account reports
public function daily_reports()
{
		$this->load->view('admin/reports/reports');
 }
 //delete any money receipt
 
 public function delete_moneyReceipt()
 {
	 $id=$this->uri->segment(3);
	 $this->db->query("insert into trash(ledger_id, session, dept_id, roll_no, semester_fee, admission_fee, voucher_no, semester_id, semester_due, total_bill, others_fee, re_exam_fee, total_received, payment_date, receive_by, remarks, entry_date, model_test, service_charge, special_sacrifice)
select ledger_id, session, dept_id, roll_no, semester_fee, admission_fee, voucher_no, semester_id, semester_due, total_bill, others_fee, re_exam_fee, total_received, payment_date, receive_by, remarks, entry_date, model_test, service_charge, special_sacrifice from student_ledger where voucher_no='$id'");
	$del=$this->db->where('voucher_no',$id)->delete("student_ledger");

	if($del):
	toast('success','Delete Successfully.');
        redirect('admin/all_moneyReceipt','location');
	endif;
 }
 public function delete_debit_vouchers()
 {
	 $id=$this->uri->segment(3);
	 $this->db->query("insert into expense_ledger_trash(voucher_date, narration, voucher_no, expense_id, amount, entry_date)
select voucher_date, narration, voucher_no, expense_id, amount, entry_date from expense_ledger where voucher_no='$id'");
	$del=$this->db->where('voucher_no',$id)->delete("expense_ledger");

	if($del):
	toast('success','Delete Successfully.');
        redirect('admin/all_debit_vouchers','location');
	endif;
 }
 
 
 public function daily_reports_custom()
{
		$this->load->view('admin/reports/reports_custom');
 }
 
 public function daily_expense_reports()
{
		$this->load->view('admin/reports/daily_expense_reports');
 }
 
 
 
 public function check_semester_fee_chk()
	{
		extract($_POST);
		$this->db->query("select * from student_ledger WHERE semester_id='$semester_id' and session='$session' and dept_id='$dept_id' and roll_no='$roll_no'")->row;
		// echo $this->db->affected_rows();
		 // echo $this->db->last_query();exit;
		if($this->db->affected_rows()>0):
		echo "1"; exit;
		else:
		echo "0"; exit;
		endif;
	}
 
	public function student_bill_collection()
	{   
           if(isset($_POST['filter'])): 
		    extract($_POST);
			$where=array(
						'session'=>$session,
						'dept_id'=>$dept_id,
						'roll_no'=>$roll_no
					);
			$this->session->set_userdata($where);
			$data['info']=$this->lib->get_student_bill($session,$dept_id,$roll_no);	
			 $data['paid']=$this->lib->get_student_ledger($session,$dept_id,$roll_no);	
            // $this->load->view('admin/header');
            $this->load->view('admin/student_bill_section/bill_collection',$data);
            $this->load->view('admin/footer');			
		   elseif(isset($_POST['received'])):
				$input=$this->input->post(null);
				extract($input);
				// print_r($input);exit;
				$date=explode("/",$input['payment_date']);
				$newDate=$date[2].'-'.$date[1].'-'.$date[0];
				// if($no_add==0):$semester_fee=0;endif;
				//check existing semester fee
				// $exist_data=$this->check_semester_exist($semester_id,$roll_no);
				// if($exist_data==1): $semester_fee=0;else:$semester_fee=$semester_fee;$semester_due=0;endif;
				
				$new_semester_due=$total-$receive_amount;
				//echo $new_semester_due;
				if($new_semester_due<1):$new_semester_due=0;endif;
				$voucherno=$this->lib->get_credit_voucher();
					// echo "<pre>";
					 // print_r($input);
					// exit;
				 $data=array(
					 'session'=>$session,
					 'dept_id'=>$dept_id,
					 'roll_no'=>$roll_no,
					 'payment_date'=>$newDate,
					 'semester_id'=>$semester_id,
					 'voucher_no'=>$voucherno,
					 're_exam_fee'=>$re_exam_fee,
					 'others_fee'=>$others,
					 'model_test'=>$model_test,
					 'service_charge'=>$service_charge,
					 'special_sacrifice'=>$special_sacrifice,
					 'semester_due'=>$new_semester_due,
					 'total_bill'=>$total,
					 'total_received'=>$receive_amount,
					 'remarks'=>$remarks
				 );
					 // echo "<pre>";
					 // print_r($data);exit;
  $last_due=$total-($re_exam_fee+$others+$model_test+$service_charge);				
				
				 $entry_date=array(
				 'entry_date'=>date('Y-m-d')
				 );
				$in=$this->db->insert("student_ledger",$data);
				$last_insert_id=$this->db->insert_id();
				$this->db->query("select * from student_ledger where session='$session' and dept_id='$dept_id' and roll_no='$roll_no'")->row();
				$where=array(
						'session'=>$session,
						'dept_id'=>$dept_id,
						'roll_no'=>$roll_no
					);
				if($this->db->affected_rows()==1):					
					$update=array(
						'semester_fee'=>$semester_fee,
						'admission_fee'=>$admission_fee
					);
					$this->db->where('ledger_id',$last_insert_id)->update("student_ledger",$update);
				else:
				$update=array(
						'semester_fee'=>$last_due
					);
				  $this->db->where('ledger_id',$last_insert_id)->update("student_ledger",$update);
				endif;
				
				// echo $this->db->last_query();exit;
				 if($in==1):
				  $this->session->set_userdata($where);
				 $in=$this->db->insert("mpi_credit_voucher",$entry_date);
				 toast_set('success','Successfuly payment Received');
				
				   redirect('admin/student_bill_collection','location');
				 endif;
		   else:
		     extract($this->session->all_userdata());
		    $data['info']=$this->lib->get_student_bill($session,$dept_id,$roll_no);	
			 $data['paid']=$this->lib->get_student_ledger($session,$dept_id,$roll_no);	
            // $this->load->view('admin/header');
            $this->load->view('admin/student_bill_section/bill_collection',$data);
            $this->load->view('admin/footer');
			endif;
		
	}
	public function check_semester_exist($semester_id,$roll_no)
	{
		$this->db->query("select semester_id from student_ledger where semester_id='$semester_id' AND roll_no='$roll_no'")->row;
		// echo $this->db->last_query();exit;
		if($this->db->affected_rows()>0):
		return '1';
		else:
		return '0';
		endif;
	}
	public function all_moneyReceipt()
	{
	
		 $data['paid']=$this->lib->get_student_all_moneyReceipt();	
            $this->load->view('admin/header');
            $this->load->view('admin/student_bill_section/all_moneyReceipt',$data);
            $this->load->view('admin/footer');	 
	}
	public function all_debit_vouchers()
	{
            $this->load->view('admin/header');
            $this->load->view('admin/expense/all_moneyReceipt');
            $this->load->view('admin/footer');	 
	}
	
	
//student payment reports
public function bill_collection_reports()
{

		$this->load->view('admin/reports/bill_collection_reports');

	
    }

    public function teacher()
	{
            $data['row'] = $this->db    
                ->select('*')
                ->from('teachers')->get()->result();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/teacher/index', $data);
            $this->load->view('admin/footer');
    }
    //add pricipale message
	public function principale_msg()
	{       
	       $type=$this->input->get('type',true);
	        $data['row']=$this->lib->getPrincipale_message($type);
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/principale_msg',$data);
            $this->load->view('admin/footer');
	}
	public function update_pricipale_msg()
	{
		$update = $this->input->post(null);
		$type=$update['type'];
        if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = uniqid().'.'.$ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './assets/images/' . $name);
            $update['image'] = $name;
        }
	
		$this->db->where("type",$type)->update("principale_message",$update);
		 redirect('admin/principale_msg?type='.$type);
	}
	public function addteacher()
	{	
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/teacher/create');
            $this->load->view('admin/footer');
	}
	
	//add gallery
	public function gallery_entry()
	{
        $input = $this->input->post(null);
        if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'gallery' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/gallery/' . $name);
            $input['image'] = $name;
        }
        $this->db->insert('gallery',$input);
        toast_set('success','Gallery Picture Add Successfully');
        redirect('admin/gallery');
	}
	
	//delete gallery
	public function delete_gallery()
	{
	  $id=$this->uri->segment(3);	
	  $this->db->where('id',$id)->delete('gallery');
        toast_set('error','Gallery Information Delete Successfully');
        redirect('admin/gallery');	
	}
	
    public function store_teacher()
	{
        $input = $this->input->post(null);
        if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'teacher_' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $name);
            $input['image'] = $name;
        }
        $this->db->insert('teachers',$input);
        toast_set('success','Teacher Add Successfully');
        redirect('admin/teacher');
	}
    
	public function editteacher($id)
	{
            $data['row'] = $this->db->where('id',$id)->get('teachers')->row();
//        var_dump($data);
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/teacher/edit',$data);
            $this->load->view('admin/footer');
	}
    
    
	public function update_teacher($id)
	{
        $update = $this->input->post(null);
        if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'teacher_' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/' . $name);
            $update['image'] = $name;
        }
        $this->db->where('id',$id)->update('teachers',$update);
        toast_set('success','Teacher Information Update Successfully');
        redirect('admin/teacher');
	}
    
	public function delete_teacher($id)
	{
            $this->db->where('id',$id)->delete('teachers');
            toast_set('error','Teacher info Delete Successfully');
            redirect('admin/teacher');
	}

    
    public function student()
	{
            $data['row'] = $this->db
                ->join('department','department.id = studentinfo.dept_id')
                ->select('studentinfo.*,department.dept_name')
                ->order_by('department.id,studentinfo.roll_no','ASC')->get('studentinfo')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/student/index',$data);
            $this->load->view('admin/footer');
    }
	//manage session 
	public function manage_session()
	{
	    $data['row'] = $this->db->select("*")->from("mpi_session")->order_by('id','ASC')->get()->result(); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/subject/manage_session',$data);
		$this->load->view('admin/footer');	
		
	}
	public function addsession()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/subject/addsession');
		$this->load->view('admin/footer');
	}
	public function store_session()
	{
		$input=$this->input->post(null);
		$in=$this->db->insert("mpi_session",$input);
		if($in):
           toast_set('success','Save Session Successfully.');
		    redirect('admin/manage_session');
		endif;
		
	}
	
	
	    public function editsession($id)
	{
            $data['row'] = $this->db->where('id',$id)->get('mpi_session')->row();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/subject/session_edit',$data);
            $this->load->view('admin/footer');
    }
	public function update_session($id)
	{
        $update = $this->input->post(null);
        $this->db->where('id',$id)->update('mpi_session',$update);
        toast_set('success','Session Information Update Successfully');
        redirect('admin/manage_session');
	}
	
	public function delete_session($id)
	{
		$this->db->where('id',$id)->delete('mpi_session');
            toast_set('error','Session info Delete Successfully');
            redirect('admin/manage_session');
	}
	
	//subject management
	 public function sub_manage()
	{
            $data['row'] = $this->db
                ->join('department','department.id = subjects.dept_id')
                ->select('subjects.*,department.dept_name')
                ->get('subjects')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/subject/index',$data);
            $this->load->view('admin/footer');
    }
	public function addsubject()
	{
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/subject/create');
            $this->load->view('admin/footer');
    }
	
	public function store_subject()
	{
		$input=$this->input->post(null);
		$in=$this->db->insert("subjects",$input);
		toast_set('success','Suject Added Successfully.');
		if($in): redirect('admin/sub_manage','location'); endif;
	}
	
	    public function editsubject($id)
	{
            $data['row'] = $this->db->where('id',$id)->get('subjects')->row();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/subject/edit',$data);
            $this->load->view('admin/footer');
    }
		public function update_subject($id)
	{
        $update = $this->input->post(null);
        $this->db->where('id',$id)->update('subjects',$update);
        toast_set('success','Subject Information Update Successfully');
        redirect('admin/sub_manage');
	}
		public function delete_subject($id)
	{
            $this->db->where('id',$id)->delete('subjects');
            toast_set('error','Subject info Delete Successfully');
            redirect('admin/sub_manage');
	}

	//subject offer
	public function subject_offer()
	{
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/subject/subject_offer');
            $this->load->view('admin/footer');
    }
	
	public function subject_offer_submit()
	{
		extract($_POST);
		//validation start
		if(count($subject)==0) { echo "Please Choose Subject";exit; }
		//validation end
		if(empty($semester_id) || empty($dept_id))
		{
			echo "Empty Field";exit;
		}
		
		else 
		{
			//print_r($_POST);exit;
			$test=$this->db->query("select * from subject_offer where dept_id='$dept_id' and session_id='$session' and  semester_id='$semester_id'")->row();
			//echo count($test);exit;
			$cors=implode($subject,",");
			$data=array(
			'dept_id'=>$dept_id,
			'semester_id'=>$semester_id,
			'session_id'=>$session,
			'subjects_id'=>$cors
			);

			if(count($test)<1){ echo $this->db->insert('subject_offer',$data);exit; }
			
			else { 
			$where=array(
			'dept_id'=>$dept_id,
			'semester_id'=>$semester_id,
			'session_id'=>$session
			);
			echo $this->db->where($where)->update('subject_offer',$data); exit;  
			}
			
		}
	}
	public function subject_list()
	{
		$where=$this->input->post(null);
	  $data=$this->db->get_where("subjects",$where)->result();
	  $nr=1;
	  foreach($data as $s):
	 echo "
	  <tr>
		  <td><input type='checkbox' name='subid[]' value='$s->id'/> </td>                      
		  <td>$s->subject_name</td>
		  <td>$s->subject_code</td>      
	  </tr>
	 ";
	  $nr++;endforeach;
		
	}
	public function subject_offer_sub()
	{
	$input=$this->input->post(null);
    $subjects=implode(',',$input['subid']);
    $data=array(
	'session_id'=>$input['session'],
	'dept_id'=>$input['dept_id'],
	'semester_id'=>$input['semester_id'],
	'subjects_id'=>$subjects
	);
	$in=$this->db->insert("subject_offer",$data);
	toast_set('success','Subject Offered Successfully.');
	if($in): redirect("admin/subject_offer");endif;
		
	}
	
	public function subject_offer_list()
	{
            $data['row'] = $this->db
                ->join('department,subjects','department.id = subject_offer.dept_id','mpi_session.id=subject_offer.session_id','semester.id=subject_offer.semester_id')
                ->select('department.dept_name,mpi_session.title as sestitle,semester.title as sem_title,count(subject_offer.subjects_id) as total')
                ->get('subject_offer')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/subject/subject_offer_list',$data);
            $this->load->view('admin/footer');
    }
	
	//result management
	public function institute_result($filter='id>0')
	{   
		if($_POST):
		$filter=$this->input->post(null);
		extract($filter);
		$filter=array('session'=>$session,'dept_id'=>$dept_id);
		endif;
		$data['row']=$this->lib->getstudentinfo($filter);	
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/result/institute_result',$data);
		$this->load->view('admin/footer');
	}
	public function result_published()
	{		
	$input = $this->input->post(null);	
	extract($input);
	
	// echo "<pre>";
	// print_r($input);exit;
	$roll_no= $this->input->post("roll_no");
	$i = 0;
    foreach($roll_no as $row){
        $data['roll_no'] = $input['roll_no'][$i];
        $data['reg_no'] = $input['reg_no'][$i];
        $data['grade_point'] = $input['grade_point'][$i];
        $data['grade'] = $input['grade'][$i];
        $data['session_id'] =$session_id;
        $data['dept_id'] = $dept_id;
        $data['semester_id'] = $semester_id;
        $data['sub_credit'] = $sub_credit;
		if($input['grade_point'][$i]>0):
        $this->db->insert("institute_result",$data);
		endif;
        $i++;
    }
	toast_set('success','Successfully Result Uploaded');
	redirect('admin/institute_result');
	}
	//board result
	public function board_results()
	{
		   $data['row']=$this->db->select('*')->from('notices')->where('notice_type','3')->get()->result();	
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
			$this->load->view('admin/result/board_results',$data);
            $this->load->view('admin/footer');
	}
	public function new_result()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/result/entry_board_result');
		$this->load->view('admin/footer');
	}
	public function new_result_sub()
	{
		$input = $this->input->post(null);
        //var_dump($input);
        if ($_FILES['result_file']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['result_file']['name'], PATHINFO_EXTENSION));
            $name = 'board_'.date('d-m-Y'). uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['result_file']['tmp_name'], './uploads/board/' . $name);
            $input['result_file'] = $name;
        }
        $this->db->insert('board_result',$input);
        redirect('admin/board_results','location');
		
		
		$input=$this->input->post(null);
		$in=$this->db->insert("board_result",$input);
		toast_set('success','Successfully Result Uploded');
	}
	
	public function student_bill()
   {  
   if($_POST):
		$input=$this->input->post(null);
		$in=$this->db->insert("student_bil_info",$input);
		if($in):
		 redirect('admin/student_bil_info','location');
		else:
		return false;
		endif;
   else:
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
			$this->load->view('admin/student_bill');
            $this->load->view('admin/footer');
	endif;
    }
            
	public function setup_tution_fee(){
		extract($_POST);
		$q=$this->db->query("SELECT * FROM studentinfo b where b.id='$stdId'")->row();
		$t=$this->db->query("SELECT * FROM student_tution_fee b where b.student_id='$stdId'")->row();
		echo $q->roll_no."%+**%%".$q->reg_no."%+**%%".$t->total_payable_fee."%+**%%".$t->admission_fee."%+**%%".$t->per_semester_payable."%+**%%".$t->status."%+**%%".$q->session."%+**%%".$q->dept_id;
	}	
	//get semester fee
	public function semester_fee(){
		extract($_POST);
		$q=$this->db->query("SELECT * FROM student_tution_fee b where b.roll_no='$cusId'")->row();
		$due=$q->total_payable_fee-$q->total_paid_amount;
		echo $q->roll_no."%+**%%".(int) $q->per_semester_payable."%+**%%".$q->total_payable_fee."%+**%%".$q->admission_fee."%+**%%".$due."%+**%%".$q->id;
	}	

	
		public function updatefee(){
		extract($_POST);
		$dataIns=array(
			'std_id'=>$std_id,
			'roll_no'=>$campusNo2,
			'total'=>$campusNo2,
			'status'=>$status	
		);
			$this->db->where("id",$camId);
		$ins=$this->db->update("bu_campus",$dataIns);
		if($ins){ redirect("admin/setting","location");}
	}

public function student_bil_info($filter=array('id >'=>'0'))
   {    

   if($_POST):
   $input=$this->input->post(null);
   if($input['session']!==""): $filter['session']=$input['session']; endif;
   if($input['dept_id']!==""): $filter['dept_id']=$input['dept_id']; endif;
   endif;
   $data['row']=$this->lib->getstudentinfo($filter);
  
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
			$this->load->view('admin/student_bil_info',$data);
            $this->load->view('admin/footer');
    }		
			
    public function addstudent()
	{
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/student/create');
            $this->load->view('admin/footer');
    }
    
	public function store_student()
	{
        $input = $this->input->post(null);
		$where=array();
		//existing record check
		extract($input);
		$where['session']=$session;
		$where['dept_id']=$dept_id;
		$where['roll_no']=$roll_no;
		$data=$this->lib->chlk_exists_roll($where);
		// echo $data;
		// echo $this->db->last_query();exit;
		if($data=='1'):
		  toast_set('error','Sorry The Roll No already Exists!!');
          redirect('admin/addstudent','location');
		  exit;
		else:
        //var_dump($input);
        if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'student_' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/student/' . $name);
            $input['image'] = $name;
        }
        $this->db->insert('studentinfo',$input);
        toast_set('success','Student Add Successfully');
        redirect('admin/student');
		endif;
	}
    
    public function editstudent($id)
	{
            $data['row'] = $this->db->where('id',$id)->get('studentinfo')->row();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/student/edit',$data);
            $this->load->view('admin/footer');
    }
    
	public function update_student($id)
	{
        $update = $this->input->post(null);
        //var_dump($input);
        if ($_FILES['image']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $name = 'student_' . uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], './uploads/student/' . $name);
            $update['image'] = $name;
        }
        $this->db->where('id',$id)->update('studentinfo',$update);
        toast_set('success','Student Information Update Successfully');
        redirect('admin/student');
	}
    
	public function delete_student($id)
	{
        $this->db->where('id',$id)->delete('studentinfo');
        toast_set('error','Student Information Delete Successfully');
        redirect('admin/student');
	}

    public function notice()
    {
		$data['row']=$this->lib->getAllnotices();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/notice/index',$data);
        $this->load->view('admin/footer');
    }

	
    public function new_notice()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/notice/create');
        $this->load->view('admin/footer');
    }
   	public function new_notice_sub()
	{
        $input = $this->input->post(null);
		extract($input);
		$date=explode("-",$input['notice_date']);
		$newDate=$date[2].'-'.$date[1].'-'.$date[0];
		$input['notice_date']=$newDate;
        //var_dump($input);
        if ($_FILES['notice_file']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['notice_file']['name'], PATHINFO_EXTENSION));
            $name = 'notice_'.date('d-m-Y'). uniqid() . '.' . $ext;
            move_uploaded_file($_FILES['notice_file']['tmp_name'], './uploads/notices/' . $name);
            $input['notice_file'] = $name;
        }
		// print_r($input);exit;
        $this->db->insert('notices',$input);
		if($notice_type==3):
		redirect('admin/board_results','location');
		else:
        redirect('admin/notice','location');
		endif;
	}
	//news
	 public function news()
    {
		$data['row']=$this->lib->getAllnews();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/news/index',$data);
        $this->load->view('admin/footer');
    }

	
    public function new_news()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/news/create');
        $this->load->view('admin/footer');
    }
   	public function new_news_sub()
	{
        $input = $this->input->post(null);
        
        $this->db->insert('news',$input);
		toast('success','Added News Successfully.');
        redirect('admin/news','location');
	}
	
		public function update_news($id)
	{
        $update = $this->input->post(null);
        $this->db->where('id',$id)->update('news',$update);
        toast_set('success','News Information Update Successfully');
        redirect('admin/news');
	}
	 public function editNews($id)
	{
            $data['row'] = $this->db->where('id',$id)->get('news')->row();
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/news/edit',$data);
            $this->load->view('admin/footer');
    }
	public function delete_news($id)
	{
        $this->db->where('id',$id)->delete('news');
        toast_set('error','News Information Delete Successfully');
        redirect('admin/news');
	}
    
	//admission info,requirement,form
	 public function admission_details()
    {
		$data['row']=$this->lib->get_admissionDetails();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/admission/index',$data);
        $this->load->view('admin/footer');
    }
	
	//add admission_info_req_form
	 public function add_admission_info_req_form()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/admission/create');
        $this->load->view('admin/footer');
    }
	//all sylabus
	 public function sylabus()
    {
		$data['row']=$this->lib->getAllsylabus();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/sylabus/index',$data);
        $this->load->view('admin/footer');
    }
	
	

	//add sylabus
     public function add_sylabus()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/sylabus/create');
        $this->load->view('admin/footer');
    }
	//all routine
	 public function routine()
    {
		$data['row']=$this->lib->getAllroutine();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/routine/index',$data);
        $this->load->view('admin/footer');
    }
	//add class routine
     public function add_routine()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/routine/create');
        $this->load->view('admin/footer');
    }
	//all calander
	 public function calander()
    {
		$data['row']=$this->lib->getAllcalander();
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/calander/index',$data);
        $this->load->view('admin/footer');
    }
	//add calander
     public function add_calander()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/calander/create');
        $this->load->view('admin/footer');
    }
	
	// submit sylabus,routine,calander,admission info/req/form
   	public function sylabus_routine_calander_sub()
	{ 
	  $input = $this->input->post(null);
	  extract($input);
	  if($file_status==1) $location='sylabus';
	  if($file_status==2) $location='class_Routine';
	  if($file_status==3) $location='calander';
	  if($file_status==5) $location='admission_info';
	  if($file_status==6) $location='admission_req';
	  if($file_status==7) $location='admission_form';
	 
        if ($_FILES['file_name']['name'] != '') {
            $ext = strtolower(pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION));
            $name = $location.'_'.date('d-m-Y'). uniqid() . '.' . $ext;
         move_uploaded_file($_FILES['file_name']['tmp_name'], './uploads/'.$location.'/'. $name);
            $input['file_name'] = $name;
        }
		if($file_status==5 || $file_status==6 || $file_status==7):
		  $location="admission_details";
		endif;
		// print_r($input);exit;
		$url="admin/".$location;
        $this->db->insert('sylabus_routine_calander',$input);
		 toast_set('success','News File Added');
        redirect($url,'location');
	}
   
   
   
    public function gallery()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/gallery/index');
        $this->load->view('admin/footer');
    }
    

    public function new_gallery()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/gallery/create');
        $this->load->view('admin/footer');
    }
    
    public function settings()
    {
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/settings');
            $this->load->view('admin/footer');
    }

     public function secure_password()
    {
        $input = $this->input->post(null, true);
        $admin_id = $this->session->userdata('admin_id');
         $up=$this->db->where('id',$admin_id)->update("users",$input);
		
		 if($up==1):
		   $message="Updated Password";
		   
		 else:
		  $message="Something Missing!!";
		 endif;
       $this->session->set_flashdata('success', $message);
         toast_set('success', $message);
         redirect('admin/settings');
     }
}
