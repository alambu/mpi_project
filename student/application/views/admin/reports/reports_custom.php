<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<base href="<?php echo base_url();?>"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Daily Reports</title>
	<meta name="robots" content="index, nofollow" />
	<link rel="shortcut icon" href="reports/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="reports/reports.css"/>
	<link rel="stylesheet" media="screen,projection" type="text/css" href="<?php echo base_url();?>reports/jquery-ui.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<script type="text/javascript">
		$(function(){
		var pickerOpts = {
				dateFormat: $.datepicker.ATOM
			};
		
		var pickerOpts1 = {
			dateFormat: $.datepicker.ATOM
			};	
			
			$("#fromdate").datepicker(pickerOpts);
			$("#todate").datepicker(pickerOpts1);
		});
	</script>
<style type="text/css">
@media print {
#bar{display:none;}
#container th{border:1px solid #f1f1f1;}
}
</style>

</head>
<?php
$mot=0;

$fdate=$this->input->get('fdate',TRUE);if (empty($fdate)) $fdate=date('Y-m-d');
$tdate=$this->input->get('tdate',TRUE);if (empty($tdate)) $tdate=date('Y-m-d');
if(isset($_GET['roll_no'])):
extract($_GET);
if($roll_no==""):
  $query=$this->db->query("select l.voucher_no,l.roll_no,l.total_bill,semester_due,others_fee,re_exam_fee,total_received,payment_date,remarks,s.semester_name
 from student_ledger l inner join semester s on l.semester_id=s.id  where date(l.payment_date) between '$fdate' and '$tdate'")->result();
else:
  $query=$this->db->query("select l.voucher_no,l.roll_no,l.total_bill,semester_due,others_fee,re_exam_fee,total_received,payment_date,remarks,s.semester_name
 from student_ledger l inner join semester s on l.semester_id=s.id  where date(l.payment_date) between '$fdate' and '$tdate' and l.roll_no='$roll_no'")->result();
endif;

else:
$query=$this->db->query("select l.voucher_no,l.roll_no,l.total_bill,semester_due,others_fee,re_exam_fee,total_received,payment_date,remarks,s.semester_name
 from student_ledger l inner join semester s on l.semester_id=s.id  where date(l.payment_date) between '$fdate' and '$tdate'")->result();

endif;


?>

<style>
.date{
width:90px;
}
</style>
<body>
<div id="bar">
<div class="barcon">
<form action="" method="get">
<p align="left"  style="width:100%">
<span>From:</span>
<input type="text" class="date" id="fromdate" name='fdate' value="<?php echo $fdate?>">
<span>&nbsp; To:</span>
<input type="text" class="date" id="todate" name='tdate' value="<?php echo $tdate?>">
<span>&nbsp; Roll No:</span>
<input type="text" class=""  name='roll_no' value="<?php echo $roll_no?>">

<input type="submit" value="Submit" class="submit">
</p>
</form>
<p align="right" style="float:right;width:10%;position:relative;top:-20px;">
<a href="javaScript:window.print();" title="Print"><img src="reports/print.png"></a>
</p>
</div>
</div>
<div id="container">
<h2></h2>
<h2>Mirpur Polytechnic Institute</h2>
<h3>Daily Collction Report</h3>
<h4>From <?php echo $fdate?> till <?php echo $tdate?></h4>
<table cellspacing="0">
<thead>
<tr>
<th width="20">Nr.</th>
<th width="30">Date</th>
<th width="15">Voucher</th>
<th width="20">Roll No</th>
<th width="20">Department</th>
<th width="20">Semester</th>
<th width="50">Total Bill</th>
<th width="100"> Received Amount</th>
<th width="100">Remarks</th>
</tr>
</thead>
<tbody>
<?php $nr=1;foreach ($query as $row): 
?>
<tr>
<td><?php echo $nr?></td>
<td class="first"><?php echo date('d/m/y', strtotime($row->payment_date))?></td>
<td><?php echo $row->voucher_no?></td>
<td><?php echo $row->roll_no?></td>
<td><?php $dept=$this->lib->getDeptName($row->roll_no);echo $dept->dept_name;?></td>
<td><?php echo $row->semester_name?></td>
<td><?php echo $row->total_bill;$totalsem+=$row->total_bill?></td>
<td><?php echo $row->total_received;$mot+=$row->total_received;?></td>
<td><?php echo $row->remarks?></td>
<?php $nr++;endforeach;?>
</tr>

</tbody>
<tfoot>
<tr>
<th colspan='5'>&nbsp;</th>
<th style="text-align:right"></th>
<th style="text-align:left">Total:</th>
<th style="text-align:left"><?php echo number_format($mot,2)?></th>
<th></th>
</tr>
</tfoot>
</table>
</div>
</body>
</html>