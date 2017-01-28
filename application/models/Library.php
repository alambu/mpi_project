<?php

class Library extends CI_Model {

    public function __construct() {

        
    }
	public function getDeptName($roll_no)
	{
		return $this->db->query("select d.dept_name from department d inner join studentinfo s on d.id=s.dept_id where s.roll_no='$roll_no'")->row();
	}
	
	public function get_offered_sub($dept)
	{
		return $this->db->where('dept_id',$dept)->get("subjects")->result();
	}
	function get_academic_details($type)
	{
	return $qy=$this->db
			->where('file_status',$type)
			->where('status','1')
			->get("sylabus_routine_calander")->result();
	}
	public function getAllnotices()
	{
		return $this->db->where('status','1')->order_by('notice_date','DESC')->get('notices')->result();
		
	}
	public function chlk_exists_roll($where){
		$this->db->where($where)->get("studentinfo")->row();
		if($this->db->affected_rows()>0):
			 return '1';
			 else:
			 return '0';
		endif; 
	}
	public function get_student_bill($session,$dept_id,$roll)
	{
		return $this->db->query("select s.total_payable_fee,s.per_semester_payable,s.admission_fee,s.session,s.dept_id,l.semester_due from student_tution_fee s left join student_ledger l on s.roll_no=l.roll_no and s.session=l.session and s.dept_id=l.dept_id where s.roll_no='$roll' and s.session='$session' and s.dept_id='$dept_id' order by l.ledger_id DESC")->row();
	}
	public function get_student_ledger($session,$dept_id,$roll)
	{
		return $this->db->query("select l.voucher_no,others_fee,l.model_test,l.service_charge,l.total_bill,re_exam_fee,total_received,payment_date,remarks,s.semester_name
 from student_ledger l left join semester s on l.semester_id=s.id where l.roll_no='$roll' and l.session='$session' and l.dept_id='$dept_id'")->result();
	}
	public function get_student_all_moneyReceipt()
	{
	return $this->db->query("select l.voucher_no,session,roll_no,dept_id,others_fee,l.model_test,l.service_charge,l.total_bill,re_exam_fee,total_received,payment_date,remarks,s.semester_name
	 from student_ledger l left join semester s on l.semester_id=s.id ")->result();
	}
	
	
	public function get_deptInfo($id)
	{
		return $this->db->where('id',$id)->get('department')->row();	
	}
	public function get_online_std()
	{
		return $this->db->order_by('id','DESC')->get('onlineapply')->result();	
	}
	
	
	public function get_extraAct()
	{
		return $this->db->get('activites')->row();
		
	}
	
	public function getAllnews()
	{
		return $this->db->where('status','1')->order_by('id','DESC')->get('news')->result();
		
	}
	public function getTutionfee($roll)
	{
		// return $this->db->where('roll_no','$roll')->get('student_tution_fee')->row();	
		return $this->db->select("*")->from("student_tution_fee")->where("roll_no",$roll)->get()->row();
		// echo $this->db->last_query();
	}
	function get_deptDetails($page)
	{
		return $this->db->where("dept_name",$page)->get("department")->row();
	}
	public function detpName($id)
	{
		return $this->db->where("id",$id)->get("department")->row();
		
	}
	public function sessName($id)
	{
		return $this->db->where("id",$id)->get("mpi_session")->row();
	}
	public function expName($id)
	{
		return $this->db->where("expense_id",$id)->get("expense_ctg")->row()->title;
	}
	
	//get mpi credit voucher 
	function get_credit_voucher()
	{
		return $this->db->select('voucherno')->from('mpi_credit_voucher')->order_by('voucherno','DESC')->limit(1)->get()->row()->voucherno+1;
	}
	//get mpi debit voucher 
	function get_dedit_voucher()
	{
		return $this->db->select('voucher_no')->from('mpi_debit_voucher')->order_by('voucher_no','DESC')->limit(1)->get()->row()->voucher_no+1;
	}
	
	
	public function getStudentinfo($filter){
	 
	return $this->db->order_by('dept_id,roll_no','ASC')->get_where('studentinfo',$filter)->result();
	

	  //$this->db
                // ->join('department','department.id = studentinfo.dept_id')
                // ->select('studentinfo.*,department.dept_name')
				// ->where($filter)
                // ->get('studentinfo')->result();
	 
	}
	public function getSemester($filter){
	return $this->db->select('semester_name')->from('semester')->where('id',$filter)->get()->row()->semester_name;
	}

	public function getAllsylabus()
	{
	   $where=array('status'=>1,'file_status'=>1);
		return $this->db->where($where)->order_by('date(entry_date)','DESC')->get('sylabus_routine_calander')->result();
		
	}
	public function get_admissionDetails()
	{
	   // $where=array(
	   // 'status'=>1);
	   // $where_in=array(
	   // 'file_status'=>'5,6,7'
	   // );
		// return $this->db->where_in($where_in)->order_by('date(entry_date)','DESC')->get('sylabus_routine_calander')->result();
		// echo $this->db->last_query();
		 return $this->db->query("select * from sylabus_routine_calander where status=1 and file_status in(5,6,7) order by date(entry_date) DESC")->result();
		
	}
	public function getAllroutine()
	{
		$where=array('status'=>1,'file_status'=>2);
		return $this->db->where($where)->order_by('date(entry_date)','DESC')->get('sylabus_routine_calander')->result();
		
	}
	public function getAllcalander()
	{
		$where=array('status'=>1,'file_status'=>3);
		return $this->db->where($where)->order_by('date(entry_date)','DESC')->get('sylabus_routine_calander')->result();
		
	}
	
    public function getPrincipale_message($type)
	{
		return $this->db
		->where('type',$type)
		->where('status','1')
		->get('principale_message')->row();
		
	}
	 public function get_about_us()
	{
		return $this->db->get('about_us')->row();
		
	}
	
	
	public function getSession(){
		return $this->db->get("mpi_session")->result();
	}
	
	public function getDeptTitle($id)
	{
		if($id==1) $title="Computer Technology";
		if($id==2) $title="Telecommunication Technology";
		if($id==3) $title="Civil Technology";
		if($id==4) $title="Architecture Technology";
		if($id==5) $title="Electrical Technology";
		if($id==6) $title="Electronics Technology";
		if($id==7) $title="HSC (Business Management)";
		return $title;
		
	}
    
}
	